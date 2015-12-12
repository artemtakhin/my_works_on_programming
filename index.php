<?php
echo "Привет и добро пожаловать в мини калькулятор на php=) Версия PHP:".phpversion();
echo "<br><hr>P.S. Это моя первая прога на PHP =)<br><hr>";

$btn = $_POST[btn];
$pole = $_POST[pole];
$pole1 = $_POST[pole1];

echo "Введите числа в первое и во второе поле ниже и нажмите знак арифметического действия : <hr>";




function plus($pole, $pole1){
	return $pole + $pole1;
}
function minus($pole, $pole1){
	return $pole - $pole1;
}
function del($pole, $pole1){
	return $pole / $pole1;
}
function ymnoj($pole, $pole1){
	return $pole * $pole1;
}


echo <<<END
<form name="" method="POST" action="">
   <input type="text" name="pole">
   <button type="submit" name="btn" value="+">+</button>
   <button type="submit" name="btn" value="-">-</button>
   <button type="submit" name="btn" value="/">/</button>
   <button type="submit" name="btn" value="*">*</button>
   <input type="text" name="pole1"> 
 </form>
END;

switch ($btn) {
	case '+':
		echo '= '.plus($pole, $pole1);
		break;
	case '-':
		echo '= '.minus($pole, $pole1);
		break;
	case '/':
		echo '= '.del($pole, $pole1);
		break;
	case '*':
		echo '= '.ymnoj($pole, $pole1);
		break;
	default:
		echo "Вводите числа!";
		break;
}

?>