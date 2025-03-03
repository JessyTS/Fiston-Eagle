<?php
$url = 'https://jsonplaceholder.typicode.com/posts/1';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Erreur cURL : ' . curl_error($ch);
} else {
    $data = json_decode($response, true);
    print_r($data);
}

// curl_close($ch);
?>
