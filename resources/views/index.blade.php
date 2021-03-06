<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olang language courses</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,500&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="header"> 
        <div class="header_top">
            <div class="container">
                <div class="header_contacts">
                    <div id="app">
                        <div style="background-color: #ffc222;">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
                            <div class="collapse navbar-collapse" id="navbarToggler">
                                <ul class="navbar nav ml-auto">
                                    @php $locale = session()->get('locale'); @endphp
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        @switch('locale')
                                        @case('en')
                                        <img width="20" src="{{public('img/en.png')}}">
                                        English
                                        @break
                                        @case('kz')
                                        <img width="20" src="{{public('img/kz.png')}}">
                                        ?????????? ????????
                                        @break
                                        @case('ru')
                                        <img width="20" src="{{public('img/ru.png')}}">
                                        ?????????????? ????????
                                        @break
                                        @default
                                        <img width="20" src="{{public('img/kz.png')}}">
                                        ?????????? ????????
                                        @endswitch
                                        <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="en">
                                            <img width="20" src="{{public('img/en.png')}}">English</a><br>
                                        <a class="dropdown-item" href="kz">
                                            <img width="20" src="{{public('img/kz.png')}}">?????????? ????????</a><br>
                                            <a class="dropdown-item" href="ru">
                                            <img width="20" src="{{public('img/ru.png')}}">?????????????? ????????</a>

                                    </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <main class="py-4">
                        @yield('content')
                    </main>
                    </div>
                <a class="header_phone" href="tel:77006663757">+77006663757</a>
                <a class="header_email" href="#">olang@gmail.com</a>
                <a  data-fancybox data-src="#modal" href="javascript:;" class="header_btn" href="#">?????????? ????????????????????????</a>
            </div>
         </div>
        </div>
        <div class="header_content">
            <div class="container">
                <div class="header_content-inner">
            <div class="header_logo">
                <a href="#">
                    <img src="img/logo.png" alt="logotype" width="145px" height="40px">
                </a>
            </div>   
            <nav class="menu">
                <ul>
                    <li><a href="#">?????????????? ??????</a></li>
                    <li><a href="#">?????? ??????????</a></li>
                    <li><a href="#">??????????????</a></li>
                    <li><a href="#">???????? ??????????????</a></li>
                </ul>
            </nav>
        </div>
     </div>
    </div>
    </header>
    <section class="slider">
        <div class="container">
            <div class="slider_inner">
                <div class="slider_item">
                    <div class="slider_item-content">
                    <div class="slider_title">
                        Olang ?????????????? ???????? ???????????? ???????? ??????????????????????
                    </div>
                    <div class="slider_text">
                        
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider_btn default_btn">
                        ???????????? ????????????
                    </a>
                    
                    </div>
            </div>

            <div class="slider_item">
                <div class="slider_item-content">
                <div class="slider_title">
                    Olang ?????????????? ???????? ???????????? ???????? ??????????????????????
                </div>
                <div class="slider_text">
                   
                </div>
                <a data-fancybox data-src="#modal" href="javascript:;" class="slider_btn default_btn">
                    ???????????? ????????????
                </a>
                
                </div>
        </div>

        <div class="slider_item">
            <div class="slider_item-content">
            <div class="slider_title">
                Olang ?????????????? ???????? ???????????? ???????? ??????????????????????
            </div>
            <div class="slider_text">
              
            </div>
            <a  data-fancybox data-src="#modal" href="javascript:;" class="slider_btn default_btn">
                ???????????? ????????????
            </a>
            
            </div>
    </div>
        </div>
    </section>

    <!--About us-->
    <section class="services">
        <div class="container">
       <div class="services_items">
           <div class="services_item">
               <img src="img/icon-1.png" alt="" width="60px" height="60px">
               <div class="services_item-title">
                   ?????? ????????????????
               </div>
               <div class="services_item-text">
                   ??????????????, ??????????, ????????, ???????? ???????????????????? ??????????????
               </div>

           </div>

           <div class="services_item">
            <img  src="img/icon-2.png"  alt="" width="60px" height="60px">
            <div class="services_item-title">
                ?????????? ??????????????????
            </div>
            <div class="services_item-text">
                ???????????? ???????????????? ?????????? ???????????????????? ???????? ???????? ???????? ?????????????????????? ????????????
            </div>
            
        </div>

        <div class="services_item">
            <img src="img/icon-4.png" alt="" width="60px" height="60px">
            <div class="services_item-title">
                24/7
            </div>
            <div class="services_item-text">
               ???????????????? ???????????? 24 ?????????? ???????? ???????? ????????????
            </div>
            
        </div>
          </div>
       </div>
    </section>
 
    <footer class="footer">
        <div class="footer_content">
            <div class="container">
                <div class="footer_inner">
                <div class="footer_info">
                    <div class="footer_title">
                        Olang ???????????? ???????? ??????????????????????
                    </div>
                    <div class="footer_text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente harum voluptates error, deserunt pariatur omnis quis quas ad tempora ex,
                        molestias.
                    </div>
                    <a  data-fancybox data-src="#modal" href="javascript:;" class="header_btn" href="#">?????????? ????????????????????????</a>
                    <ul class="footer_list">
                        <li><a class="footer_phone" href="tel:77006663757">+77006663757</a></li>
                        <li><a class="footer_email" href="#">olang@gmail.com</a></li>
                        <li><a class="footer_adress" href="#">?????????????? ??, ?????????????? ??????????????</a></li>
                    </ul>
                </div>
                <div class="footer_map">
                    <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.kz/maps/29617/zheltysuy/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">??????????????</a>
                    <a href="https://yandex.kz/maps/geo/53168222/?from=tabbar&ll=68.323301%2C40.776075&source=serp_navig&utm_medium=mapframe&utm_source=maps&z=13" style="color:#eee;font-size:12px;position:absolute;top:14px;">?????????????? ??? ????????????.??????????</a>
                    <iframe width="630px" height="250px" src="https://yandex.kz/map-widget/v1/-/CCUUn-bROD"  frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                </div>
                </div>
            </div>
        </div>
        <div class="footer_copy">
            <div class="container">
                <div class="footer_text">
                    ?? 2021 Template by Yessenali Zhanaidar. ?????? ?????????? ????????????????.
                </div>
            </div>
        </div>
    </footer>

    <div id="modal">
        <h2>Hello!</h2>
        <p>You are awesome!</p>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>

    
    
</body>
</html>