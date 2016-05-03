<div class="container-fluid footer-content"> 
        <div class="row footer-wrapper">
            <div class="footer-info col-sm-12 col-md-4">  
                <?php if ( $footer_title = get_theme_mod( 'cha_footer_email_title' ) ) : ?>
                    <h3><?php echo $footer_title; ?></h3>
                <?php endif; ?>

                <?php if ( $footer_content = get_theme_mod( 'cha_footer_email_content' ) ) : ?>
                    <a href="mailto:<?php echo $footer_content; ?>" target="_top" class="footer-info-mail"><?php echo $footer_content; ?></a>
                <?php endif; ?>
            </div> 
            <div class="footer-info col-sm-12 col-md-4">
                <?php if ( $footer_adress = get_theme_mod( 'cha_footer_adress_title' ) ) : ?>
                    <h3><?php echo $footer_adress; ?></h3>
                <?php endif; ?>

                <?php if ( $footer_adress_content = get_theme_mod( 'cha_footer_adress_content' ) ) : ?>
                    <p><?php echo $footer_adress_content; ?></p>
                <?php endif; ?>  
            </div> 
            <div class="footer-info col-sm-12 col-md-4">  
                <?php if ( $facebook_link = get_theme_mod( 'cha_footer_social_facebook') ) : ?>
                    <a href="<?php echo esc_url ($facebook_link );  ?>" class="social facebook"></a>
                <?php endif; ?>

                <?php if ( $linkedin_link = get_theme_mod( 'cha_footer_social_linkedin') ) : ?>
                    <a href="<?php echo esc_url ($linkedin_link );  ?>" class="social linkedin"></a>
                <?php endif; ?>

                <?php if ( $twitter_link = get_theme_mod( 'cha_footer_social_twitter') ) : ?>
                    <a href="<?php echo esc_url ($twitter_link );  ?>" class="social twitter"></a>
                <?php endif; ?>
            </div>  
        </div> 
</div>
<?php wp_footer(); ?> 
</body> 
</html>








