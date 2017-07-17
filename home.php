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
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <h3><?php echo strip_tags(get_the_excerpt()); ?></h3>
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
            </div>
         </article>
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