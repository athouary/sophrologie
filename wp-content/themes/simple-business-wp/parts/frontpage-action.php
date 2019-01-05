<?php
if (simple_business_wp_get_option('action-toggle') == "1") {
    ?>
    <section id="<?php if (simple_business_wp_get_option('fp-action-slug')=='') {echo "action";} else {echo esc_attr(simple_business_wp_get_option('fp-action-slug'));} ?>" class="frontpage-action">
        <div class="row content_squeeze action_row">
            <div class="col-xs-12">
            <?php echo esc_html(simple_business_wp_get_option('action_text_content')); ?>
            </div>
        </div>
    </section>
    <?php
} else if (simple_business_wp_get_option('action-toggle') == "3") {

} else {
?>
    <section id="<?php if (simple_business_wp_get_option('fp-action-slug')=='') {echo "action";} else {echo esc_attr(simple_business_wp_get_option('fp-action-slug'));} ?>" class="frontpage-action">
        <div class="row content_squeeze action_row">
            <div class="col-xs-12">
                <div class="text-center action-block" style="padding-bottom:25px;">
                    <div class="action-paragraph">
                        <p class="action-text" data-sr="wait 0.5s and enter right and then ease-in-out 100px">
                            Grâce&nbsp;à la&nbsp;pratique&nbsp;régulière d’exercices&nbsp;corporels et&nbsp;respiratoires, la&nbsp;sophrologie va&nbsp;vous&nbsp;aider à&nbsp;<span class="action-highlight">écouter votre&nbsp;corps et&nbsp;vos&nbsp;émotions</span>.
                        </p>
                        <div class="action-stuff"></div>
                    </div>
                    <div class="action-paragraph">
                        <p class="action-text" data-sr="wait 0.5s and enter left and then ease-in-out 100px">
                            Au-delà&nbsp;de&nbsp;cet&nbsp;apprentissage, elle&nbsp;vous&nbsp;permet de&nbsp;développer une&nbsp;<span class="action-highlight">attitude&nbsp;positive</span> face&nbsp;à&nbsp;la&nbsp;vie, de&nbsp;prendre&nbsp;conscience de&nbsp;vos&nbsp;ressources, de&nbsp;votre&nbsp;potentiel et&nbsp;de&nbsp;porter un&nbsp;nouveau&nbsp;regard, plus&nbsp;bienveillant, sur&nbsp;votre&nbsp;environnement et&nbsp;sur&nbsp;vous-même.
                        </p>
                        <div class="action-stuff"></div>
                    </div>
                    <div class="action-paragraph">
                        <p class="action-text" data-sr="wait 0.5s and enter right and then ease-in-out 100px">
                        La&nbsp;sophrologie est&nbsp;une&nbsp;méthode de&nbsp;<span class="action-highlight">développement&nbsp;personnel</span>&nbsp;; pour&nbsp;en&nbsp;mesurer les&nbsp;bienfaits, l’accompagnement&nbsp;peut&nbsp;nécessiter entre&nbsp;5&nbsp;et&nbsp;10&nbsp;séances.
                        </p>
                        <div class="action-stuff"></div>
                    </div>
                </div>
                <div class="text-center action-button">
                    <div class="action-background"><br></div>
                    <a href="#rendez-vous" type="button" class="btn btn-primary text-center">Prendre rendez-vous</a>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
