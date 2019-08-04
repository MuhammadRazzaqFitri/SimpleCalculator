<?php
unset($_REQUEST['result']);
if (isset($_REQUEST['equalButton'])) {
	$firstNumber = $_REQUEST['firstNumber'];
	$secondNumber = $_REQUEST['secondNumber'];
	$operator = $_REQUEST['operator'];

	switch ($operator) {
		case '+':
			$total = $firstNumber + $secondNumber;
			break;
		case '-':
			$total = $firstNumber - $secondNumber;
			break;
		case '*':
			$total = $firstNumber * $secondNumber;
			break;
		case '/':
			$total = $firstNumber / $secondNumber;
			break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<h1>Php Calculator</h1>
	<form action="calculator.php" >
		<input type="text" name="firstNumber" size="2">
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>	
		</select>		
		<input type="text" name="secondNumber" size="2">
		<input type="submit" name="equalButton" value="=">
		<input type="text" name="result" size="3" value="<?=$total?>">
	</form>

</body>
</html>