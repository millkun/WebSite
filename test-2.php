<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="millkun">
    <meta name="description" content="Личный сайт millkun">
    <meta data-rh="true" name="referrer" content="no-referrer-when-downgrade">
    <meta data-rh="true" property="og:url" content="https://millkun.ru">
    <meta data-rh="true" property="og:type" content="website">
    <meta data-rh="true" property="og:title" content="millkun">
    <meta data-rh="true" property="og:description" content="Личный сайт millkun">
    <meta data-rh="true" property="og:site_name" content="Личный сайт millkun">
    <meta data-rh="true" property="og:locale" content="ru">
    <title>millkun</title>
    <style>
        @font-face {
            font-family: "ch122";
            src: url("/assets/fonts/Ch122.ttf");
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: "YS Text", Arial, sans-serif;
            font-weight: 300;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        html {
            height: 100%;
        }
        
        /* Header Styles */
        .lc-header-lpc__wrapper {
            position: relative;
            width: 100%;
            background-color: #FFFFFF;
            box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .lc-header-lpc {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 16px;
            height: 64px;
        }
        
        .lc-header-lpc__left-wrapper {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }
        
        .lc-header-lpc__left {
            display: flex;
            align-items: center;
        }
        
        .lc-logo-block__logo-container {
            display: inline-block;
        }
        
        .lc-logo-block__logo-container_desktop {
            display: block;
        }
        
        .lc-logo-block__logo-container_mobile {
            display: none;
        }
        
        .lc-link {
            color: inherit;
            text-decoration: none;
            cursor: pointer;
        }
        
        .lc-service-icon__img {
            display: flex;
            align-items: center;
        }
        
        .lc-picture__image {
            display: block;
            max-width: 100%;
            height: auto;
        }
        
        /* Navigation Menu */
        .lc-navigation-menu {
            display: flex;
            align-items: center;
            height: 100%;
        }
        
        .lc-navigation-menu__wrapper {
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
            height: 100%;
        }
        
        .lc-navigation-menu__item {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
        }
        
        .link_pseudo {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 12px;
            color: #000000;
            cursor: pointer;
            transition: color 0.2s ease;
        }
        
        .link_pseudo:hover {
            color: #0070f0;
        }
        
        .lc-navigation-menu__submenu-link-text {
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .lc-styled-text__text {
            font-size: 15px;
            line-height: 20px;
            white-space: nowrap;
        }
        
        .lc-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 12px;
            height: 12px;
            transition: transform 0.3s ease;
        }
        
        .lc-navigation-menu__link_active .lc-icon {
            transform: rotate(180deg);
        }
        
        /* Submenu Styles */
        .lc-navigation-menu__submenu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 240px;
            background: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            list-style: none;
            margin: 0;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
        }
        
        .lc-navigation-menu__item:hover .lc-navigation-menu__submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .lc-navigation-menu__submenu li {
            margin: 0;
        }
        
        .lc-navigation-menu__submenu .lc-link {
            display: block;
            padding: 10px 16px;
            font-size: 14px;
            line-height: 18px;
            color: #000000;
            transition: background-color 0.2s ease;
            white-space: nowrap;
        }
        
        .lc-navigation-menu__submenu .lc-link:hover {
            background-color: #f5f5f5;
            color: #0070f0;
        }
        
        /* Burger Menu */
        .lc-header-lpc__burger-wrapper {
            display: none;
        }
        
        .lc-header-lpc-burger__burger-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }
        
        .lc-header-lpc-burger__menu-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        
        .lc-header-lpc-burger__menu-wrapper_active {
            opacity: 1;
            visibility: visible;
        }
        
        .lc-header-lpc-burger__paranja {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        .lc-header-lpc-burger__menu {
            position: absolute;
            top: 0;
            right: 0;
            width: 320px;
            height: 100%;
            background: #FFFFFF;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            overflow-y: auto;
        }
        
        .lc-header-lpc-burger__menu-wrapper_active .lc-header-lpc-burger__menu {
            transform: translateX(0);
        }
        
        .lc-header-lpc-burger__close {
            position: absolute;
            top: 16px;
            left: 16px;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 10;
        }
        
        .lc-header-lpc-burger__close::before,
        .lc-header-lpc-burger__close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 2px;
            background: #000000;
            transform: translate(-50%, -50%) rotate(45deg);
        }
        
        .lc-header-lpc-burger__close::after {
            transform: translate(-50%, -50%) rotate(-45deg);
        }
        
        .lc-header-lpc-burger__content {
            padding: 72px 0 24px;
            height: 100%;
        }
        
        .lc-header-lpc-burger__links-wrapper {
            height: 100%;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__wrapper {
            flex-direction: column;
            align-items: flex-start;
            padding: 0 16px;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__item {
            width: 100%;
            height: auto;
            margin-bottom: 0;
        }
        
        .lc-header-lpc-burger__links .link_pseudo {
            width: 100%;
            padding: 16px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .lc-header-lpc-burger__link-content {
            width: 100%;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__submenu {
            position: static;
            width: 100%;
            box-shadow: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background: transparent;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__item_layout_vertical.lc-navigation-menu__item_active .lc-navigation-menu__submenu {
            max-height: 500px;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__submenu .lc-link {
            padding: 12px 16px;
            border-bottom: none;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__submenu-arrow {
            margin-left: auto;
        }
        
        .lc-header-lpc-burger__links .lc-navigation-menu__item_active .lc-navigation-menu__submenu-arrow {
            transform: rotate(180deg);
        }
        
        /* Mobile Styles */
        @media (max-width: 768px) {
            .lc-header-lpc__menu {
                display: none;
            }
            
            .lc-header-lpc__burger-wrapper {
                display: block;
            }
            
            .lc-logo-block__logo-container_desktop {
                display: none;
            }
            
            .lc-logo-block__logo-container_mobile {
                display: block;
            }
        }
        
        /* Desktop menu item spacing */
        .lc-navigation-menu__item_layout_horizontal {
            margin-right: 16px;
        }
    </style>
</head>
<body>
    <header class="lc-header-lpc__wrapper lc-header-lpc__wrapper_theme_light">
        <div class="lc-header-lpc lc-header-lpc_right_none">
            <div class="lc-header-lpc__left-wrapper">
                <div class="lc-header-lpc__left lc-header-lpc__left_size_icon">
                    <span class="lc-logo-block__logo-container lc-logo-block__logo-container_desktop lc-header-lpc__logo-container">
                        <a class="Link link lc-link lc-service-icon lc-service-icon_size_m lc-service-icon_new lc-logo-block__logo-icon lc-logo-block__logo-icon_new lc-logo-block__logo-icon_desktop" href="https://millkun.ru" data-clickable="true">
                            <div class="lc-picture lc-picture_migrated lc-service-icon__img" style="width: 83.25px;">
                                <img alt="logo" class="lc-picture__full-size-block lc-picture__image lc-picture__image_loaded" src="/assets/images/test/zq7b3inx5u.png" width="89" height="32" loading="lazy">
                            </div>
                        </a>
                    </span>
                    <span class="lc-logo-block__logo-container lc-logo-block__logo-container_mobile lc-header-lpc__logo-container">
                        <a class="Link link lc-link lc-service-icon lc-service-icon_size_s lc-service-icon_new lc-logo-block__logo-icon lc-logo-block__logo-icon_new lc-logo-block__logo-icon_mobile" href="https://millkun.ru" data-clickable="true">
                            <div class="lc-picture lc-picture_migrated lc-service-icon__img" style="width: 58.275px;">
                                <img alt="logo" class="lc-picture__full-size-block lc-picture__image lc-picture__image_loaded" src="/assets/images/test/zq7b3inx5u.png" width="111" height="40" loading="lazy">
                            </div>
                        </a>
                    </span>
                    <div class="lc-header-lpc__hidden"></div>
                </div>
            </div>
            
            <nav class="lc-navigation-menu lc-header-lpc__menu lc-header-lpc__menu_align_right">
                <ul class="lc-navigation-menu__wrapper">
                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_horizontal" style="margin-right: 16px;">
                        <a class="Link link lc-link lc-navigation-menu__link lc-navigation-menu__link_active" href="https://millkun.ru" role="link" tabindex="0">
                            <div class="lc-styled-text">
                                <div class="lc-styled-text__text">Главная</div>
                            </div>
                        </a>
                    </li>
                    
                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_horizontal" style="margin-right: 16px;">
                        <a class="Link link lc-link lc-navigation-menu__link lc-navigation-menu__link_active" href="https://millkun.ru" role="link" tabindex="0">
                            <div class="lc-styled-text">
                                <div class="lc-styled-text__text">Скоро...</div>
                            </div>
                        </a>
                    </li>
                    
                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_horizontal" style="margin-right: 16px;">
                        <span class="link link_pseudo lc-link lc-navigation-menu__link lc-navigation-menu__link_active lc-navigation-menu__link_open-on_hover" aria-label="Университет" aria-expanded="false" role="button" tabindex="0">
                            <span class="lc-navigation-menu__submenu-link-text">
                                <div class="lc-styled-text">
                                    <div class="lc-styled-text__text">Университет</div>
                                </div>
                                <div class="lc-icon lc-icon_fill-type_fill lc-navigation-menu__submenu-arrow" aria-hidden="true">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                        <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </span>
                            <ul class="lc-navigation-menu__submenu" role="dialog" aria-modal="false" aria-label="Подменю">
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">Программ.</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">ОргЭВМиС</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">ООП</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">АиСД</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">ОС</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">ТОЭ</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">оЦОС</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">ГеомМод</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">БД</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">НепрМО</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">КТПрВП</div></div></a></li>
                            </ul>
                        </span>
                    </li>
                    
                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_horizontal" style="margin-right: 16px;">
                        <span class="link link_pseudo lc-link lc-navigation-menu__link lc-navigation-menu__link_active lc-navigation-menu__link_open-on_hover" aria-label="Скоро..." aria-expanded="false" role="button" tabindex="0">
                            <span class="lc-navigation-menu__submenu-link-text">
                                <div class="lc-styled-text">
                                    <div class="lc-styled-text__text">Скоро...</div>
                                </div>
                                <div class="lc-icon lc-icon_fill-type_fill lc-navigation-menu__submenu-arrow" aria-hidden="true">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                        <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </span>
                            <ul class="lc-navigation-menu__submenu" role="dialog" aria-modal="false" aria-label="Подменю">
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></a></li>
                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></a></li>
                            </ul>
                        </span>
                    </li>
                </ul>
            </nav>
            
            <div class="lc-header-lpc__right">
                <div class="lc-header-lpc__burger-wrapper lc-header-lpc__burger-wrapper_align_right">
                    <div class="lc-header-lpc-burger">
                        <button class="lc-header-lpc-burger__burger-button" aria-expanded="false" aria-label="Открыть меню">
                            <div class="lc-icon lc-icon_fill-type_fill lc-header-lpc-burger__burger-icon lc-header-lpc-burger__burger-icon_theme_light" aria-hidden="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                    <path d="M1 3H15M1 8H15M1 13H15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </button>
                        <div class="lc-header-lpc-burger__menu-wrapper lc-header-lpc-burger__menu-wrapper_hidden" role="dialog" aria-modal="true" aria-label="Меню">
                            <div class="lc-header-lpc-burger__paranja"></div>
                            <div class="lc-header-lpc-burger__menu lc-header-lpc-burger__menu_align_right">
                                <button class="lc-header-lpc-burger__close lc-header-lpc-burger__close_align_left lc-header-lpc-burger__close_theme_light" aria-label="Закрыть меню"></button>
                                <div class="lc-header-lpc-burger__menu-background lc-header-lpc-burger__menu-background_align_right lc-header-lpc-burger__menu-background_theme_light"></div>
                                <div class="lc-header-lpc-burger__content">
                                    <div class="lc-header-lpc-burger__main-content">
                                        <div class="lc-header-lpc-burger__links-wrapper">
                                            <nav class="lc-navigation-menu lc-header-lpc-burger__links lc-header-lpc-burger__links_with-top-padding lc-header-lpc-burger__links_with-bottom-padding lc-header-lpc-burger__links_theme_light">
                                                <ul class="lc-navigation-menu__wrapper">
                                                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_vertical" style="margin-bottom: 0px;">
                                                        <a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" role="link" tabindex="0">
                                                            <div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light">
                                                                <div class="lc-styled-text">
                                                                    <div class="lc-styled-text__text">Главная</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_vertical" style="margin-bottom: 0px;">
                                                        <a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" role="link" tabindex="0">
                                                            <div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light">
                                                                <div class="lc-styled-text">
                                                                    <div class="lc-styled-text__text">Скоро...</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_vertical lc-navigation-menu__item_active" style="margin-bottom: 0px;">
                                                        <span class="link link_pseudo lc-link lc-navigation-menu__link" aria-label="Университет" aria-expanded="false" role="button" tabindex="0">
                                                            <div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light">
                                                                <span class="lc-navigation-menu__submenu-link-text">
                                                                    <div class="lc-styled-text">
                                                                        <div class="lc-styled-text__text">Университет</div>
                                                                    </div>
                                                                    <div class="lc-icon lc-icon_fill-type_fill lc-navigation-menu__submenu-arrow" aria-hidden="true">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                                                            <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <ul class="lc-navigation-menu__submenu" role="group" aria-modal="false" aria-label="Подменю">
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">Программ.</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">ОргЭВМиС</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">ООП</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">АиСД</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">ОС</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">ТОЭ</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">оЦОС</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">ГеомМод</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">БД</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">НепрМО</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">КТПрВП</div></div></div></a></li>
                                                            </ul>
                                                        </span>
                                                    </li>
                                                    
                                                    <li class="lc-navigation-menu__item lc-navigation-menu__item_layout_vertical" style="margin-bottom: 0px;">
                                                        <span class="link link_pseudo lc-link lc-navigation-menu__link" aria-label="Скоро..." aria-expanded="false" role="button" tabindex="0">
                                                            <div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light">
                                                                <span class="lc-navigation-menu__submenu-link-text">
                                                                    <div class="lc-styled-text">
                                                                        <div class="lc-styled-text__text">Скоро...</div>
                                                                    </div>
                                                                    <div class="lc-icon lc-icon_fill-type_fill lc-navigation-menu__submenu-arrow" aria-hidden="true">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                                                            <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <ul class="lc-navigation-menu__submenu" role="group" aria-modal="false" aria-label="Подменю">
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></div></a></li>
                                                                <li><a class="Link link lc-link lc-navigation-menu__link" href="https://millkun.ru" data-clickable="true" tabindex="0"><div class="lc-header-lpc-burger__link-content lc-header-lpc-burger__link-content_theme_light"><div class="lc-styled-text"><div class="lc-styled-text__text">Скоро...</div></div></div></a></li>
                                                            </ul>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Burger menu functionality
            const burgerButton = document.querySelector('.lc-header-lpc-burger__burger-button');
            const burgerMenu = document.querySelector('.lc-header-lpc-burger__menu-wrapper');
            const closeButton = document.querySelector('.lc-header-lpc-burger__close');
            const paranja = document.querySelector('.lc-header-lpc-burger__paranja');
            
            if (burgerButton && burgerMenu) {
                burgerButton.addEventListener('click', function() {
                    burgerMenu.classList.add('lc-header-lpc-burger__menu-wrapper_active');
                    document.body.style.overflow = 'hidden';
                    burgerButton.setAttribute('aria-expanded', 'true');
                });
                
                function closeMenu() {
                    burgerMenu.classList.remove('lc-header-lpc-burger__menu-wrapper_active');
                    document.body.style.overflow = '';
                    burgerButton.setAttribute('aria-expanded', 'false');
                    
                    // Close all submenus when closing the main menu
                    const mobileSubmenuItems = document.querySelectorAll('.lc-header-lpc-burger__links .lc-navigation-menu__item');
                    mobileSubmenuItems.forEach(item => {
                        item.classList.remove('lc-navigation-menu__item_active');
                    });
                }
                
                if (closeButton) closeButton.addEventListener('click', closeMenu);
                if (paranja) paranja.addEventListener('click', closeMenu);
                
                // Mobile submenu functionality
                const mobileMenuItems = document.querySelectorAll('.lc-header-lpc-burger__links .link_pseudo[aria-expanded]');
                mobileMenuItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        e.preventDefault();
                        const parentItem = this.closest('.lc-navigation-menu__item');
                        const isActive = parentItem.classList.contains('lc-navigation-menu__item_active');
                        
                        // Close all other submenus
                        document.querySelectorAll('.lc-header-lpc-burger__links .lc-navigation-menu__item').forEach(el => {
                            if (el !== parentItem) {
                                el.classList.remove('lc-navigation-menu__item_active');
                            }
                        });
                        
                        // Toggle current submenu
                        parentItem.classList.toggle('lc-navigation-menu__item_active', !isActive);
                        this.setAttribute('aria-expanded', !isActive ? 'true' : 'false');
                    });
                });
            }
            
            // Desktop submenu hover functionality
            const desktopMenuItems = document.querySelectorAll('.lc-header-lpc__menu .link_pseudo[aria-expanded]');
            desktopMenuItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.setAttribute('aria-expanded', 'true');
                });
                
                item.addEventListener('mouseleave', function() {
                    this.setAttribute('aria-expanded', 'false');
                });
            });
        });
    </script>
</body>
</html>
