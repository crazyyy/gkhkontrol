<?php /* Template Name: Home Page Template */ get_header(); ?>

    <!-- section -->
    <section role="main">
      <div class="inner">

        <article class="block-left" data-mh="second-group">
          <div class="half-block-left">
            <p>Ссылки на добавляемые администратором сайта страницы-визитки общественных организаций</p>
          </div><!-- /.half-block-left -->
          <div class="half-block-right">
            <p>Ссылка на страницу Регионального  центра на сайте НП ЖКХ Контроль</p>
          </div><!-- /.half-block-right -->
        </article>
        <!-- /block-left -->

        <article class="block-right" data-mh="second-group">
          <div class="half-block-left">
            <p>Местные рабочие группы проекта «Школа грамотного потребителя»-в городских округах и муниципальных районах</p>
          </div><!-- /.half-block-left -->
          <div class="half-block-right">
            <p>Центры поддержки собственников (ссылка на страницу Б-С)</p>
          </div><!-- /.half-block-right -->
        </article>
        <!-- /block-right -->

      </div><!-- inner -->

      <div class="inner">
        <article class="block-wide block-news">
          <h3>Новости <a href="<?php echo home_url(); ?>/allnews.htm">все новости</a></h3>
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
        </article><!-- /.block-wide -->
      </div><!-- /.inner -->


    </section>
    <!-- /section -->

<?php get_footer(); ?>
