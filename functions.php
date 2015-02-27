<?php

function news($find) {
	$news = array(
    "train"=> "truck crashes into train and derails train runs away but gets arrested",
    "coding" => "No News Yet"
   );
	foreach($news as $news=>$read)
	{
		if($news==$find)
		{
			return $read;
			break;
		}
	}
}



?>
