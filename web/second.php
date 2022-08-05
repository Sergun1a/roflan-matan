<!-- ����� ����� ���������� ��������: 0,004295825958252 -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <!-- ������ ������� ���������� -->
    <title>�������������� ����� ��� �������: ������ � �����������</title>
    <meta name="KeyWords" content="">
    <meta name="Description" content="������������ � ����������� � �������������� ������ �� ���������� ������������.">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script async=""
            src="tag.js"></script>
    <script type="text/javascript"
            src="jquery_1.11.3_jquery.min.js"></script>

    <script>
        //alert(screen.width);

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

    <link href="common.css"
          rel="stylesheet" type="text/css">
    <link href="inner.css"
          rel="stylesheet" type="text/css">
    <link href="catalog.css"
          rel="stylesheet" type="text/css">

    <link href="css.css"
          rel="stylesheet">

    <link href="https://mvariant.ru/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker({});
        });
    </script>

    <link rel="stylesheet"
          href="bootstrap1.css">
    <link rel="stylesheet"
          href="bootstrap-select.css">

    <script src="/json.txt"
            type="text/javascript"></script>
    <link href="yandex-map.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">

    <section class="header scroll">
        <div class="container">
            <div class="logo">
                <a class="desctop" href="https://mvariant.ru/"><img
                            src="/logo.png"></a>
                <a class="mobile" href="https://mvariant.ru/"><img
                            src="/logo_crm_1.png"></a>
            </div>

            <div id="mobileMenu">

                <div class="menu_line">
                    <div class="left">
                        <a href="https://mvariant.ru/agentstvam/">����������</a>
                        <a href="https://mvariant.ru/obmen-kvartir-bez-posrednikov/">������� �����</a>
                        <a href="https://mvariant.ru/tarifs/">������</a>
                        <a href="https://mvariant.ru/info/">������</a>
                    </div>
                    <div class="right">
                        <div class="region">
                            <div id="region_setted" class="setted"><span id="header_region_name">������� ������</span>
                            </div>
                        </div>

                        <div id="logon">
                            <span class="reg_btn" onclick="register_form();">�����������</span>
                            <span class="log_btn" onclick="login_form();">����</span>
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


                <!-- ������ ������� �������� ���� -->
                <div class="menu">
                    <ul>
                        <li class="sub" id="catalogMenu">
                            <a href="https://mvariant.ru/nedvigimost/">���� ��������</a>
                            <div class="submenu">
                                <div><a href="https://mvariant.ru/nedvigimost/v-yaroslavle/">���������</a><a
                                            href="https://mvariant.ru/nedvigimost/v-primorskom-krae/">����������
                                        ����</a><a href="https://mvariant.ru/nedvigimost/v-yaroslavskoy-oblasti/">�����������
                                        �������</a><a href="https://mvariant.ru/nedvigimost/vo-vladivostoke/">�����������</a><a
                                            href="https://mvariant.ru/nedvigimost/v-tutaeve/">������</a><a
                                            href="https://mvariant.ru/nedvigimost/v-ryibinske/">�������</a><a
                                            href="https://mvariant.ru/nedvigimost/v-rostove-velikom/">������</a><a
                                            href="https://mvariant.ru/nedvigimost/v-gorode-buy/">���</a><a
                                            href="https://mvariant.ru/nedvigimost/v-galiche/">�����</a><a
                                            href="https://mvariant.ru/nedvigimost/v-volgorechenske/">������������</a>
                                </div>
                            </div>

                        </li>
                        <li><a href="https://mvariant.ru/nedvigimost/obmen/">�����</a></li>
                        <li><a href="https://mvariant.ru/nedvigimost/arenda/">������</a></li>
                        <li><a href="https://mvariant.ru/nedvigimost/commerce/">������������</a></li>
                    </ul>
                </div>
                <!-- ����� ������� �������� ���� -->


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
                <a href="https://mvariant.ru/registration/?type=new" class="button reg red"><span></span>������
                    ����������</a>
            </div>

            <!--script>
		alert("header");
		//alert($.cookie('home_region'));
		if($.cookie('home_region') == undefined) alert($.cookie('home_region'));
	</script-->

            <script>
                // ������ ������
                $("#region_setted").click(function () {

                    // ������� ����� ������ �������
                    $.ajax({
                        type: "POST",
                        url: "/index.php?mod=regions&act=set_region_form&set=1",
                        beforeSend: function (xhr) {
                            $("#preloader").show();
                        },
                        success: function (data) {
                            //	alert(data);

                            $("body").append(data);
                            $("#preloader").hide();
                        },
                        error: function (jqXHR, textStatus) {

                        }
                    });

                });
            </script>
        </div>
    </section>

    <div class="nav_chain">
        <div class="container"><a href="https://mvariant.ru/">�������</a><a
                    href="https://mvariant.ru/info/">����</a><span>����� ������ ���� ������ ����� �� �������</span>
        </div>
    </div>
    <div class="module_mobile">


        <div class="page close_menu">
            <div class="article">
                <h1>����� ������ ���� ������ ����� �� �������</h1>


                <p>
                    <img alt=""
                         src="/vznos%20karta.jpg"
                         width="600" height="400"></p>
                <p>
                    ������� � ����������� ������� ����������� ������������ ��� ������
                    ���������� �����������. �������������� ����� ��� ������� � ��� �����
                    ����������� �������� ������� �������, ������������� ��������
                    ������������� �� ������������ � ������ ���������� ��������. ������ �����
                    � ��������� ����, ������� ���� ����. ������ ����� �������� ���������
                    ������������������ � ���������� ��������, �������� �����.</p>
                <h2>
                    ������ ��������������� ������ �� �������</h2>
                <p>
                    � 2022 ���� ������ ������� � �� 0 �� 50% ��������� �����. ��������
                    �������� ������� �� ����������� ������� � ��������� ����������
                    ������������ ���������� ���������� �����������.&nbsp;������ ����
                    ��������� ���� ������� � ���������� � ��������, �������������
                    ����������� ����� �� ������� � ���������� ������, ������� ������� ��
                    �������� �� ����� ������������. �������� ����� �� ������ � �������
                    ������� ����� �� ����� ����������� ����������� ����������, ��� ��������
                    ���������� ������ � ��������� ������ ������. ��������, �����������
                    �������������� ����� � ��������� ����� 10%.</p>
                <p>
                    ��� ������ �������� ������� ������� ������� ������ � ���� �������
                    �����, ��� �����. ������? ����������� ����, ��� ���� ������� ������
                    ����. ����������� ����, ��� ���������� ���������� ������ ������ ����
                    ����. ������ �� ������� ��������� ��������������� � ��������������
                    �������.</p>
                <h2>
                    ��� ����� �������� ��� ���������� ������</h2>
                <p>
                    � �������� ��������� ������� ����� ���������:</p>
                <ul>
                    <li>
                        ������ ����������;
                    </li>
                    <li>
                        ��������, ���������� � ���������� ������� �����:
                    </li>
                    <li>
                        ������, ������ � ���� � ������������� ��� ������;
                    </li>
                    <li>
                        ���������� � �. �.
                    </li>
                </ul>
                <p>
                    ���������� �� ����������� ������� ����� ���� ����������� ��� ����,
                    ����� �������� ��� � ������ ������ ������� ��������� ����� ��� �������
                    �������� � ����� ��� ������ ����� (�� ��������� ����������� ��������
                    �������). ��������� ������������ ����� ��� � 2007 ����. � 2021 ���� ��
                    ������� ������� ����������� ���� �����, ������ 483 882 ���., �� �������
                    ������� � 639 432 ���.&nbsp;</p>
                <p>
                    ����� ������ ��� �������� ������ ���������������. �������� ��������
                    ���������, ��� �� ����� ������ ����� �������� �������� �� ������� �����
                    �� ��������� ������, � �� ����� ������ ����� ���������� ����������
                    ����������� � ���������� �������������.</p>
                <p>
                    ������� ������� � ������� ������������� ���� � ��� ������ ��� ���������
                    ������� ���������� ������������ ���� �������, ��� ����� �����
                    ����������� ������ �� ������� ������� ����������� ���������.&nbsp;</p>
                <p>
                    ����� ����������� ���� �� ������ ����������� ���������� � ���������
                    ������, ����� ��������, ����� ����� ����� ��� ������� ������, ������
                    ����� ����������� ����� �� �������, ����� ������� ���������:</p>
                <ul>
                    <li>
                        ������� ������ � ������ ��� ���������;
                    </li>
                    <li>
                        ����������� ������������ ������� ��������� ��������� (����� ������� ����������), ��������
                        �������, ����������;
                    </li>
                    <li>
                        ��������������� ���������� ������-������������� � �������������� ��������� ������ ������ ��
                        �������� ���������.
                    </li>
                </ul>
                <h2>
                    ����� ����� ������ �����: ����� ��� ����� � �������</h2>
                <p>
                    ��������� ����������� �������� ��������� ������������:</p>
                <ul>
                    <li>
                        ����������� ��������� � ������������������ �������;
                    </li>
                    <li>
                        ������ ������ ������������ ��������, ����������� �� ���������� ��������� �������;
                    </li>
                    <li>
                        �������� ����� ��������� �������. �������� ������� ������ ��������
                        ����������� ������� � ��������� ��������� ������� ������� ��� ���
                        ������������� ������������ ������������� �� �������.
                    </li>
                </ul>
                <p>
                    ������ ���������� ������� ����� ������ �������� ��� ��������� �������������� �������?</p>
                <ul>
                    <li>
                        ���������� ������ �� ��������������� ��������� �������.
                    </li>
                    <li>
                        ���������� ������ ����� (��� � ���� ������� ��������� ��������� ���� � ��������� �����������
                        ������).
                    </li>
                    <li>
                        ���������� ����� ������, �������������� � �������� �������� ��������� �������.
                    </li>
                </ul>
                <h2>
                    ������� ���������� ������������ ��� ������� ������</h2>
                <p>
                    <img alt=""
                         src="/zo2.jpg"
                         width="600" height="400"></p>
                <p>
                    ����� ������ ���������� ������� ��� ��������������� ������. ������
                    ���������� ������ �� ����� �������� ������� ����, ���� ��� �����������
                    ���������� ��� ��������� ����. ������ ������� ��������� �����������
                    ����������� ����� �������� ������� ������ ������ �� ����������� �������,
                    ��������� ������ �������. ��������, ������ ������ �� ��������� ���
                    ������ ������ �� 20-30% �� ��������� �����. ���������, ����� �������� ��
                    ���� ������ ��� ��������, �������, ��� �������, ����������� �� ������� �
                    �������� ������ ������.</p>
                <p>
                    ������ ������� ���������� ����������� ���������� ����������
                    ������������ ����� � ���� ��������� � ������������� ������������:
                    ��������, ������� ���, ������� ����� ��� ������. ������������ ����������
                    ������ ����������� � ������������� ������������ �������������� ��������
                    � �����������.</p>
                <p>
                    �������������� ����� � ���� �� ������� ������� � 2022 ����, �������
                    �������� �������� ��� ���� ��������������� � ������ ������. <br>
                    &nbsp;</p>


                <div class="article_rec">
                    <div class="title">����������� ���������</div>
                    <a href="https://mvariant.ru/info/kak-obmenyat-kvartiru-bez-posrednikov/">��� �������� �������� ���
                        �����������</a><a href="https://mvariant.ru/info/pomenyat_kvartiru_s_chego_nachat/">������
                        �������� ��������? ������������, � ���� ������</a><a
                            href="https://mvariant.ru/info/razmen-kvartir-slojnosti-protsessa-i-variantyi-resheniya/">������
                        �������: ��������� � �������� �������</a>
                </div>

                <div class="article_keys"><a href="https://mvariant.ru/info/?tag[]=%E8%EF%EE%F2%E5%EA%E0">�������</a> �
                </div>

                <div class="comments">
                    <div class="button contur" onclick="add_comment(167);">�������� �����������</div>
                    <div class="title">�����������</div>
                    <div class="block">
                        <div class="title"><span class="user_name">Vitaliy Korneev</span> <span class="date">26.04.2022 14:35</span>
                        </div>
                        <p class="text">
                            ������ ������� ���� ������, ��� �� ��������� �������������� �����,
                            � ���������, � ��� ��� ������� ��� ��������� �� ���� ��� ����������
                            ���������� ��� ��������
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <noindex>
            <section id="welcome" class="owner">
                <div class="container">
                    <h2>������������� ��� �����������</h2>
                    <div class="h2_descript">��������������� � ����������� ���������� �������� ��� ������� ���������
                        ������
                    </div>
                    <br>
                    <div class="button red"
                         onclick="register_form(2); yaCounter47248734.reachGoal('REGISTRATION_ARTICLE_OPEN_2');">
                        ������������������
                    </div>
                </div>
            </section>
        </noindex>

        <script>

            function add_comment(article_id) {

                //alert(article_id);

                $.ajax({
                    type: "POST",
                    url: "/index.php?mod=articles&act=add_comment_form&article_id=" + article_id,
                    beforeSend: function (xhr) {
                        $("#preloader").show();
                    },
                    success: function (data) {
                        //alert(data);
                        $("#preloader").hide();
                        $("body").append(data);

                    },
                    error: function (jqXHR, textStatus) {

                    }
                });
            }

        </script>


    </div>


    <!-- ������ ������� ������ -->
    <footer>
        <div class="container">
            <a id="topButton" href="#" style="display: inline;"></a>

            <!--����������� ������� inputmask -->
            <script src="/inputmask.js"
                    type="text/javascript"></script>
            <script src="/jquery.inputmask.js"
                    type="text/javascript"></script>

            <!--����������� ������� ��� �������� -->
            <script src="/bootstrap.js"></script>
            <script src="/bootstrap-select.js"></script>
            <script src="/defaults-ru_RU.js"></script>

            <script type="text/javascript"
                    src="/jquery.fancybox.js"></script>
            <link rel="stylesheet" type="text/css"
                  href="/jquery.fancybox.css"
                  media="screen">

            <script type="text/javascript"
                    src="/main.js"></script>
            <script type="text/javascript"
                    src="/jquery.form.js"></script>
            <script type="text/javascript"
                    src="/common_func.js"></script>
            <script type="text/javascript"
                    src="/validation.js"></script>

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
                <div class="logo_bottom"><a href="https://mvariant.ru/"><img
                                src="/logo_bottom.png"></a>
                </div>
                <div class="bottom_contacts">
                    <noindex>
                        <div class="phone">+7 (4852) 58-17-58</div>
                        <br>
                        <div class="adress">�. ���������, ��. ���������������, �. 3</div>
                    </noindex>
                    <div class="mail"><a href="mailto:info@mvariant.ru">info@mvariant.ru</a></div>
                </div>
            </div>
            <div class="center">
                <div class="block b1">
                    <a href="https://mvariant.ru/fizlicam/">������� �����</a>
                    <a href="https://mvariant.ru/agentstvam/">����������</a>
                    <a href="https://mvariant.ru/tarifs/">������</a>
                    <a href="https://mvariant.ru/info/">������</a>

                </div>
                <div class="block b2">
                    <a href="">���� ��������</a>
                </div>
                <div class="block b3">
                    <!--a href="#">��� ����� ��������?</a>
				<a href="#">�������</a-->
                    <a href="https://mvariant.ru/help/">������ (FAQ)</a>
                    <a href="https://mvariant.ru/agreement/">���������������� ����������</a>
                    <a href="https://mvariant.ru/oferta/">������� ������</a>
                    <a href="https://mvariant.ru/help/support-form/">����� �������� �����</a>
                </div>
            </div>
            <div class="right">
                �� � ��������:
                <noindex>
                    <a href="https://vk.com/mvariant_ru" target="_blank" rel="nofollow"><img
                                src="/vk.png"
                                alt="���������"></a>
                    <!--a href="//www.facebook.com/������-�������-������������-���-�������-163432920986117/" target="_blank" rel="nofollow"><img src="/images/fb.png" alt="Facebook"></a-->
                </noindex>

                <div class="privacy" style="font-size:12px; color:#717171;">��������� �������� ������ Mvariant.ru, ��
                    ������������ �� ��������� ����� ������������ ������ (��. <a href="https://mvariant.ru/privacy/"
                                                                                target="_blank">��������
                        ������������������</a>), � ��������� ������ �� ������ ���������� ������������� �������.
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
            � 2022 Mvariant.ru<br></div>
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

    <!-- ����� ������� ������ -->
</div>


</body>
</html>