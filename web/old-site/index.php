<html>
  <head>
    <title>Dosantas - Ropa interior - Todo está en el interior</title>

    <script src="/js/jquery-1.11.1.min.js"></script>

    <script src="/js/jquery.photoset-grid.min.js"></script>

    <style type="text/css">
      body {
        background-image: url("/assets/background.jpg");
        border:           0;
        margin:           0;
      }

      header {
        margin-left:    10px;
        margin-right:   10px;
        padding-bottom: 10px;
        padding-top:    10px;
        text-align:     left;
      }

      img#logoImg {
        
      }
      
      label.contact-info {
        color:            #999999;
        font-family:      Helvetica;
      }
      
      div#photosDiv {
        margin:     0 auto;
        margin-top: 20px;
        width:      50% !important;
      }

      footer {
        background-color: black;
        color:            white;
        font-family:      Helvetica;
        padding-left:     10px;
        padding-right:    10px;
        padding-bottom:   10px;
        padding-top:      10px;
        text-align:       center;
      }

      @media only screen and (min-device-width : 320px) and (max-device-width : 568px) {
        img#logoImg {
          width: 80%;
        }

        div#photosDiv {
          width: 90% !important;
        }
        
        footer p {
          font-size: 32px;
        }
      }
    </style>
	
	<script>
		var _prum = [['id', '54ca969babe53d877ae85738'],
					 ['mark', 'firstbyte', (new Date()).getTime()]];
		(function() {
			var s = document.getElementsByTagName('script')[0]
			  , p = document.createElement('script');
			p.async = 'async';
			p.src = '//rum-static.pingdom.net/prum.min.js';
			s.parentNode.insertBefore(p, s);
		})();
	</script>
  </head>
  
  <body>
    <div id="fb-root"></div>
    
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=674691419259529&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header>
      <div class="fb-like" data-href="/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </header>

    <center>
      <img id="logoImg" src="/assets/logo-small.png" />
      
      <br>
      
      <label class="contact-info">comercial@dosantas.com / 310-444-32-75</label>
    </center>

    <div class="photoset-grid-basic" id="photosDiv" style="visibility: hidden;">
      <img src="/photos-collection-01/1E4A1339.jpg">

      <img src="/photos-collection-01/1E4A1466.jpg">
      <img src="/photos-collection-01/1E4A1610.jpg">

      <img src="/photos-collection-01/1E4A1644.jpg">

      <img src="/photos-collection-01/1E4A0749.jpg">
      <img src="/photos-collection-01/1E4A1000.jpg">

      <img src="/photos-collection-01/1E4A0892.jpg">

      <img src="/photos-collection-01/1E4A0992.jpg">
      <img src="/photos-collection-01/1E4A1044.jpg">

      <img src="/photos-collection-01/1E4A1185.jpg">

      <img src="/photos-collection-01/1E4A1198.jpg">
      <img src="/photos-collection-01/1E4A1318.jpg">
            
      <img src="/photos-collection-01/1E4A1713.jpg">

      <img src="/photos-collection-01/1E4A1783.jpg">
      <img src="/photos-collection-01/1E4A1846.jpg">

      <img src="/photos-collection-01/1E4A1962.jpg">
    </div>

    <br>

    <footer>
      <p>Copyright &copy; Dosantas | El contenido de Dosantas.com es propiedad de Dosantas. Queda prohibida su reproducci&oacute;n total o parcial en cualquier medio conocido o por conocerse.</p>
    </footer>

    <script type="text/javascript">
      $(document).ready(
        function() {
          console.log("document ready");

          $(".photoset-grid-basic").photosetGrid({
            gutter: "5px",
            layout: "12121212121",
            highresLinks: true,
            rel: "print-gallery",
            onInit: function() {

            },
            onComplete: function() {
              $("div#photosDiv").css("visibility", "");
            }
          });
        }
      );
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-54600933-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>