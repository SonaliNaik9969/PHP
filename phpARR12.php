<?php
# associative array (str indexes instead of numeric indexes)
# str indexes(keys) cannot contain blank spaces

$cost_prices = array("t-shirt" => 400, "pant" => 500, "shirt" => 300);

$sell_prices = array("t-shirt" => 800, "pant" => 1000, "shirt" => 600);

$offer_sell_prices["t-shirt"] = ((70 * $sell_prices["t-shirt"])/100); 
$offer_sell_prices["pant"] = ((70 * $sell_prices["pant"])/100);
$offer_sell_prices["shirt"] = ((70 * $sell_prices["shirt"])/100);

$sell_quantity = array("t-shirt" => 546, "pant" => 484, "shirt" => 328);

$offer_sell_quantity = array("t-shirt" => 1436, "pant" => 1269, "shirt" => 1399);

$profit = (($sell_prices["t-shirt"] * $sell_quantity["t-shirt"]) + ($sell_prices["pant"] * $sell_quantity["pant"]) + 
			($sell_prices["shirt"] * $sell_quantity["shirt"])) - 
		  (($cost_prices["t-shirt"] * $sell_quantity["t-shirt"]) + ($cost_prices["pant"] * $sell_quantity["pant"]) + 
		  	($cost_prices["shirt"] * $sell_quantity["shirt"]));

$offer_profit = (($offer_sell_prices["t-shirt"] * $offer_sell_quantity["t-shirt"]) + 
				($offer_sell_prices["pant"] * $offer_sell_quantity["pant"]) + 
				($offer_sell_prices["shirt"] * $offer_sell_quantity["shirt"])) - 
				(($cost_prices["t-shirt"] * $offer_sell_quantity["t-shirt"]) + 
				($cost_prices["pant"] * $offer_sell_quantity["pant"]) + 
				($cost_prices["shirt"] * $offer_sell_quantity["shirt"]));

# if else to check which is greater $offer_profit or $profit

if($offer_profit > $profit)
{
	echo "The boutique generated Rs." . ($offer_profit - $profit) . " more profit during offer week";
}
else
{
	echo "The boutique generated Rs." . ($profit - $offer_profit) . " less profit during offer week";
}



?>