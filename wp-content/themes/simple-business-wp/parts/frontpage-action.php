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
                    <p class="action-text">
                        Grâce à la pratique régulière d’exercices corporels et respiratoires, la sophrologie va vous aider à écouter votre corps et vos émotions.
                    </p>
                    <div class="action-stuff"></div>
                </div>
                <div class="action-paragraph">
                    <p class="action-text">
                        Au-delà de cet apprentissage, elle vous permet de développer une attitude positive face à la vie, de prendre conscience de vos ressources, de votre potentiel et de porter un nouveau regard, plus bienveillant, sur votre environnement et sur vous-même.
                    </p>
                    <div class="action-stuff"></div>
                </div>
                <div class="action-paragraph">
                    <p class="action-text">
                    La sophrologie est une méthode de développement personnel; pour en mesurer les bienfaits, l’accompagnement peut nécessiter entre 5 et 10 séances.
                    </p>
                    <div class="action-stuff"></div>
                </div>
            </div>
            <p class="text-center"><a href="#" type="button" class="btn btn-primary text-center">Your Button</a></p>
            </div>
        </div>
    </section>
<?php
}
?>
