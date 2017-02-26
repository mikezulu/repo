<?php
echo "<div style='text-align:center'><h1>HELLO EXABYTES</h1></div>";
$image = <div align=center>'http://www.exabytes.asia/download/logo/ExabytesGroup600240bw.jpg'</div>;
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>
