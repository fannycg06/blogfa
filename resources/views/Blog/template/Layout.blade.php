<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de herencia en Laravel</title>
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1 class="logoname"><a href="index.html">Practica Laravel<span>a</span>id</a></h1>
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li class="active"><a href="{{Route('Vista1')}}">Inicio</a></li>
        <li><a class="drop" href="{{Route('Vista2')}}">Acerca de</a></li>
        <li><a class="drop" href="{{Route('Vista3')}}">Datos</a></li>
      </ul>
    </nav>
  </header>
</div>


<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">@yield('Titulovista1') @yield('Titulovista2') @yield('Titulovista3')</h3>
      <p>@yield('ContenidoV1') @yield('ContenidoV2') @yield('ContenidoV3')</p>
      
    </article>
  </div>
</div>


<div class="wrapper coloured">
  <section id="testimonials" class="hoc container clear"> 
   
    <div class="sectiontitle">
      <p class="nospace font-xs">@yield('1ContenidoV1') @yield('2ContenidoV2') @yield('3ContenidoV3')</p>
      <h6 class="heading font-x2">@yield('1Titulovista1') @yield('2Titulovista2') @yield('3Titulovista3')</h6>
    </div>
    <article class="one_half first">
      <figure class="clear"><img src="images/demo/100x100.png" alt="">
        <figcaption>
          <h6 class="heading">@yield('View1') @yield('View2') @yield('View3')</h6>
          <em></em></figcaption>
      </figure>
      <blockquote>@yield('1Desarrollo') @yield('2Desarrollo') @yield('3Desarrollo')</blockquote>
    </article>
    <article class="one_half">
      <figure class="clear"><img src="images/demo/100x100.png" alt="">
        <figcaption>
          <h6 class="heading">@yield('1View1') @yield('2View2') @yield('3View3')</h6>
          <em></em></figcaption>
      </figure>
      <blockquote>@yield('1Desarrollo1') @yield('2Desarrollo2') @yield('3Desarrollo3')</blockquote>
    </article>
    <!-- ################################################################################################ -->
  </section>
</div>



    <footer id="footer" class="hoc clear"> 
        </div>
            <div class="wrapper row5">
                 <div id="copyright" class="hoc clear"> 
                    <!-- ################################################################################################ -->
                 <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
                <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
                <!-- ################################################################################################ -->
            </div>
        </div>
        <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    </footer>
    
    <!-- JAVASCRIPTS -->

    <!-- / Homepage specific -->
</body>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
</html>