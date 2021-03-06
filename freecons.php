<!DOCTYPE html>
<html lang="en">
<head>
    <title>Career</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="author" content="gridgum.com">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/spoiler.css" rel="stylesheet">
    <link href="css/content.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/superfish.js"></script>

    <script src="js/jquery.flexslider.js"></script>

    <script src="js/jquery.appear.js"></script>

    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.ui.totop.js"></script>

    <script src="js/jquery.caroufredsel.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>

    <script src="js/jquery.parallax-1.1.3.resize.js"></script>

    <script src="js/SmoothScroll.js"></script>

    <script src="js/cform.js"></script>

    <script src="js/scripts.js"></script>
    <script src="js/spoiler.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../../../https@oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="../../../https@oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="not-front" onload="slider('slider',0)">

<div id="main">

    <div class="top1_wrapper">
        <div class="container">
            <div class="top1 clearfix">
                <div class="location1_wrapper"><div class="location1 fa1"><i class="fa fa-map-marker"></i><span>Республика Беларусь 224028 г. Брест,ул. Ленинградская, 19.</span></div></div>
                <div class="phone1_wrapper"><div class="phone1 fa1"><i class="fa fa-phone"></i><span>+375 162 57 41 33, +375 29 833 01 12</span></div></div>
                <div class="mail1_wrapper"><div class="mail1 fa1"><i class="fa fa-envelope"></i><span>tonus@brest.by  &nbsp;  tonusbrest@gmail.com</span></div></div>
            </div>
        </div>
    </div>

    <div class="top2_wrapper">
        <div class="container">
            <div class="top2 clearfix">
                <header>
                    <div class="logo_wrapper">
                        <a href="index.html" class="logo">
                            <img src="images/logo.png" alt="" class="img-responsive">
                        </a>
                    </div>
                </header>
                <div class="navbar navbar_ navbar-default">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse navbar-collapse_ collapse">
                        <ul class="nav navbar-nav sf-menu clearfix">
                            <li><a href="index.html">Главная</a></li>
                            <li class="sub-menu sub-menu-1"><a href="index.html#cb">Написать нам<em></em></a>
                                <ul>
                                    <li><a href="freecons.php">Консультация</a></li>
                                    <li><a href="feedback.html">Оставить отзыв</a></li>
                                </ul></li>
                            <li class="active sub-menu sub-menu-1"><a href="patient.html">Пациентам<em></em></a>
                                <ul>
                                    <li><a href="patient1.html">Методы реабилитации</a></li>
                                    <li><a href="patient2.html">Консультативный прием</a></li>
                                    <li><a href="patient3.html">Показания для реабилитации</a></li>
                                    <li><a href="patient4.html">Запись на реабилитацию</a></li>
                                    <li><a href="patient5.html">Расписание курсов</a></li>
                                    <li><a href="patient6.html">Здоровый образ жизни</a></li>
                                    <li><a href="patient7.html">Платные услуги</a></li>
                                    <li><a href="price_b.pdf">Платные услуги для граждан РБ</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">Фотогалерея</a></li>
                            <li><a href="forchildren.html">Игротека</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $host = "localhost"; // адрес сервера
        $database = "tonus"; // имя базы данных
        $user = "root"; // имя пользователя
        $password = ""; // пароль
        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

        // изменение набора символов на cp1251
        if (!mysqli_set_charset($link, "utf8")) {
            echo "Ошибка при загрузке набора символов UTF-8";
            mysqli_error($link);
            exit();
        }
        ?>

    <div class="header_wrapper">
        <div class="img"><img src="images/header.jpg" alt="" class="img-responsive"></div>
        <div class="header_inner">
            <div class="container">
                <h1>Пациентам</h1>
                <div class="breadcrumbs1"><a href="index.html">Главная</a><span></span>Пациентам</div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="title6 text-center">ОТВЕТЫ</div>
                    <div id="smfaq" class="questions">
                                          <?php
                                             $query ="SELECT question, answer, qname, aname, qdata, adata FROM consultation";
                                             $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                             if($result)
                                             {
                                                 $rows = mysqli_num_rows($result); // количество полученных строк
                                                 for ($i = 0 ; $i < $rows ; ++$i)
                                                 {
                                                     $row = mysqli_fetch_row($result);?>
                               <div class="mainSM">

                                  <div id="q128" class="question" >
                                       <a name="p128" class="img"></a>
                                          <?php  echo $row[0];?>
                                  </div>

                                  <div id="a128" class="answer" style="display:block;"><div id="ac128" class="answer_content" style="top: 0px;">
                                      </div>
                                      <div class="info">
                                          <div>
                                              <span class="author">Вопрос от:
                                               <?php echo $row[2];?></span>
                                              <span class="date">Дата создания:
                                                  <?php echo $row[4];?></span>
                                          </div>
                                          <div>
                                              <span class="ans-author">Ответил:<?php echo $row[3]; ?></span>
                                              <span class="ans-date">Дата ответа:<?php echo $row[5]; ?></span>
                                          </div>
                                      </div>
                                      <div class="answer-body">
                                          <?php echo $row[1]; ?>
                                      </div>
                                  </div>
                               </div>
                                          <?php }}?>
                    </div>
                </div>
                <div class="col-sm-4">


                    <div class="quote_wrapper">


                        <div class="title4">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ<span></span></div>
                        <div class="title5">Электронное обращение гражданина</div>

                        <br>

                        <div id="note"></div>
                        <div id="fields">
                            <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" id="inputName" name="name" value="Имя" onBlur="if(this.value=='') this.value='First Name'" onFocus="if(this.value =='First Name' ) this.value=''">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="inputLName">E-mail</label>
                                            <input type="text" class="form-control" id="inputLName" name="lname" value="E-mail" onBlur="if(this.value=='') this.value='Last Name'" onFocus="if(this.value =='Last Name' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="inputMessage">Your Message</label>
                                            <input type="text" style="height: 18vh"  class="form-control"  id="inputMessage" name="content" value="Вопрос" onBlur="if(this.value=='') this.value='Message'"
                                                   onFocus="if(this.value =='Message' ) this.value=''">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn-default btn-cf-submit">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="bot1_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo2_wrapper">
                        <a href="index.html" class="logo2">
                            <img src="images/logo.png" alt="" class="img-responsive">
                        </a>
                    </div>
                    <p>
                        Республика Беларусь

                        224028 г. Брест,

                        ул. Ленинградская, 19.

                    <p>Режим работы: понедельник - пятница, 8.00-18.00</p>
                    </p>
                </div>
                <div class="col-sm-3">
                    <div class="bot1_title">Телефоны</div>
                    <p>
                        приемная(факс)
                    </p>
                    <div class="phone2">+375 162 42 65 58</div>
                    <p>
                        справка, запись на прием к специалистам
                    </p>
                    <div class="phone2">+375 162 57 41 33, +375 29 833 01 12</div>
                    <p>
                        пост медсестры
                    </p>
                    <div class="phone2">+375 162 41 25 49</div>
                </div>
                <div class="col-sm-3">
                    <div class="bot1_title">Почта</div>

                    <div class="mail2_wrapper"><div class="mail2"><i class="fa fa-envelope"></i><span><a href="#">tonus@brest.by</a></span></div></div>
                    <div class="mail2_wrapper"><div class="mail2"><i class="fa fa-envelope"></i><span><a href="#">tonusbrest@gmail.com</a></span></div></div>

                </div>
            </div>
        </div>
    </div>

    <div class="bot2_wrapper">
        <div class="container">
            <div class="copyright">&copy; 2018 VENERAMIGNO</div>
            <ul class="menu_bottom">
                <li><a href="#">Связаться</a></li>
            </ul>
        </div>
    </div>


</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
