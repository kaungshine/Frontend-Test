<?php
	function totalCost($hamburger = 1, $milkshake = 1, $cola = 1)
	{
		$hambur_price = 4.95;
		$ms_price = 1.95;
		$cola_price = 0.85;
		$sale_tax = 0.075;
		$pre_tax = 0.16;

		$before_tax = ($hamburger * $hambur_price) + ($milkshake * $ms_price) + ($cola * $cola_price);
		$tip = $before_tax * $pre_tax;
		$tax = $before_tax * $sale_tax;
		$total = $before_tax + $tax + $tip;
		return $total;
	}
	echo totalCost(2, 1, 1);
?>