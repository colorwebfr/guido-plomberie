<?php

/**
 * Template for displaying contact popin
 */
?>

<div class="full-block-popin" style="display: none;">
    <div class="container">
        <div class="popin-contact">
            <div class="popin-contact__close">
                <i class="fas fa-times"></i>
            </div>
            <div class="popin-contact__content">
                <h2 class="popin-contact__title">Contactez-nous</h2>
                <div class="popin-contact__form">
                    <?= do_shortcode('[contact-form-7 id="14" title="Demander un devis"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>