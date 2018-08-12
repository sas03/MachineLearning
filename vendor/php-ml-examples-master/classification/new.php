<?php 

namespace Phpml;

include '../../../vendor/autoload.php';

/*
//Constructor Parameters

use Phpml\Association\Apriori;

$associator = new Apriori($support = 0.5, $confidence = 0.5);
*/

// Train
$samples = [['alpha','beta','epsilon'], ['alpha','beta','theta'], ['alpha','beta','epsilon'], ['alpha','beta','theta']];
$labels = [];

use Phpml\Association\Apriori;

$associator = new Apriori($support = 0.5, $confidence = 0.5);
$associator->train($samples, $labels);

echo "<pre>";
var_dump($associator->predict(['alpha','theta']));//Array ( [0] => Array ( [0] => beta ) ) affiche les valeurs lisibles d'une variable
echo "</pre>";

echo "<br/>";

echo "<pre>";
print_r($associator->predict([['alpha','epsilon'],['beta','theta']]));//Array ( [0] => Array ( [0] => Array ( [0] => beta ) ) [1] => Array ( [0] => Array ( [0] => alpha ) ) )
echo "</pre>";

echo "---------------";

echo "<pre>";
print_r($associator->getRules());
echo "</pre>";

echo "<pre>";
print_r($associator->apriori());
echo "</pre>";

?>