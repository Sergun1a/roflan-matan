<?php
header("Cache-control: public");
header("Cache-control: max-age=3600");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">

    <!-- Начало шаблона метаданных -->
    <title>Полезные статьи о недвижимости - Мой вариант</title>
    <meta name="KeyWords" content="Полезные статьи о недвижимости - Мой вариант">
    <meta name="Description" content="Полезные статьи о недвижимости - Мой вариант">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script type="text/javascript" src="/web/p2/jquery_1.11.3_jquery.min.js"></script>
    <script>
        if (screen.width > 800)
            $("head").append('<meta name="viewport" content="width=1024">');
        if (screen.width > 620 && screen.width <= 800)
            $("head").append('<meta name="viewport" content="width=800">');
        if ($(window).width() > 480 && $(window).width() <= 620)
            $("head").append('<meta name="viewport" content="width=620">');

        if ($(window).width() <= 480)
            $("head").append('<meta name="viewport" content="width=390">');

    </script>
    <meta name="viewport" content="width=1024">
    <link href="https://mvariant.ru/css/common.css?v=69" rel="stylesheet" type="text/css">
    <link href="https://mvariant.ru/css/inner.css?v=66" rel="stylesheet" type="text/css">
    <link href="https://mvariant.ru/css/catalog.css?v=69" rel="stylesheet" type="text/css">
    <link href="https://mvariant.ru/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://mvariant.ru/js/bootstrap-select/bootstrap1.css">
    <link rel="stylesheet" href="https://mvariant.ru/js/bootstrap-select/css/bootstrap-select.css">
    <script src="Полезные статьи о недвижимости - Мой вариант_filesson.txt" type="text/javascript"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker({});
    });
</script>
<link href="yandex-map.css" rel="stylesheet" type="text/css">
<div id="header">
    <!--<script>
        $("#header").load("../views/site/static/header.html");
    </script>-->
    <section class="header">
        <div class="container">

            <div class="logo">
                <a class="desctop" href="https://mvariant.ru/"><img src="https://mvariant.ru/images/logo.png"></a>
                <a class="mobile" href="https://mvariant.ru/"><img src="https://mvariant.ru/images/logo_crm_1.png"></a>
            </div>

            <div id="mobileMenu">

                <div class="menu_line">
                    <div class="left">
                        <a href="https://mvariant.ru/agentstvam/">Агентствам</a>
                        <a href="https://mvariant.ru/obmen-kvartir-bez-posrednikov/">Частным лицам</a>
                        <a href="https://mvariant.ru/tarifs/">Тарифы</a>
                        <a href="https://mvariant.ru/info/">Статьи</a>
                    </div>
                    <div class="right">
                        <div class="region">
                            <div id="region_setted" class="setted"><span id="header_region_name">Выбрать регион</span>
                            </div>
                        </div>

                        <div id="logon">
                            <span class="reg_btn" onclick="register_form();">Регистрация</span>
                            <span class="log_btn" onclick="login_form();">Вход</span>
                        </div>


                        <script>
                            $("#exitButton").click(function () {
                                //alert("click");
                                $.ajax({
                                    url: "/index.php?exit_=1",
                                    beforeSend: function (xhr) {
                                        $("#preloader").show();
                                    },
                                    success: function (data) {
                                        //alert(data);
                                        window.location = "/";
                                    },
                                    complete: function () {
                                    }
                                });
                            });
                        </script>


                    </div>
                </div>

                <!-- Начало шаблона верхнего меню -->
                <div class="menu">
                    <ul>
                        <li class="sub" id="catalogMenu">
                            <a href="https://mvariant.ru/nedvigimost/">База объектов</a>
                            <div class="submenu">
                                <div><a href="https://mvariant.ru/nedvigimost/v-yaroslavle/">Ярославль</a><a
                                            href="https://mvariant.ru/nedvigimost/v-primorskom-krae/">Приморский
                                        край</a><a href="https://mvariant.ru/nedvigimost/v-yaroslavskoy-oblasti/">Ярославская
                                        область</a><a href="https://mvariant.ru/nedvigimost/vo-vladivostoke/">Владивосток</a><a
                                            href="https://mvariant.ru/nedvigimost/v-tutaeve/">Тутаев</a><a
                                            href="https://mvariant.ru/nedvigimost/v-ryibinske/">Рыбинск</a><a
                                            href="https://mvariant.ru/nedvigimost/v-rostove-velikom/">Ростов</a><a
                                            href="https://mvariant.ru/nedvigimost/v-gorode-buy/">Буй</a><a
                                            href="https://mvariant.ru/nedvigimost/v-galiche/">Галич</a><a
                                            href="https://mvariant.ru/nedvigimost/v-volgorechenske/">Волгореченск</a>
                                </div>
                            </div>

                        </li>
                        <li><a href="https://mvariant.ru/nedvigimost/obmen/">Обмен</a></li>
                        <li><a href="https://mvariant.ru/nedvigimost/arenda/">Аренда</a></li>
                        <li><a href="https://mvariant.ru/nedvigimost/commerce/">Коммерческая</a></li>
                    </ul>
                </div>
                <!-- Конец шаблона верхнего меню -->
                <div class="nav_close"><span></span><span></span></div>
            </div>

            <div class="mob_open">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="auth_info">
                <div class="alerts">
                    <!--a href="/nedvigimost/?filter=1&star_objects=1" class="stars">0</a-->
                </div>
                <a href="https://mvariant.ru/registration/?type=new" class="button reg red"><span></span>Подать
                    объявление</a>
            </div>

            <script>
                $(document).ready(function () {
                    // другой регион
                    $("#region_setted").click(function () {
                        // вывести форму выбора региона
                        $.ajax({
                            type: "POST",
                            url: "/index.php?mod=regions&act=set_region_form&set=1",
                            beforeSend: function (xhr) {
                                $("#preloader").show();
                            },
                            success: function (data) {
                                $("body").append(data);
                                $("#preloader").hide();
                            },
                            error: function (jqXHR, textStatus) {

                            }
                        });

                    });
                });
            </script>
        </div>
    </section>
</div>
<div class="nav_chain">
    <div class="container"><a href="https://mvariant.ru/">Главная</a><span>Блог</span>
    </div>
</div>
<div class="module_mobile">
    <div class="page_info close_menu">
        <h1>Полезная информация</h1>
        <div class="info">
            <div class="content">

                <noindex>
                    <div class="info_keys">
                        <span class="tag" data="обмен" rel="nofollow">обмен</span>

                        <span class="tag" data="без посредников" rel="nofollow">без посредников</span>

                        <span class="tag" data="оформление сделки" rel="nofollow">оформление сделки</span>

                        <span class="tag" data="договор мены" rel="nofollow">договор мены</span>

                        <span class="tag" data="договор купли-продажи" rel="nofollow">договор купли-продажи</span>

                        <span class="tag" data="обмен квартиры" rel="nofollow">обмен квартиры</span>

                        <span class="tag" data="размен" rel="nofollow">размен</span>

                        <span class="tag" data="доплата" rel="nofollow">доплата</span>

                        <span class="tag" data="комната" rel="nofollow">комната</span>

                        <span class="tag" data="материнский капитал" rel="nofollow">материнский капитал</span>

                        <span class="tag" data="ипотека" rel="nofollow">ипотека</span>

                        <span class="tag" data="долевая собственность" rel="nofollow">долевая собственность</span>

                        <span class="tag" data="осмотр квартиры" rel="nofollow">осмотр квартиры</span>

                        <span class="tag" data="юридическая чистота" rel="nofollow">юридическая чистота</span>

                        <span class="tag" data=" предварительный договор купли-продажи" rel="nofollow"> предварительный договор купли-продажи</span>

                        <span class="tag" data="запрос на обмен" rel="nofollow">запрос на обмен</span>

                        <span class="tag" data="покупка квартиры" rel="nofollow">покупка квартиры</span>

                        <span class="tag" data="продажа квартиры" rel="nofollow">продажа квартиры</span>

                        <span class="tag" data="новостройка" rel="nofollow">новостройка</span>

                        <span class="tag" data="вторичка" rel="nofollow">вторичка</span>

                        <span class="tag" data="сталинка" rel="nofollow">сталинка</span>

                        <span class="tag" data="брежневки" rel="nofollow">брежневки</span>

                        <span class="tag" data="хрущевки" rel="nofollow">хрущевки</span>

                        <span class="tag" data="аккредитив" rel="nofollow">аккредитив</span>

                        <span class="tag" data="налоги" rel="nofollow">налоги</span>

                        <span class="tag" data="предварительный договор купли-продажи" rel="nofollow">предварительный договор купли-продажи</span>

                        <span class="tag" data="кадастровая стоимость" rel="nofollow">кадастровая стоимость</span>

                        <span class="tag" data="льготная ипотека" rel="nofollow">льготная ипотека</span>

                        <span class="tag" data="военная ипотека" rel="nofollow">военная ипотека</span>

                        <span class="tag" data="налоговый вычет" rel="nofollow">налоговый вычет</span>

                        <span class="tag" data=" без посредников" rel="nofollow"> без посредников</span>

                        <span class="tag" data="оценка квартиры" rel="nofollow">оценка квартиры</span>

                        <span class="tag" data="перепланировка квартиры"
                              rel="nofollow">перепланировка квартиры</span>

                        <span class="tag" data="ремонт" rel="nofollow">ремонт</span>

                        <span class="tag" data="" rel="nofollow"></span>

                        <span class="tag" data="рефинансирование ипотеки"
                              rel="nofollow">рефинансирование ипотеки</span>

                        <span class="tag" data="страхование" rel="nofollow">страхование</span>

                        <span class="tag" data="эскроу" rel="nofollow">эскроу</span>

                        <span class="tag" data="рента" rel="nofollow">рента</span>

                        <span class="tag" data="без посредника" rel="nofollow">без посредника</span>

                        <span class="tag" data="кадастровая стоимость жилья"
                              rel="nofollow">кадастровая стоимость жилья</span>

                        <span class="tag" data="ипотечные каникулы" rel="nofollow">ипотечные каникулы</span>

                        <span class="tag" data="реновация" rel="nofollow">реновация</span>

                    </div>

                    <div class="info_choice">
                    </div>
                </noindex>

                <div class="info_blocks">

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/5596.jpg"
                                              alt="Что делать заемщику, если нет возможности платить ипотеку"></div>
                        <div class="article_panel">
                            <div class="title">Что делать заемщику, если нет возможности платить ипотеку</div>
                            <div class="text">Что делать клиенту банка, которому нечем платить ипотеку? Разбираем
                                варианты выхода из ситуации.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/chto-delat-zaemschiku-esli-net-vozmojnosti-platit-ipoteku/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/vznos%20karta.jpg"
                                              alt="Каким должен быть первый взнос по ипотеке"></div>
                        <div class="article_panel">
                            <div class="title">Каким должен быть первый взнос по ипотеке</div>
                            <div class="text">Первый взнос по ипотеке: размер, преимущества для кредитора и
                                заемщика, особые возможности.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/kakim-doljen-byit-pervyiy-vznos-po-ipoteke/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/nextcity1.jpg"
                                              alt="Как оформить ипотеку на квартиру в другом городе"></div>
                        <div class="article_panel">
                            <div class="title">Как оформить ипотеку на квартиру в другом городе</div>
                            <div class="text">Статья о требованиях, особенностях, этапах получения ипотеки на
                                квартиру в другом городе.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/kak-oformit-ipoteku-na-kvartiru-v-drugom-gorode/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/calc456.jpg"
                                              alt="Способы уменьшения ставки и платежа по ипотеке"></div>
                        <div class="article_panel">
                            <div class="title">Способы уменьшения ставки и платежа по ипотеке</div>
                            <div class="text">Как платить по ипотеке меньше? Статья о способах уменьшения
                                ежемесячной выплаты и процентной ставки.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/sposobyi-umensheniya-stavki-i-plateja-po-ipoteke/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img
                                    src="https://mvariant.ru/UserFiles/Image/articles/city-4302116_640.jpg"
                                    alt="Что делать, если банки отказывают в ипотеке"></div>
                        <div class="article_panel">
                            <div class="title">Что делать, если банки отказывают в ипотеке</div>
                            <div class="text">Почему банки отказывают в выдаче ипотеки и что с этим делать?</div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/chto-delat-esli-banki-otkazyivayut-v-ipoteke/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img
                                    src="https://mvariant.ru/UserFiles/Image/articles/move-2481718_640.jpg"
                                    alt="Особенности покупки квартиры в доме под реновацию"></div>
                        <div class="article_panel">
                            <div class="title">Особенности покупки квартиры в доме под реновацию</div>
                            <div class="text">Особенности, нюансы, плюсы и минусы покупки квартиры в доме под
                                реновацию.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/osobennosti-pokupki-kvartiryi-v-dome-pod-renovatsiyu/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img
                                    src="https://mvariant.ru/UserFiles/Image/articles/architect-1080589_640%20(1).jpg"
                                    alt="Как взять ипотеку на строительство частного дома"></div>
                        <div class="article_panel">
                            <div class="title">Как взять ипотеку на строительство частного дома</div>
                            <div class="text">Ипотечное кредитование на строительство дома: условия, требования,
                                необходимые документы.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/kak-vzyat-ipoteku-na-stroitelstvo-chastnogo-doma/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/2%20documents.jpg"
                                              alt="Условия и особенности получения ипотеки по двум документам">
                        </div>
                        <div class="article_panel">
                            <div class="title">Условия и особенности получения ипотеки по двум документам</div>
                            <div class="text">Как получить ипотеку по 2 документам? Подробно рассказываем в
                                статье.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/usloviya-i-osobennosti-polucheniya-ipoteki-po-dvum-dokumentam/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img
                                    src="https://mvariant.ru/UserFiles/Image/articles/building-4789755_640.jpg"
                                    alt="Выгодная ипотека от застройщика: плюсы и минусы предложения"></div>
                        <div class="article_panel">
                            <div class="title">Выгодная ипотека от застройщика: плюсы и минусы предложения</div>
                            <div class="text">Почему покупка квартиры в ипотеку от застройщика — выгодное решение?
                                Читайте об этом в статье.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/vyigodnaya-ipoteka-ot-zastroyschika-plyusyi-i-minusyi-predlojeniya/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img
                                    src="https://mvariant.ru/UserFiles/Image/articles/house-167734_640.jpg"
                                    alt="Что такое ипотечные каникулы и как их получить"></div>
                        <div class="article_panel">
                            <div class="title">Что такое ипотечные каникулы и как их получить</div>
                            <div class="text">Каковы условия ипотечных каникул и какие документы нужны для их
                                получения? Читайте в статье.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/chto-takoe-ipotechnyie-kanikulyi-i-kak-ih-poluchit/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/022aaa.jpg"
                                              alt="Как купить квартиру с обременением"></div>
                        <div class="article_panel">
                            <div class="title">Как купить квартиру с обременением</div>
                            <div class="text">Что такое обременение квартиры, как купить такую квартиру и стоит ли
                                это делать.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/stoit-li-riskovat-pokupaya-kvartiru-s-obremeneniem/">Подробнее</a>
                        </div>
                    </div>

                    <div class="block">
                        <div class="img"><img src="https://mvariant.ru/UserFiles/Image/articles/ggde.jpg"
                                              alt="Зачем нужна кадастровая стоимость недвижимости"></div>
                        <div class="article_panel">
                            <div class="title">Зачем нужна кадастровая стоимость недвижимости</div>
                            <div class="text">Для чего нужна кадастровая стоимость недвижимости? Читайте в этой
                                статье.
                            </div>
                        </div>
                        <div class="article_bottom">

                            <a class="button contur"
                               href="https://mvariant.ru/info/zachem-nujna-kadastrovaya-stoimost-nedvijimosti/">Подробнее</a>
                        </div>
                    </div>


                    <!--div class="more"><span>показать больше статей</span></div-->
                </div>
                <div class="button contur more" id="moreArticles" rel="" onclick="show_more(this);">Еще статьи</div>

                <div class="tasks_nav">
                    <div class="navigation_cont">
                        <div class="navigation">
                            <a href="https://mvariant.ru/info/" class="link_page_left hide" rel="prev"
                               title="Перейти на предыдущую страницу">&lt;</a><span>1</span>
                            <a href="https://mvariant.ru/info/page_2/" title="Џерейти на 2 страницу">2</a>
                            <a href="https://mvariant.ru/info/page_3/" title="Џерейти на 3 страницу">3</a>
                            <a href="https://mvariant.ru/info/page_4/" title="Џерейти на 4 страницу">4</a>


                            <a href="https://mvariant.ru/info/page_2/" class="link_page_right " rel="next"
                               title="Џерейти на следующую страницу">&gt;</a>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function items_list() {
            var tags = $(".info_choice .close_tag");
            var url = [];
            for (var i = 0; i < tags.length; i++) {
                url.push("tag[]=" + tags.eq(i).attr("data"));
            }
            str = "?" + url.join("&");
            return str;
        }

        function show_more(el) {
            //alert("show_more");
            //var count = $(el).attr("rel");
            var begin = $(".info_blocks .block").length;

            $.ajax({
                type: "POST",
                url: "/index.php?mod=articles&act=show_more&begin=" + begin,
                beforeSend: function (xhr) {
                    $("#preloader").show();
                },
                success: function (data) {
                    $("#preloader").hide();
                    //$("body").append(data);

                    if (data.indexOf('!--Error--') != -1) {
                        //alert(data);
                        $("body").append(data);
                    } else {
                        $(".info_blocks").append(data);
                        //$(el).attr("rel", count + );
                    }
                },
                error: function (jqXHR, textStatus) {
                }
            });

        }

        $(document).ready(function () {
            $(".info_keys .tag").click(function () {
                if ($(this).hasClass('active')) {
                    $(this).addClass("active");
                } else {
                    //добавить в активные
                    var tag = $(this).attr("data");
                    $(".info_choice").append("<div class='close_tag' data='" + tag + "'>" + tag + "<span><img loading='lazy' src='/images/picts/close_v_pict.png'></span></div>");
                }
                console.log(items_list());
                var url = items_list();
                window.location = "/info/" + url;
            });

            $(".info_choice .close_tag").click(function () {
                $(this).remove();
                var url = items_list();
                window.location = "/info/" + url;
            });
        });

    </script>
</div>

<div id="footer">
    <!--<script>
        $("#footer").load("../views/site/static/footer.html");
    </script>-->
    <footer>
        <div class="container">
            <a id="topButton" href="#" style="display: inline;"></a>
            <!--Подключение плагина inputmask -->
            <script src="/web/p2/inputmask.js"
                    type="text/javascript"></script>
            <script src="/web/p2/jquery.inputmask.js"
                    type="text/javascript"></script>

            <script type="text/javascript"
                    src="/web/p2/jquery.fancybox.js"></script>
            <link rel="stylesheet" type="text/css"
                  href="/web/p2/jquery.fancybox.css"
                  media="screen">

            <script type="text/javascript"
                    src="/web/p2/main.js"></script>
            <script type="text/javascript"
                    src="/web/p2/jquery.form.js"></script>
            <script type="text/javascript"
                    src="/web/p2/common_func.js"></script>
            <script type="text/javascript"
                    src="/web/p2/validation.js"></script>

            <!--Подключение плагина для селектов -->
            <script src="/web/p2/bootstrap.js"></script>
            <script src="/web/p2/bootstrap-select.js"></script>
            <script src="/web/p2/defaults-ru_RU.js"></script>

            <script>
                function screenHeight() {
                    return $.browser.opera ? window.innerHeight : $(window).height();
                }

                function screenWidth() {
                    return $.browser.opera ? window.innerWidth : $(window).width();
                }

                $(document).ready(function () {
                    $("a.modal_img").fancybox({
                        'padding': 0,
                        'autoScale': false,
                        'transitionIn': 'none',
                        'transitionOut': 'none',
                        'title': this.title,
                        'href': this.href
                    });

                    $('[data-fancybox=videos]').fancybox({
                        youtube: {
                            controls: 1,
                            showinfo: 0
                        },
                        vimeo: {
                            color: 'f00'
                        }
                    });

                    $("#topButton").hide();
                    $(window).scroll(function () {
                        if ($(window).scrollTop() > 300) {
                            $("#topButton").show();
                            $(".nav_mobile").show();


                        } else {
                            $("#topButton").hide();
                            $(".nav_mobile").hide();

                        }
                        if ($(window).scrollTop() > 100 && $(window).width() >= 1000) {
                            $("section.header").addClass("scroll");
                        } else {
                            $("section.header").removeClass("scroll");
                        }

                    });
                    $("#topButton").click(function () {
                        //alert("top");
                        $("body").animate({scrollTop: 0}, '1000');
                        $("html").animate({scrollTop: 0}, '1000');
                        return false;
                    });

                    $(".nav_mobile").click(function () {
                        if ($(".top_mobile").hasClass("show")) {
                            $(".top_mobile").removeClass("show");
                            $(".module_mobile").css("padding-top", "0px");
                        } else {
                            $(".top_mobile").addClass("show");
                            $(".module_mobile").css("padding-top", $(".top_mobile").height() + "px");
                        }
                    });
                });
            </script>


            <div class="left">
                <div class="logo_bottom"><a href="https://mvariant.ru/"><img
                                src="/web/p2/logo_bottom.png"></a>
                </div>
                <div class="bottom_contacts">
                    <noindex>
                        <div class="phone">+7 (4852) 58-17-58</div>
                        <br>
                        <div class="adress">г. Ярославль, ул. Республиканская, д. 3</div>
                    </noindex>
                    <div class="mail"><a href="mailto:info@mvariant.ru">info@mvariant.ru</a></div>
                </div>
            </div>
            <div class="center">
                <div class="block b1">
                    <a href="https://mvariant.ru/fizlicam/">Частным лицам</a>
                    <a href="https://mvariant.ru/agentstvam/">Агентствам</a>
                    <a href="https://mvariant.ru/tarifs/">Тарифы</a>
                    <a href="https://mvariant.ru/info/">Статьи</a>

                </div>
                <div class="block b2">
                    <a href="">База объектов</a>
                </div>
                <div class="block b3">
                    <!--a href="#">Как стать партнёром?</a>
				<a href="#">Реклама</a-->
                    <a href="https://mvariant.ru/help/">Помощь (FAQ)</a>
                    <a href="https://mvariant.ru/agreement/">Пользовательское соглашение</a>
                    <a href="https://mvariant.ru/oferta/">Договор оферты</a>
                    <a href="https://mvariant.ru/help/support-form/">Форма обратной связи</a>
                </div>
            </div>
            <div class="right">
                Мы в соцсетях:
                <noindex>
                    <a href="https://vk.com/mvariant_ru" target="_blank" rel="nofollow"><img
                                src="/web/p2/vk.png"
                                alt="Вконтакте"></a>
                    <!--a href="//www.facebook.com/Сервис-подбора-недвижимости-Мой-вариант-163432920986117/" target="_blank" rel="nofollow"><img src="/images/fb.png" alt="Facebook"></a-->
                </noindex>

                <div class="privacy" style="font-size:12px; color:#717171;">Используя интернет ресурс Mvariant.ru, Вы
                    соглашаетесь на обработку Ваших персональных данных (см. <a href="https://mvariant.ru/privacy/"
                                                                                target="_blank">Политика
                        Конфиденциальности</a>), в противном случае Вы должны прекратить использование ресурса.
                </div>

            </div>


            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (m, e, t, r, i, k, a) {
                    m[i] = m[i] || function () {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
                    m[i].l = 1 * new Date();
                    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                })
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(47248734, "init", {
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            </script>
            <noscript>
                <div><img src="https://mc.yandex.ru/watch/47248734" style="position:absolute; left:-9999px;" alt=""/>
                </div>
            </noscript>
            <!-- /Yandex.Metrika counter -->


        </div>
        <div class="copyright">
            © 2022 Mvariant.ru<br></div>
    </footer>
    <div id="preloader">
        <div class="close"><span class="glyphicon glyphicon-remove"></span></div>
        <div class="icon"></div>
    </div>

    <script>
        $("#preloader .close").click(function () {
            $("#preloader").hide();
        });

    </script>
    <!-- Конец шаблона футера -->
</div>


</body>
</html>