<?php get_header(); ?>
<div class="container-fluid">
<div class="row first-content">
        <div class="col-sm-12 col-md-12">
            <div class="image-text">
                <?php if ( $head_subtitle1 = get_theme_mod( 'cha_head5_options_title' ) ) : ?>
                    <div class="image-subtitle"><?php echo $head_subtitle1; ?></div>
                <?php endif; ?>

            <div class="image-text-border">
                <?php if ( $head_subtitle = get_theme_mod( 'cha1_head_options_title') ) : ?>
                    <div class="image-header"><?php echo $head_subtitle; ?></div>
                <?php endif; ?>
            </div>

                <?php if ( $head_subtitle = get_theme_mod( 'cha1_head_options_subtitle' ) ) : ?>
                    <div class="image-subtitle"><?php echo $head_subtitle; ?></div>
                <?php endif; ?>

            </div>
        </div>
</div>

<div class="row second-content">
        <div class="col-sm-12 col-md-6 service-widget-left-sidebar">
            <?php if ( is_active_sidebar('service-widget-left-sidebar') ) :

                dynamic_sidebar('service-widget-left-sidebar');

            else :

                the_widget('WP_Widget_Text','title=WHAT WE DO&text=Vi hjälper dig med allt från responsiv webbdesign, mobilapplikationer, kommunikation i sociala medier och beteendestyrd e-postkommunikation till fullskaliga kampanjer och smart kommunikation i multipla kanaler. På ren svenska: Vi fokuserar på din digitala närvaro och gör att den blir lönsam.', array('before_widget' => '', 'after_widget' => ''));

            endif;
            ?>
        </div>
        <div class="col-sm-12 col-md-6 service-widget-right-sidebar">

            <?php if ( is_active_sidebar('service-widget-right-sidebar') ) :

                dynamic_sidebar('service-widget-right-sidebar');

            else :

                the_widget('WP_Widget_Text','title=STRATEGY&text=Inget uppdrag är det andra likt. Som beställare kan du räkna med att vi alltid sätter fullt fokus på dina specifika behov. Vår samlade erfarenhet ger oss möjlighet att hjälpa dig med allt från responsiva webbplatser till e-postkommunikation och sökmotoroptimering. Vi kan – och brinner för – effektiv digital kommunikation.', array('before_widget' => '', 'after_widget' => ''));

            endif;

            ?>

        </div>
</div>

<div class="row third-content">
        <div class="col-sm-12 col-md-8 col-md-offset-2 third-content-widget">

            <?php if ( is_active_sidebar('text-widget-sidebar') ) :

                dynamic_sidebar('text-widget-sidebar' );

            else :

                the_widget('WP_Widget_Text','title=En kreativ byrå&text=Vi är den kreativa kraften bakom din affär. Vår omnikanalsyn skapar sömlöst sammanhängande och skalbara kundupplevelser, anpassade efter kundens beteende. Vi går in med allt vi har för att lösa dina problem – kreativ strategi, bländande design, teknisk magi och passionerat intresse och förståelse för mänskligt beteende. Vi är visionärer. Men opretentiösa sådana. After all, we’re just Some Guys.', array('before_widget' => '', 'after_widget' => ''));

            endif;
            ?>

        </div>
</div>

<div class="row fourth-content">
    <div class="description-row">

        <?php if( is_active_sidebar( 'description-widget-sidebar' ) ) :

            dynamic_sidebar( 'description-widget-sidebar' );

        else :
                the_widget( 'Description_Widget','description-head=PRODUKTION&description-textarea=Vi effektiviserar och utvecklar företags erbjudande, tjänster och kommunikation för att möta sina kunders beteende.&description_logo='.get_stylesheet_directory_uri()."/assets/images/settings.png", array('before_widget' => '', 'after_widget' => '') );
                the_widget( 'Description_Widget','description-head=KONCEPT&description-textarea=Koncept är konkreta lösningsförslag på en strategi. Vår roadmap samlar UX-design, interaktionsdesign, utveckling och visuell design.&description_logo='.get_stylesheet_directory_uri()."/assets/images/strategy.png", array('before_widget' => '', 'after_widget' => '') );
                the_widget( 'Description_Widget','description-head=DESIGN&description-textarea=Kompetens och kvalité är en självklarhet, men även service och flexibilitet! Vi har höga servicekrav för att möta varierande förfrågningar.&description_logo='.get_stylesheet_directory_uri()."/assets/images/design.png", array('before_widget' => '', 'after_widget' => '') );

        endif;
        ?>

    </div>
</div>
</div>


<?php get_footer(); ?>



