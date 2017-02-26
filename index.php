<?php
echo "<div style='text-align:right'><h1>HELLO EXABYTES</h1></div>";
$image = 'http://www.exabytes.asia/download/logo/ExabytesGroup600240bw.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>
