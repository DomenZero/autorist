<?php
  	$name = $_POST["name"];
	$tel = $_POST["tel"];
	$text = $_POST["text"];
	$result = 0;
	// define(EMAIL_TO, "wardomenmax@gmail.com");
	
	$subject = "Письмо с Вашего сайта http://".$_SERVER["HTTP_HOST"]."/";
		 $header = "От ".$name.".\r\n Телефон: ".$tel."\r\n\r\n";
			mail("Viktor31031992@yandex.ru", $subject, $text, $header);
	// mail( "wardomenmax@gmail.com", "Feedback Form Results",
    // $message, $email );
	header( "Location: http://www.autorist.ru/index.html" );
?>