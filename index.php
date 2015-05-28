<html>
	<body>
	<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '523383174467246',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
  <?php
    echo "testing";
    //require sdk
    //define('Facebook', '../facebook-php-sdk-v4-4.0-dev/src/Facebook/');
   // require __DIR__ . '../facebook-php-sdk-v4-4.0-dev/autoload.php';
    //use sdk
  //  use Facebook\FacebookSession;
  //  FacebookSession::setDefaultApplication('523383174467246', '4539d3680da76d5b9be4b2facea2a58a');
  ?>
  
	</body>
</html>