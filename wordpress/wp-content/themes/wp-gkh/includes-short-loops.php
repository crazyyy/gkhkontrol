<ul class="short-loops">
  <?php query_posts("showposts=10"); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <h5><?php the_title(); ?></h5>
        <?php wpeExcerpt('wpeExcerpt40'); ?>
      </a>
    </li>
  <?php endwhile; else: ?>
  <?php endif; ?>
</ul>
