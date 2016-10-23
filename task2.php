<html>
	<head> <meta charset="UTF-8"></head>
	<body>
	<form  method="GET">
	<img src="http://www-formula.ru/images/geometry/length_parties_rectangular_triangle.png"><p>
	Длина катета а = <input type ="text" name="arg1" value="<?php 
		if (isset ($_GET['arg1'])) {
			echo $_GET['arg1'];
		}
			?>">
	Длина катета b = <input type ="text" name="arg2" value="<?php 
		if (isset ($_GET['arg2'])) {
			echo $_GET['arg2'];
		}
		
			?>">
	<input type ="submit" value="Рассчитать" >


	</form>


	<?php
		function calc($arg1,$arg2) {
			return sqrt (intval((intval($arg1)*intval($arg1))+(intval($arg2)*intval ($arg2))));
		}
	?>

		<?php 
		
		if (isset($_GET['arg1'])&& isset($_GET['arg2'])) {
		$arg1=$_GET['arg1'];
		$arg2=$_GET['arg2'];		
			if (!is_numeric($arg1) || !is_numeric($arg2)){
				echo  "Введено не числовое значение ";
				} elseif ($arg1<0 || $arg2<0){
					echo  "Введено отрицательное значение ";
					} else {
						echo	number_format(calc($_GET['arg1'],$_GET['arg2']), 2, ',', ' ');
					}	
		}
		?>
	</body>	
</html>	