<html>
	<body>
  <?php
    session_start();
    //require sdk
    define('Facebook', '/fbsdk/src/Facebook/');
    require __DIR__ . '/fbsdk/autoload.php';
    //use sdk
    use Facebook\FacebookSession;
    use Facebook\FacebookRedirectLoginHelper;
    use Facebook\FacebookRequest;
    use Facebook\FacebookResponse;
    use Facebook\FacebookSDKException;
    use Facebook\FacebookRequestException;
    use Facebook\FacebookAuthorizationException;
    use Facebook\GraphObject;

    $id_page = "10200560517853315";
    $page_name = "Septian Primadewa";

    FacebookSession::setDefaultApplication('523383174467246', '4539d3680da76d5b9be4b2facea2a58a');
    // login helper with access token
    // PR : get access token
    // Note : This is permanent session for page.
    $session = new FacebookSession('CAAHcA6QyDq4BAB04gZA7gy8eBzNndkaZBmZA8wNZA0siUJmfXJQU5ZBuFZA6OwQfdaxcJWNYlKPlDXVOqsVJPz6Y1oTvef1Kr5jEYFGPH80yiUBpmDuRF5PwIbjZBRHh5ZC3pxPjTnsEf9ibl4AeP0l2hXQl0ll3719RUejSz83QzDCmp9vM6DswJNbcvfsr6kLcDaIVuaqOy161p1EgPAot');
    //$page_session = new FacebookSession('CAAHcA6QyDq4BAGMtM1OR75SwyCxFIKLBluD0hh5oAkAUZBI89z9vEgsGysp4FKViIwvg7zU2TmBQC39cGkNVTy9gPIhYQO0OP0On0j5CCT7BAEMjQnGIR9ZA1cEbMgh6wvMbu44VlqgbfsgZAoqZAOkB40h8y3Cj6An4Rua82ktSZBrmPt8gYJFu1W82DVY8ZD');
    //done open session

    //request inbox
    // PR : ambil semua message dalam jangka waktu 10 menit terakhir
    $request = new FacebookRequest($session, 'GET', '/me?fields=inbox.limit(20){unread,comments.limit(2)}');
    $response = $request->execute();
    $arrayResult = json_decode($response->getRawResponse(),true);

    $i = 1;
    foreach ($arrayResult["inbox"]["data"] as $inbox) {
      $stream_string = "";
      $message_string = "";

      $stream_string = $i . " - id_message : " . $inbox["id"];

      //detail
      foreach ($inbox["comments"]["data"] as $comments) {
        //echo " | id_conversation : " . $comments["id"];
        $id_user = $comments["from"]["id"];
        if (strcmp($id_user,$id_page) != 0){
          $message_string = $message_string . "<br/>(". $comments["from"]["id"] .")[" . $comments["from"]["name"] . "] " . $comments["message"];
        }
      }

      if($message_string != ""){
        echo $stream_string . $message_string . "<br/><hr/>";
        $i++;
      }
    }
  ?>
	</body>
</html>