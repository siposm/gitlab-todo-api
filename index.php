<?php

    //curl --header "PRIVATE-TOKEN: <MY_API_KEY>" https://gitlab.com/api/v4/todos

    $my_token = "<MY_API_KEY>";

    $url = "https://gitlab.com/api/v4/todos";
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_HTTPHEADER, array('PRIVATE-TOKEN: ' . $my_token));
    header('Content-Type: application/json');
    curl_exec($handle);
    curl_close($handle);
?>