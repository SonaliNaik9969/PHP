<!DOCTYPE html>
<html>
<body>
	<?php
	# for loop

	echo "Multiple of 7 are : " . "<br><br>";
	for ($i=20; $i <= 99 ; $i++) 
		{ 
			if ($i % 7 == 0) 
			{
				echo $i . "<br>";
			}

		}
	?>
</body>
</html>