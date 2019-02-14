<?php
	
	$moneyAmount = 12;
	
	$cappucinoPrice = 140;
	$espressoPrice = 80;
	$waterPrice = 20;
	
	$canBuyAnything = false;
	
	if($moneyAmount >= $cappucinoPrice) {
		echo "Вы можете купить капучино!\n";
		$canBuyAnything = true;
	}
	
	if($moneyAmount >= $espressoPrice) {
		echo "Вы можете купить эспрессо!\n";
		$canBuyAnything = true;
	}
	
	if($moneyAmount >= $waterPrice) {
		echo "Вы можете купить воду!\n";
		$canBuyAnything = true;
	}
	
	if($canBuyAnything === false) {
		echo "Недостаточно средств!\n";
	}