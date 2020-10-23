<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head() ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap">
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/custom-icon-font/custom-icon-font.woff" as="font" type="font/woff" crossorigin>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/flexboxgrid/flexboxgrid.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/animatecss/animate.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/slick/slick.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/slick/slick-theme.min.css">
    <script src="https://kit.fontawesome.com/a0b6840f9a.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class();
?>>
    <div id="particles-js"></div>
    <div id="smoothContainer">
        <header>
            <div class="header-top-strip">
                <div class="header-top-strip__content">
                    <ul class="header-top-strip__content-left">
                        <li>
                            <a href="/">Оплата</a>
                        </li>
                        <li>
                            <a href="/">Доставка</a>
                        </li>
                        <li>
                            <a href="/">Контакты</a>
                        </li>
                        <li>
                            <a href="/">Еще<i class="fas fa-sort-down"></i></a>
                        </li>
                    </ul>
                    <ul class="header-top-strip__content-right">
                        <div class="header-discipline">
                            <a>Выберите дисциплину</a>
                        </div>
                        <div class="header-language">
                            <span class="header-flag"></span>
                            <a>Русский / BYN</a>
                        </div>
                    </ul>
                </div>
            </div>
            <div id="header">
                <div class="header-mid">
                    <div class="col-sm-2 header-mid__content">
                        <a class="navbar-brand" href="/">Лого </a>
                    </div>
                    <div class="col-sm-6 header-mid__content header-search">
                        <form method="get" action="/search/" class="searchFieldForm">
                            <fieldset class="searchFieldInputwrap">
                                <button type="submit" name="sa" class="searchFieldSubmit" title="Искать">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4406 10.3108C13.392 7.80345 13.2153 4.17663 10.9107 1.87197C8.4147 -0.623991 4.36794 -0.623991 1.87197 1.87197C-0.623991 4.36794 -0.623991 8.4147 1.87197 10.9107C4.17662 13.2153 7.80344 13.392 10.3108 11.4406L12.3058 13.5368C12.6152 13.8619 13.1317 13.8683 13.449 13.551C13.7555 13.2445 13.7616 12.7495 13.4628 12.4356L11.4406 10.3108ZM9.7857 9.77595C11.6528 7.90359 11.6512 4.87216 9.78083 3.00181C7.90886 1.12984 4.87379 1.12984 3.00181 3.00181C1.12984 4.87379 1.12984 7.90886 3.00181 9.78083C4.87216 11.6512 7.90359 11.6528 9.77595 9.7857C9.77758 9.78408 9.77921 9.78246 9.78083 9.78083C9.78245 9.77921 9.78408 9.77758 9.7857 9.77595Z"></path>
                                    </svg>
                                    <span>Поиск</span>
                                </button>
                                <input type="text" id="j-search" placeholder="Поиск товаров" name="term" class="searchFieldInput ui-autocomplete-input j-ga_track" data-ga_action="change" data-ga_on="change" data-ga_label="this.value" data-ga_category="Search" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" value=""><span class="search_loader"></span>
                                <button type="button" class="searchFieldClear">Очистить поиск</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-sm-2 header-mid__content">
                        <a class="header-contact" href="/">+375(29) 202-47-14</a>
                        <a class="header-contact" href="/">info@esh.by</a>
                    </div>
                    <div class="col-sm-2 header-mid__content">
                        <a class="header-helpButton" href="/">
                            <i class="fas fa-phone-alt"></i>
                            <span>Заказать звонок</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav-menu">
                <div class="nav-menu__Container">
                    <div class="nav-menu__Nav">
                        <dl class="nav-menu__List" id="nav-menu">
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-1</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">
                                    <table class="nav-menu__subList-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Level-1-1
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="nav-menu__subList-separator">&nbsp;</div>
                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-2</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-3</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-4</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-5</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-6</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-7</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-8</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-9</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                            <dt class="nav-menu__Item">
                                <span class="nav-menu__Link">Level-10</span>
                            </dt>
                            <dd class="nav-menu__Sub" style="display:none;">
                                <div class="nav-menu__subList">

                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </header>
    </div>