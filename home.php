<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

        <section class="hero" id="hero">
            <div class="hero__gradient"></div>
            <div class="container">
                <div class="hero__inner">
                    <div class="hero__wrapper" data-aos="fade-up">
                        <h1 class="hero__title">Храм Покрова<br>Пресвятой Богородицы</h1>
                        <p class="hero__subtitle">Приветствуем Вас на сайте прихода храма Покрова Пресвятой Богородицы аг. Слобода Озерицко-Слободского сельсовета Смолевичского района!</p>
                        <a href="#church" class="hero__link">О храме</a>
                    </div>
                    <a href="#schedule" class="hero__svg-link">
                        <svg class="hero__arrow-down" data-aos="fade-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513.000000 305.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,305.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path class="hero__arrow-path" d="M222 3026 c-193 -63 -272 -286 -159 -451 27 -40 2248 -2436 2307 -2489 62 -56 122 -80 200 -80 95 1 150 28 242 122 41 42 567 608 1168 1257 860 928 1098 1191 1117 1232 33 71 39 137 19 204 -31 109 -104 177 -219 205 -62 16 -72 16 -133 1 -40 -10 -84 -30 -110 -49 -25 -18 -502 -526 -1061 -1128 -559 -602 -1020 -1095 -1024 -1095 -4 0 -471 500 -1038 1110 -797 858 -1043 1117 -1082 1139 -61 35 -159 44 -227 22z"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="modals-fade" id="modal" data-modal data-modal-close>
                <div class="modal__window">
                    <div class="modal__window-inner">
                        <svg class="modal__window-close" data-modal-close viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                        </svg>
                        <img class="modal__window-image" src="<?php bloginfo('template_url'); ?>/assets/img/INVITE.WEBP" alt="Приглашение на престольный праздник и пакровский кирмаш">
                    </div>
                </div>
            </div>
        </section>

        <section class="schedule section" id="schedule">
            <div class="container">
                <div class="schedule__inner">
                    <h2 class="schedule__title title" data-aos="fade-up">Расписание Богослужений</h2>
                    <!-- Slider main container -->
                    <div class="schedule__swiper swiper">
                        <!-- Additional required wrapper -->
                        <div class="schedule__swiper-wrapper swiper-wrapper">
                            <!-- Slides -->
                            <div class="schedule__slide swiper-slide" data-aos="fade-up">
                                <div class="schedule__card-top">
                                    <div class="schedule__date">7</div>
                                    <div class="schedule__month-day">
                                        <p class="schedule__month">октября</p>
                                        <p class="schedule__day">суббота</p>
                                    </div>
                                </div>
                                <div class="schedule__card-bottom">
                                    <div class="schedule__celebration"></div>
                                    <ul class="schedule__list">
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">18:00</div>
                                            <div class="schedule__item-description">Всенощное бдение.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Исповедь в конце богослужения.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="schedule__slide swiper-slide" data-aos="fade-up">
                                <div class="schedule__card-top">
                                    <div class="schedule__date">8</div>
                                    <div class="schedule__month-day">
                                        <p class="schedule__month">октября</p>
                                        <p class="schedule__day">воскресенье</p>
                                    </div>
                                </div>
                                <div class="schedule__card-bottom">
                                    <div class="schedule__celebration">Преподобного Сергия, игумена Радонежского, чудотворца.</div>
                                    <ul class="schedule__list">
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">8:30</div>
                                            <div class="schedule__item-description">Исповедь.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">9:00</div>
                                            <div class="schedule__item-description">Божественная литургия.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Молебен.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Панихида.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="schedule__slide swiper-slide" data-aos="fade-up">
                                <div class="schedule__card-top">
                                    <div class="schedule__date">11</div>
                                    <div class="schedule__month-day">
                                        <p class="schedule__month">октября</p>
                                        <p class="schedule__day">среда</p>
                                    </div>
                                </div>
                                <div class="schedule__card-bottom">
                                    <div class="schedule__celebration"></div>
                                    <ul class="schedule__list">
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">18:00</div>
                                            <div class="schedule__item-description">Молебен с акафистом преподобным Кириллу и Марии, родителям прп. Сергия Радонежского.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="schedule__slide swiper-slide" data-aos="fade-up">
                                <div class="schedule__card-top">
                                    <div class="schedule__date">13</div>
                                    <div class="schedule__month-day">
                                        <p class="schedule__month">октября</p>
                                        <p class="schedule__day">пятница</p>
                                    </div>
                                </div>
                                <div class="schedule__card-bottom">
                                    <div class="schedule__celebration"></div>
                                    <ul class="schedule__list">
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">18:00</div>
                                            <div class="schedule__item-description">Всенощное бдение с литией.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Исповедь в конце богослужения.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="schedule__slide swiper-slide" data-aos="fade-up">
                                <div class="schedule__card-top">
                                    <div class="schedule__date">14</div>
                                    <div class="schedule__month-day">
                                        <p class="schedule__month">октября</p>
                                        <p class="schedule__day">суббота</p>
                                    </div>
                                </div>
                                <div class="schedule__card-bottom">
                                    <div class="schedule__celebration">ПОКРОВ ПРЕСВЯТОЙ ВЛАДЫЧИЦЫ НАШЕЙ БОГОРОДИЦЫ И ПРИСНОДЕВЫ МАРИИ.   </div>
                                    <ul class="schedule__list">
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">8:00</div>
                                            <div class="schedule__item-description">Освящение воды.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">8:30</div>
                                            <div class="schedule__item-description">Исповедь.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">9:00</div>
                                            <div class="schedule__item-description">Божественная литургия.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Молебен.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Крестный ход.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">11:00</div>
                                            <div class="schedule__item-description">Пакроўскі кірмаш у Слабадзе 11:00 – 14:00 возле храма (в 12:00 праздничный концерт).</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">18:00</div>
                                            <div class="schedule__item-description">Всенощное бдение.</div>
                                        </li>
                                        <li class="schedule__list-item">
                                            <div class="schedule__item-time">--:--</div>
                                            <div class="schedule__item-description">Исповедь в конце богослужения.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__pagination swiper-pagination"></div>
                    </div>
                    <a href="https://pokrov.by/schedule-2/" class="schedule__link" data-aos="fade-up">Полное расписание Богослужений</a>
                </div>
            </div>
        </section>

        <section class="church section" id="church">
            <div class="container">
                <div class="church__inner">
                    <h2 class="church__title title" data-aos="fade-up">О храме</h2>
                    <div class="church__box church__box1 ">
                        <div class="church__wrapper">
                            <div class="church__left" data-aos="fade-up">
                                <img class="church__church-img" src="<?php bloginfo('template_url'); ?>/assets/img/church-img.webp" loading="lazy" alt="Храм Покрова Пресвятой Богородицы">
                            </div>
                            <div class="church__right" data-aos="fade-up">
                                <h3 class="church__right-subtitle">Храм Покрова Пресвятой Богородицы.</h3>
                                <p class="church__right-text">
                                    Богослужения постоянно совершаются по субботам (18:00 – всенощное бдение, в конце богослужения – исповедь), по воскресеньям (8:30 – исповедь, 8:40 – часы, 9:00 – Божественная литургия, после литургии – молебен и панихида) и по средам (18:00 – молебен с акафистом). 
                                    В дни великих великих и двунадесятых праздников (накануне в 18:00 – всенощное бдение с литией и исповедь, в самый день праздника в 8:30 – исповедь, в 8:40 – часы, в 9:00 – Божественная литургия и молебен). 
                                    По предварительной договоренности в любой день могут быть отслужены панихида или молебен, совершены Таинства Церкви.
                                </p>
                                <a class="church__right-link" href="https://pokrov.by/church/">Читать далее</a>
                            </div>
                        </div>
                    </div>
                    <div class="church__box">
                        <div class="church__wrapper">
                            <div class="church__left2" data-aos="fade-up">
                                <h3 class="church__right-subtitle">Настоятель Храма Покрова Пресвятой Богородицы.</h3>
                                <p class="church__right-title">
                                    Иерей Иоанн Ясюкевич.
                                </p>
                                <p class="church__right-text">
                                    Назначен на должность настоятеля прихода храма Покрова Пресвятой Богородицы 
                                    агрогородка Слобода Озерицко-Слободского сельсовета Смолевичского района 
                                    Минской области в 2010 году.
                                </p>
                                <a class="church__right-link" href="https://pokrov.by/nastoyatel-hrama/">Читать далее</a>
                            </div>
                            <div class="church__right2" data-aos="fade-up">
                                <img class="church__church-img" src="<?php bloginfo('template_url'); ?>/assets/img/DSCF3359_MIN.WEBP" loading="lazy" alt="Настоятель Храма Покрова Пресвятой Богородицы">
                            </div>
                        </div>
                    </div>
                    <div class="church__box" id="sunday-school">
                        <div class="church__wrapper">
                            <div class="church__sunday-left" data-aos="fade-up">
                                <img class="church__sunday-image1" src="<?php bloginfo('template_url'); ?>/assets/img/sunday/img-6370-min-1.webp" loading="lazy" alt="Воскресная школа в Храме Покрова Пресвятой Богородицы">
                            </div>
                            <div class="church__sunday-right" data-aos="fade-up">
                                <h3 class="church__right-subtitle">Воскресная школа.</h3>
                                <p class="church__right-text">
                                    При приходе храма Покрова Пресвятой Богородицы аг. Слобода Озерицко-Слободского с/с проходят занятия в воскресной школе.
                                </p>
                                <p class="church__right-text">
                                    Занятия проходят каждое воскресенье с 14:00 до 15:00 в нижнем Филарето-Милостивом храме.
                                </p>
                                <p class="church__right-text">
                                    Занятия проводит педагог Татьяна Анатольевна Илимович.
                                </p>
                                <a class="church__right-link" href="https://pokrov.by/voskresnaya-shkola/">Читать далее</a>
                            </div>
                        </div>
                    </div>
                    <div class="church__box">
                        <div class="church__wrapper church__wrapper-calendar">
                            <div class="church__right-calendar" data-aos="fade-up">
                                <h3 class="church__right-subtitle">Православный календарь.</h3>
                                <div class="church__calendar-description">
                                    <script src="https://script.pravoslavie.ru/calendar.php"></script>
                                </div>
                            </div>
                            <div class="church__left-calendar" data-aos="fade-up">
                                <div class="church__day-icon">
                                    <script src="https://script.pravoslavie.ru/icon.php"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="charity section" id="charity">
            <div class="container">
                <div class="charity__inner">
                    <h2 class="charity__title title" data-aos="fade-up">Пожертвования</h2>
                    <p class="charity__subtitle" data-aos="fade-up">Дорогие братья и сестры!</p>
                    <p class="charity__text" data-aos="fade-up">Каждый уделяй по расположению сердца, не с огорчением и не с принуждением, 
                        ибо доброхотно дающего любит Бог.</p>
                    <a class="charity__link" href="https://pokrov.by/pozhertvovaniya/" data-aos="fade-up">Сделать пожертвование</a>
                </div>
            </div>
        </section>

        <section class="news section" id="news">
            <div class="container">
                <div class="news__inner">
                    <h2 class="news__title title" data-aos="fade-up">Новости храма</h2>
                    <div class="news__box">

                    <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => 3
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                <article class="news__article" data-aos="fade-up">
                            <div class="news__thumb">
                                <?php the_post_thumbnail(
                                    array(340, 300),
                                    array(
                                        'class' => 'news__image'
                                    )
                                ); ?>
                                <!-- <img class="news__image" src="<?php bloginfo('template_url'); ?>/assets/img/NEWS4.WEBP" loading="lazy" alt="Новости"> -->
                            </div>
                            <h3 class="news__article-title"><?php the_title(); ?></h3>
                            <div class="news__article-iconbox">
                                <div class="news__article-viewsbox">
                                    <svg class="news__article-svg-calendar" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M14.25 2.5h-.75v-1h-1.25v1h-8.5v-1H2.5v1h-.75A1.25 1.25 0 0 0 .5 3.75v9.5a1.25 1.25 0 0 0 1.25 1.25h12.5a1.25 1.25 0 0 0 1.25-1.25v-9.5a1.25 1.25 0 0 0-1.25-1.25zM1.75 3.75h12.5V5H1.75V3.75zm0 9.5v-7h12.5v7z"/><path d="M3 8h1.1v1.2H3zm0 2.4h1.1v1.2H3zM11.8 8h1.1v1.2h-1.1zm0 2.4h1.1v1.2h-1.1zM9.6 8h1.1v1.2H9.6zm0 2.4h1.1v1.2H9.6zM7.4 8h1.1v1.2H7.4zm0 2.4h1.1v1.2H7.4zM5.2 8h1.1v1.2H5.2zm0 2.4h1.1v1.2H5.2z"/></svg>
                                    <span class="news__article-date"><?php the_date(); ?></span>
                                </div>
                                
                            </div>
                            <a href="<?php the_permalink(); ?>" class="news__article-link">Читать далее</a>
                        </article>

                                <?php } }

                        wp_reset_postdata();
                    ?>
 
                    </div>
                    <a href="https://pokrov.by/novosti-hrama/" class="news__link" data-aos="fade-up">Все новости</a>
                </div>
            </div>
        </section>

        <section class="gallery section" id="gallery">
            <div class="container">
                <div class="gallery__inner">
                    <h2 class="gallery__title title" data-aos="fade-up">Галерея</h2>
                    <div class="gallery__box" data-aos="fade-up">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/DSCF2777-768X1024.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/0P1A7714_O-1024X683.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/0P1A7783_MIN.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/DSCF4991-1024X768.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/IMG_6784_O-683X1024.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/DSCF4876-1024X767.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/DSCF2811-1024X768.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/IMG_6907_O.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/DSCF4897-1024X768.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/DSCF4687-1024X768.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/IMG_6022-1024X803.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/IMG_7049_O.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/IMG_6664_O.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/MU7A9029_MIN.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                        <img class="gallery__image" loading="lazy" data-fancybox="gallery" src="<?php bloginfo('template_url'); ?>/assets/img/gallary/IMG_7128_MIN.WEBP" alt="Храм Покрова Пресвятой Богородицы">
                    </div>
                </div>
            </div>
        </section>

        <section class="map section" id="map">
            <div class="map__inner">
                <div class="container">
                    <h2 class="map__title title" data-aos="fade-up">Как добраться</h2>
                    <div class="map__wrapper">
                        <p class="map__text text" data-aos="fade-up">От станции метро «Восток» (выход из метро возле торгового центра Dana Mall) маршрутным такси «Минск – Смолевичи» до остановки «Слобода Озерицкая»;</p>
                        <p class="map__text text" data-aos="fade-up">От станции метро «Уручье» (выход из метро к автобусной остановке в направлении выезда из Минска) маршрутным такси №318 «Минск – Слобода».</p>
                    </div>
                </div>
                <iframe class="map__iframe" data-aos="fade-up" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3942.9949034718998!2d27.88196806673797!3d54.01131642916007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbb59efdc9451b%3A0xaf46c80cad4479aa!2z0KXRgNCw0Lwg0J_QvtC60YDQvtCy0LAg0J_RgNC10YHQstGP0YLQvtC5INCR0L7Qs9C-0YDQvtC00LjRhtGL!5e0!3m2!1sru!2sby!4v1674220715675!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

<?php get_footer(); ?>
        