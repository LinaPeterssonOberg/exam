<?php
if (! is_active_sidebar( 'default-sidebar' ) ) {
    return;
}
?>

<ul class="sidebar">
    <?php dynamic_sidebar( 'default-sidebar' ); ?>

</ul>