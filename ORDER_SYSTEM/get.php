<?php  
if(isset($_GET['calc'])) {
	$rice = 10;
	$ulam1 = 70;
	$ulam2 = 80;
  	$order = $_GET['hm'];
	$money = $_GET['cash'];

	switch ($_GET['order']) {
		case 'kanin':
			$item_price = $rice;
			break;
		case 'sisilog':
			$item_price = $ulam1;
			break;
		case 'bacsilog':
			$item_price = $ulam2;
			break;
		default:
			break;
	}
	// Create a variable to store the sum.
	$total_price = $item_price * $order;

	// Calculate change.
	$change = $money - $total_price;

	// Print the result
	echo "Total nyo po is : " . $total_price . "php <br>";
	echo "Barya nyo po: " . $change . "php";
}
?>