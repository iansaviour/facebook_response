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

    $id_user_admin = "10200560517853315";
    $id_page = "450105198488497";
    $user_admin = "Septian Primadewa";

    FacebookSession::setDefaultApplication('523383174467246', '4539d3680da76d5b9be4b2facea2a58a');
    // login helper with access token
    // To do : get access token
    // Note : This is permanent session for user.
    //$session = new FacebookSession('CAAHcA6QyDq4BAB04gZA7gy8eBzNndkaZBmZA8wNZA0siUJmfXJQU5ZBuFZA6OwQfdaxcJWNYlKPlDXVOqsVJPz6Y1oTvef1Kr5jEYFGPH80yiUBpmDuRF5PwIbjZBRHh5ZC3pxPjTnsEf9ibl4AeP0l2hXQl0ll3719RUejSz83QzDCmp9vM6DswJNbcvfsr6kLcDaIVuaqOy161p1EgPAot');
    // Note : This is permanent session for user.
    $session = new FacebookSession('CAAHcA6QyDq4BAGMtM1OR75SwyCxFIKLBluD0hh5oAkAUZBI89z9vEgsGysp4FKViIwvg7zU2TmBQC39cGkNVTy9gPIhYQO0OP0On0j5CCT7BAEMjQnGIR9ZA1cEbMgh6wvMbu44VlqgbfsgZAoqZAOkB40h8y3Cj6An4Rua82ktSZBrmPt8gYJFu1W82DVY8ZD');
    //done open session

    // reply conversation
    // To do : only response unreply  
    $request = new FacebookRequest(
      $session,
      'POST',
      '/t_mid.1431484858673:9fdb695027e7171223/messages',
      array (
        'message' => "Yes, i'm replying this",
      )
    );
    $response = $request->execute();
    $graphObject = $response->getGraphObject();
  ?>
	</body>
</html>