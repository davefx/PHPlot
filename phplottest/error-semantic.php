<?php
# $Id: error-semantic.php 1001 2011-08-08 02:22:55Z lbayuk $
# PHPlot error test - semantic error - mismatched data type and plot type
require_once 'phplot.php';
$data = array(array('a', 1, 1), array('b', 2, 3), array('c', 3, 5));
$plot = new PHPlot();
$plot->SetDataType('data-data');
$plot->SetDataValues($data);
$plot->SetPlotType('bars');
$plot->DrawGraph();
