<?php 

use \Arcca\Model\User;
use \Arcca\Model\Cart;

function formatPrice($vlprice)
{

	if (!$vlprice > 0) $vlprice = 0;

	return number_format($vlprice, 2, ",", ".");

}

function formatDate($date)
{

	return date('d/m/Y', strtotime($date));

}

function checkLogin($inadmin = true)
{

	return User::checkLogin($inadmin);

}

function getUserName()
{

	$user = User::getFromSession();

	return $user->getdesperson();

}

function getFirstLetterUserName()
{
	$user = User::getFromSession();

	$firstLetter = substr($user->getdesperson(), 0, 1);

	$firstUperLetter = strtoupper($firstLetter);

	return $firstUperLetter;
}


function getUserDtRegister()
{

	$user = User::getFromSession();

	$dtRegister = strtotime('d/m/Y', $user->getdtregister());

	return $dtRegister;

}

function getCartNrQtd()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getProductsTotals();

	return $totals['nrqtd'];

}

function getCartVlSubTotal()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getProductsTotals();

	return formatPrice($totals['vlprice']);

}

 ?>