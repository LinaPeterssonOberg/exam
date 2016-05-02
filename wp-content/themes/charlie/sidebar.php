<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ){
    return;
}
?>

<ul class="sidebar">

    <?php dynamic_sidebar( 'sidebar-1' ); ?>

</ul>