<?php

namespace SLB_API\Controller;

use SLN_Func;
use SLN_Plugin;
use SLN_DateTime;
use WP_REST_Server;
use SLN_Wrapper_Booking_Services;

class AvailabilityAssistants_Controller extends REST_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'availability/assistants';

    public function register_routes() {

        register_rest_route( $this->namespace, '/' . $this->rest_base , array(
            'args' => array(
                'date'     => array(
                    'description'       => __('Date.', 'salon-booking-system'),
                    'type'              => 'string',
                    'format'            => 'YYYY-MM-DD',
                    'required'          => true,
                    'validate_callback' => array($this, 'rest_validate_request_arg'),
                ),
                'time'     => array(
                    'description'       => __('Time.', 'salon-booking-system'),
                    'type'              => 'string',
                    'format'            => 'HH:ii',
                    'required'          => true,
                    'validate_callback' => array($this, 'rest_validate_request_arg'),
                ),
                'services' => array(
                    'description' => __('Selected services.', 'salon-booking-system'),
                    'type'        => 'array',
                    'required'    => true,
                    'default'     => array(),
                    'items'             => array(
                        'type'       => 'object',
                        'required'   => array('service_id', 'assistant_id'),
                        'properties' => array(
                            'service_id' =>  array(
                                'type' => 'integer',
                            ),
                            'assistant_id' =>  array(
                                'type' => 'integer',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'methods'  => WP_REST_Server::READABLE,
                'callback' => array($this, 'get_assistants'),
            ),
        ) );

    }

    public function get_assistants( $request )
    {
        $services = array();

        foreach ($request->get_param('services') as $s) {

            if (!isset($s['service_id']) || !isset($s['assistant_id'])) {
                continue;
            }

            $services[$s['service_id']] = $s['assistant_id'];
        }

        $ret = $this->validate(
            $services,
            $this->get_date_time(
                $request->get_param('date'),
                $request->get_param('time')
            ),
            SLN_Plugin::getInstance()->getAvailabilityHelper()
        );

        return $this->success_response($ret);
    }

    public function validate($services, $date, $ah)
    {
        $assistants = array();
        $isValid    = true;

        $ah->setDate($date);

        $bookingServices = SLN_Wrapper_Booking_Services::build($services, $date);

        $availAttsForEachService = array();

        foreach ($bookingServices->getItems() as $bookingService) {

            $service   = $bookingService->getService();
            $serviceId = $service->getId();

            if (!$service->isAttendantsEnabled()) {
                $assistants[$serviceId] = array();
                continue;
            }

            $availAttsForEachService = $ah->getAvailableAttsIdsForBookingService($bookingService);

            $tmpAssistants       = array();
            $selectedAttendantId = $services[$serviceId];

            foreach ($availAttsForEachService as $attId) {
                $tmpAssistants[$attId] = array(
                    'available' => true,
                    'selected'  => $attId === $selectedAttendantId,
                    'error'     => '',
                );
            }

            if ( $selectedAttendantId && ! in_array($selectedAttendantId, $availAttsForEachService) ) {

                $attendant = SLN_Plugin::getInstance()->createAttendant($selectedAttendantId);

                $tmpAssistants[$selectedAttendantId] = array(
                    'available' => false,
                    'selected'  => false,
                    'error'     => sprintf(
                        __('Attendant %s isn\'t available for %s service at %s', 'salon-booking-system'),
                        $attendant->getName(),
                        $service->getName(),
                        $ah->getDayBookings()->getTime(
                            $bookingService->getStartsAt()->format('H'),
                            $bookingService->getStartsAt()->format('i')
                        )
                    ),
                );

                $isValid = false;
            }

            $assistants[$serviceId] = $tmpAssistants;
        }

        return array(
            'is_valid'   => $isValid,
            'assistants' => $assistants,
        );
    }

    protected function get_date_time($date, $time)
    {
        $ret  = new SLN_DateTime(
            SLN_Func::filter($date, 'date').' '.SLN_Func::filter($time, 'time'.':00')
        );

        return $ret;
    }

}