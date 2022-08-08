<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <!-- Начало шаблона метаданных -->
    <title>Полезные статьи о недвижимости - Мой вариант</title>
    <meta name="KeyWords" content="Полезные статьи о недвижимости - Мой вариант">
    <meta name="Description" content="Полезные статьи о недвижимости - Мой вариант">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script type="text/javascript" src="jquery_1.11.3_jquery.min.js"></script>
    <meta name="viewport" content="width=1024">
    <!--<link href="important.min.css" rel="stylesheet" type="text/css">-->
</head>
<body>
<style>
    <?php include "important.min.css";?>
</style>
<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker({});
    });
</script>
<style>
    <?php include "main.min.css";?>
</style>
<!--<link href="main.min.css" rel="stylesheet" type="text/css" media="all">-->
<div class="header">
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
                                        область</a><a
                                            href="https://mvariant.ru/nedvigimost/vo-vladivostoke/">Владивосток</a><a
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
<!--<script>
    <?php /*include "json.txt";*/?>
</script>-->
<!--<script src="json.txt"
        type="text/javascript"></script>-->