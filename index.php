<?php
  // process client request
  header("Content-Type:application/json");
  if (!empty($_GET['name']) {
    //
    $name=_GET['name'];
    $stream= news($name);

    if(empty($stream))
    	// book not found
    	deliver_response(404, "news not found", NULL);
  }
  else{
  	// respond book price
  	deliver_response(200, "News Found", $stream);
  }
  else {
  // throw invalid request
  	deliver_response(400, "Invalid Request", NULL);
  }
  function deliver_response($status, $status_message, $data)
  {
  	header("HTTP/1.1 $status $status_message");
  	$response['status']=$status;
  	$response['status_message']=$status_message;
    $response['data']=$data;

    $json_response=json_encode($response);
    echo $json_response;
  }
?>
