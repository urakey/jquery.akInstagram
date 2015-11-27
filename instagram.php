<?php
  $include_path = './';
  $token_file = 'token.php';
  require($include_path . $token_file);
  $access_token = ACCESS_TOKEN;
    $request_url  = 'https://api.instagram.com/v1/users/self/media/recent/';
  if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET'){
    echo @file_get_contents($request_url.'?access_token='.$access_token);
    exit;
  } elseif (filter_input(INPUT_ENV, 'REQUEST_METHOD') == 'GET'){
    echo @file_get_contents($request_url.'?access_token='.$access_token);
    exit;
  }
?>
