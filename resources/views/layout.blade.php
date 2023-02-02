<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blog</title>
<!--
Moonlight Template
https://templatemo.com/tm-512-moonlight
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href={{asset(url("css/bootstrap.min.css"))}}>
        <link rel="stylesheet" href={{asset(url("css/bootstrap-theme.min.css"))}}>
        <link rel="stylesheet" href={{asset(url("css/fontAwesome.css"))}}>
        <link rel="stylesheet" href={{asset(url("css/light-box.css"))}}>
        <link rel="stylesheet" href={{asset(url("css/templatemo-main.css"))}}>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src={{asset(url("js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"))}}></script>
    </head>




    @yield('content')









    <div class="footer">
        <div class="content">
            <p> Made by Allan Kipkorir Mutai</p>
        </div>
      </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src={{asset(url("js/vendor/bootstrap.min.js"))}}></script>

  <script src={{asset(url("js/datepicker.js"))}}></script>
  <script src={{asset(url("js/plugins.js"))}}></script>
  <script src={{asset(url("js/main.js"))}}></script>

  <script type="text/javascript">
  $(document).ready(function() {



      // navigation click actions
      $('.scroll-link').on('click', function(event){
          event.preventDefault();
          var sectionID = $(this).attr("data-id");
          scrollToID('#' + sectionID, 750);
      });
      // scroll to top action
      $('.scroll-top').on('click', function(event) {
          event.preventDefault();
          $('html, body').animate({scrollTop:0}, 'slow');
      });
      // mobile nav toggle
      $('#nav-toggle').on('click', function (event) {
          event.preventDefault();
          $('#main-nav').toggleClass("open");
      });
  });
  // scroll function
  function scrollToID(id, speed){
      var offSet = 0;
      var targetOffset = $(id).offset().top - offSet;
      var mainNav = $('#main-nav');
      $('html,body').animate({scrollTop:targetOffset}, speed);
      if (mainNav.hasClass("open")) {
          mainNav.css("height", "1px").removeClass("in").addClass("collapse");
          mainNav.removeClass("open");
      }
  }
  if (typeof console === "undefined") {
      console = {
          log: function() { }
      };
  }

  </script>
  <script>
                  document.getElementById("fileInput").placeholder = "Upload an image of your Blog";
  </script>
</body>
</html>
