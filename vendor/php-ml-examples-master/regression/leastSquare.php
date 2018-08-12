<?php 

namespace Phpml;

include '../../autoload.php';

use Phpml\Regression\LeastSquares;

$samples = [[60], [61], [62], [63], [65]];
$targets = [3.1, 3.6, 3.8, 4, 4.1];

$regression = new LeastSquares();
$regression->train($samples, $targets);

var_dump($regression->predict([64]));

?>