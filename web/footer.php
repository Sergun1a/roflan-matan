<div id="footer">
    <footer>
        <div class="container">
            <a id="topButton" href="#" style="display: inline;"></a>
            <script src="footer.min.js" type="text/javascript"></script>
            <script>
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

                function screenHeight() {
                    return $.browser.opera ? window.innerHeight : $(window).height();
                }

                function screenWidth() {
                    return $.browser.opera ? window.innerWidth : $(window).width();
                }

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
            </script>


            <div class="left">
                <div class="logo_bottom"><a href="https://mvariant.ru/"><img alt="logo" src="logo_bottom.png"></a>
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
                    <a href="https://mvariant.ru/help/">Помощь (FAQ)</a>
                    <a href="https://mvariant.ru/agreement/">Пользовательское соглашение</a>
                    <a href="https://mvariant.ru/oferta/">Договор оферты</a>
                    <a href="https://mvariant.ru/help/support-form/">Форма обратной связи</a>
                </div>
            </div>
            <div class="right">
                Мы в соцсетях:
                <noindex>
                    <a href="https://vk.com/mvariant_ru" target="_blank" rel="nofollow"><img src="vk.png"
                                                                                             alt="Вконтакте"></a>
                    <!--a href="//www.facebook.com/Сервис-подбора-недвижимости-Мой-вариант-163432920986117/" target="_blank" rel="nofollow"><img src="/images/fb.png" alt="Facebook"></a-->
                </noindex>

                <div class="privacy" style="font-size:12px; color:#717171;">Используя интернет ресурс Mvariant.ru,
                    Вы
                    соглашаетесь на обработку Ваших персональных данных (см. <a href="https://mvariant.ru/privacy/"
                                                                                target="_blank">Политика
                        Конфиденциальности</a>), в противном случае Вы должны прекратить использование ресурса.
                </div>

            </div>


            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function () {
                    'use strict';

                    // Флаг, что Метрика уже загрузилась.
                    var loadedMetrica = false,
                        // Ваш идентификатор сайта в Яндекс.Метрика.
                        metricaId = 47248734,
                        // Переменная для хранения таймера.
                        timerId;

                    // Для бота Яндекса грузим Метрику сразу без "отложки",
                    // чтобы в панели Метрики были зелёные кружочки
                    // при проверке корректности установки счётчика.
                    if (navigator.userAgent.indexOf('YandexMetrika') > -1) {
                        loadMetrica();
                    } else {
                        // Подключаем Метрику, если юзер начал скроллить.
                        window.addEventListener('scroll', loadMetrica, {passive: true});

                        // Подключаем Метрику, если юзер коснулся экрана.
                        window.addEventListener('touchstart', loadMetrica);

                        // Подключаем Метрику, если юзер дернул мышкой.
                        document.addEventListener('mouseenter', loadMetrica);

                        // Подключаем Метрику, если юзер кликнул мышкой.
                        document.addEventListener('click', loadMetrica);

                        // Подключаем Метрику при полной загрузке DOM дерева,
                        // с "отложкой" в 1 секунду через setTimeout,
                        // если пользователь ничего вообще не делал (фоллбэк).
                        document.addEventListener('DOMContentLoaded', loadFallback);
                    }

                    function loadFallback() {
                        timerId = setTimeout(loadMetrica, 1000);
                    }

                    function loadMetrica(e) {

                        // Пишем отладку в консоль браузера.
                        if (e && e.type) {
                            console.log(e.type);
                        } else {
                            console.log('DOMContentLoaded');
                        }

                        // Если флаг загрузки Метрики отмечен,
                        // то ничего более не делаем.
                        if (loadedMetrica) {
                            return;
                        }

                        (function (m, e, t, r, i, k, a) {
                            m[i] = m[i] || function () {
                                (m[i].a = m[i].a || []).push(arguments)
                            };
                            m[i].l = 1 * new Date();
                            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                        })(window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");
                        ym(metricaId, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true});

                        // Отмечаем флаг, что Метрика загрузилась,
                        // чтобы не загружать её повторно при других
                        // событиях пользователя и старте фоллбэка.
                        loadedMetrica = true;

                        // Очищаем таймер, чтобы избежать лишних утечек памяти.
                        clearTimeout(timerId);

                        // Отключаем всех наших слушателей от всех событий,
                        // чтобы избежать утечек памяти.
                        window.removeEventListener('scroll', loadMetrica);
                        window.removeEventListener('touchstart', loadMetrica);
                        document.removeEventListener('mouseenter', loadMetrica);
                        document.removeEventListener('click', loadMetrica);
                        document.removeEventListener('DOMContentLoaded', loadFallback);
                    }
                })()
            </script>
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
            <noscript>
                <div><img src="https://mc.yandex.ru/watch/47248734" style="position:absolute; left:-9999px;" alt=""/>
                </div>
            </noscript>
        </div>
        <div class="copyright">
            © 2022 Mvariant.ru<br></div>
    </footer>
    <div id="preloader">
        <div class="close"><span class="glyphicon glyphicon-remove"></span></div>
        <div class="icon"></div>
    </div>
    <script src="main.min.js"
            type="text/javascript"></script>
    <script>
        $("#preloader .close").click(function () {
            $("#preloader").hide();
        });
    </script>
    <!-- Конец шаблона футера -->
</div>
</body>
</html>