<?php
	echo "Hello, world! - it's index.php";
	
	$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>