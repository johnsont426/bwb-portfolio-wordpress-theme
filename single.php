<?php get_header(); ?>

<main>
  <div class="container">
    <div class="blog-main-content">
      <div class="main-content blog-posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php if(get_the_post_thumbnail()): ?>
            <div class="img-container">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
          <?php endif; ?>
          <article class="post">
            <div class="post-text">
              <h2><?php the_title(); ?></h2>
              <ul class="post-meta">
                <li>
                  <span class="wpt-avatar small">
                    <?php echo get_avatar( get_the_author_meta('ID'), 24) ?>
                  </span>
                </li>
                <li class="author">by <?php the_author_posts_link(); ?></li>
                <li class="cat">in <?php the_category(','); ?></li>
                <li class="date">in <?php the_time('F j, Y'); ?></li>
              </ul>
              <h3><?php the_content(); ?></h3>
            </div>
            <div class="previous-next">
              <?php previous_post_link('%link', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Previous'); ?>
              <?php next_post_link('%link', 'Next<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>'); ?>
            </div>
         </article>
          <?php comments_template(); ?>
        <?php endwhile; else : ?>
        <h1>Oops</h1>
        <h2>sorry we can't find any post</h2>
        <?php endelse; endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>


<?php get_footer(); ?>