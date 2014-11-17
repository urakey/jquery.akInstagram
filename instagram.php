<?php
  if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET'){
    $access_token = '211242.....';
    $request_url  = 'https://api.instagram.com/v1/users/self/media/recent/';
    echo @file_get_contents($request_url.'?access_token='.$access_token);
    exit;
  }
?>