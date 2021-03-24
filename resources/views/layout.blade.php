<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='Webエンジニア TAICHI KOBAYASHI ポートフォリオ'>
  <meta property='og:url' content='URLが入る'>
  <meta property='og:description' content='Webエンジニア TAICHI KOBAYASHIのポートフォリオサイトです！'>
  <meta property="og:image" content="img/ogp.png">
  <meta name="description" content="Webエンジニア TAICHI KOBAYASHIのポートフォリオサイトです！" />
  <title>Webエンジニア TAICHI KOBAYASHI ポートフォリオ</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/photoswipe/photoswipe.css') }}">
  <link rel="stylesheet" href="{{ asset('css/photoswipe/default-skin/default-skin.css') }}">
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel=”canonical” href=”URLが入る” />
</head>

<body>
  <div class="wrapper">

    <!-- .gnav -->
    <nav class="gnav" class="fixed">
        @include('gnav')
    </nav>
    <!-- /.gnav -->

    <!-- .header -->
      <header class="header">
        @include('header')        
      </header>
    <!-- /.header -->
    <main class="content">
        @yield('content')
    </main>
    <!-- .footer -->
    <footer class="footer">
        @include('footer')
    </footer>
    <!-- /.footer -->

  </div>

  <!-- 下記はPhotoswipeプラグイン用 -->
  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
       It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides.
          PhotoSwipe keeps only 3 of them in the DOM to save memory.
          Don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->

          <div class="pswp__counter"></div>

          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

          <button class="pswp__button pswp__button--share" title="Share"></button>

          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader--active when preloader is running -->
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>

        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>

        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>

      </div>

    </div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type='text/javascript' src="js/photoswipe/photoswipe.min.js"></script>
  <script type='text/javascript' src="js/photoswipe/photoswipe-ui-default.js"></script>
  <script type='text/javascript' src="js/photoswipe/photoswipe-setup.js"></script>
  <script type='text/javascript' src="js/lazysizes/lazysizes.min.js"></script>
  <script type='text/javascript' src="js/script.js"></script>
</body>
</html>
