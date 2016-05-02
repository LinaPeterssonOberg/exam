<li class="archive-article">
    <div class="archive-text">
        <a href="<?php esc_url(the_permalink() ); ?>" class="article-link">

            <h4><?php the_title(); ?></h4>

        </a>


        <?php the_excerpt(); ?>
        <ul class="article-meta">
            <li>
                <i class="glyphicon glyphicon-time"></i>
                <?php the_date(); ?>
            </li>
            <li>
                <i class="glyphicon glyphicon-comment"></i>
                <?php comments_number( '0', '1','%'); ?> <!-- modular hämtar antalet kommentarer -->
            </li>

        </ul>
    </div>
</li>