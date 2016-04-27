
<html>
<body>

<?php
header("Content-disposition: attachment; 
	filename=statistics.pdf");
header("Content-type: application/pdf");
readfile("statistics.pdf");
?>
</body>
</html>

