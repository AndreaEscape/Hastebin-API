<?php

$ch = curl_init(); 
	    curl_setopt($ch, CURLOPT_URL,            "https://hastebin.com/documents" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_POST,           1 );
        curl_setopt($ch, CURLOPT_POSTFIELDS, array('data'=>$_GET['text']));
        curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: multipart/form-data'));
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response_array = json_decode($response_json,true);

if(empty($_GET['text'])){
	$arr = array('text' => "Error, insert a text");
	echo json_encode($arr);
	die;
} else {
	echo json_decode($response_json)->key;
}
?>
