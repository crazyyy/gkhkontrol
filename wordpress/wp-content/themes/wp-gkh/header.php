<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <!-- dns prefetch -->
    <link href="http://www.google-analytics.com/" rel="dns-prefetch">
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="wrapper clearfix">
    <!-- header -->
    <header role="banner">
      <div class="inner">

        <article class="block-left" data-mh="first-group">
          <div class="logo">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
                <a href="<?php echo home_url(); ?>">
            <?php  } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
                </a>
            <?php } ?>
          </div><!-- /logo -->
          <h2>Региональный центр общественного контроля в ЖКХ Нижегородской области</h2>
          <div class="description">
            <p>Создан во исполнение Указа № 600 на базе Ассоциации ТСЖ г.Н.Новгорода….</p>
            <p>Контакты: e-mail:<a href="mailto:gkh52@bk.ru">gkh52@bk.ru</a>  для писем: 603136, а/я 39</p>
            <p>Адрес: г. Нижний Новгород, улица Трудовая, дом 3</p>
            <p>Руководитель (ссылка на страницу-визитку с фото)</p>
          </div>
        </article>
        <!-- /block-left -->

        <article class="block-right" data-mh="first-group">
          <div class="logo">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
                <a href="<?php echo home_url(); ?>">
            <?php  } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
                </a>
            <?php } ?>
          </div><!-- /logo -->
          <h2>Региональная рабочая группа проекта «Школа грамотного потребителя»</h2>
          <div class="description">
            <p>Кратное описание федерального проекта «Школа грамотного потребителя»- проект проводится по решению Генсовета Партии и направлен на повышение правовой грамотности… -пара предложений</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga molestias neque dolor ullam minima doloribus nobis. Natus quae porro aliquid perspiciatis ipsum, quo minus ut amet non corporis, debitis dignissimos!</p>
            <p>Tempora debitis veniam quis ullam eos labore, sapiente iusto eum et tenetur! Illum dicta, quo commodi, ab ad quis voluptate. Distinctio explicabo laboriosam, corporis quaerat rem libero incidunt sunt necessitatibus.</p>
            <ul>
              <li>Решение Генерального совета (ссылка на файл)</li>
              <li>Решение Регионального политсовета (ссылка на файл)</li>
              <li>Состав региональной рабочей группы (ссылка на страницу Б-Р)</li>
              <li>Дорожная карта развития ЖКХ области (ссылка на файл)</li>
            </ul>
          </div>
        </article>
        <!-- /block-right -->

      </div>
    </header>
    <!-- /header -->
