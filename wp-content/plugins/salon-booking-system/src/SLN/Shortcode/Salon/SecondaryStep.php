<?php

class SLN_Shortcode_Salon_SecondaryStep extends SLN_Shortcode_Salon_Step
{

    protected function dispatchForm()
    {
        $bb     = $this->getPlugin()->getBookingBuilder();
        $values = isset($_POST['sln']) && isset($_POST['sln']['services']) && is_array($_POST['sln']['services'])  ? $_POST['sln']['services'] : array();
        foreach ($this->getServices() as $service) {
            if (isset($values) && isset($values[$service->getId()])) {
                $bb->addService($service);
            } else {
                $bb->removeService($service);
            }
        }

        $bb->save();

        if (!$this->getPlugin()->getSettings()->isAttendantsEnabled() || !$this->getPlugin()->getSettings()->isAttendantsEnabledOnlyBackend()) {
            return true;
        }

        if ($this->getPlugin()->getSettings()->isMultipleAttendantsEnabled()) {

            $ids = array();

            foreach ($bb->getServicesIds() as $sId) {
                $ids[$sId] = '';
            }

            $_POST['sln']['attendants'] = $ids;
        } else {
            $_POST['sln']['attendant'] = '';
        }

        $_POST['submit_attendant'] = 'next';

        $attendantStep = $this->getShortcode()->getStepObject('attendant');

        if ($attendantStep->isValid()) {
            return true;
        }

        foreach ($attendantStep->getErrors() as $error) {
            $this->addError($error);
        }

        return false;
    }

    /**
     * @return SLN_Wrapper_Service[]
     */
    public function getServices()
    {
        if ( ! isset($this->services)) {
            /** @var SLN_Repository_ServiceRepository $repo */
            $repo     = $this->getPlugin()->getRepository(SLN_Plugin::POST_TYPE_SERVICE);
            $services = $repo->getAllSecondary();

            $bb = $this->getPlugin()->getBookingBuilder();
            $ah = $this->getPlugin()->getAvailabilityHelper();
            $ah->setDate($bb->getDateTime());
            $bookingServices = $bb->getBookingServices();
            foreach ($services as $k => $service) {
                $errs = $ah->validateServiceFromOrder($service, $bookingServices);
                if ( ! empty($errs)) {
                    unset($services[$k]);
                }
            }

            $this->services = $repo->sortByExecAndTitleDESC($services);
            $this->services = apply_filters('sln.shortcode.salon.SecondaryStep.getServices', $this->services);
        }

        return $this->services;
    }

    public function getTotal()
    {

    }

    public function isValid()
    {
        $tmp = $this->getServices();

        if (!empty($tmp)) {
            return parent::isValid();
        }
        else {
            parent::isValid();
            return true;
        }
    }
}
