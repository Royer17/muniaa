<!doctype html>
<html>
  <head>
    <title>{{ $setting->web_title }}</title>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="{{ '/css/output.min.css' }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
    <style>
      .mfp-active {
        overflow: hidden;
      }

      .mfp-bg {
        overflow: hidden;
      }
      .mfp-wrap {
        overflow: hidden !important;
      }
    </style>
  </head>
    <body>

        @include('shared.header')
        @yield('content')
        
            <div id="news-popup" class="popup-gallery hidden">
      <a
        href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"
        title="The Cleaner"
        ><img
          src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg"
          width="75"
          height="75"
      /></a>
      <a
        href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"
        title="Winter Dance"
        ><img
          src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg"
          width="75"
          height="75"
      /></a>
      <a
        href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"
        title="The Uninvited Guest"
        ><img
          src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg"
          width="75"
          height="75"
      /></a>
      <a
        href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"
        title="Oh no, not again!"
        ><img
          src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg"
          width="75"
          height="75"
      /></a>
      <a
        href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"
        title="Swan Lake"
        ><img
          src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg"
          width="75"
          height="75"
      /></a>
      <a
        href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"
        title="The Shake"
        ><img
          src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg"
          width="75"
          height="75"
      /></a>
      <a
        href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"
        title="Who's that, mommy?"
        ><img
          src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg"
          width="75"
          height="75"
      /></a>
    </div>

        
        @include('shared.footer')   
        <script src="{{ '/js/jquery-3.5.1.min.js'}}"></script>
        <script src="{{ '/js/owl.carousel.js' }}"></script>
        <script src="{{ '/js/jquery.fancybox.min.js' }} "></script>
        <script src="{{ '/js/jquery.dataTables.min.js' }}"></script>
        
        @yield('scripts')
    </body>
</html>
