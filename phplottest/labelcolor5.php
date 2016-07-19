<?php
# $Id: labelcolor5.php 1171 2012-02-19 01:31:53Z lbayuk $
# PHPlot test: label (tick, axis data, data value) color variations - case 5
# This is a parameterized test. See the script named at the bottom for details.
$colors = array(
    'text' => True,
    'ticklabel' => True,
    'datalabel' => True,
    'datavaluelabel' => True,
);
$plot_type = 'stackedbars';
$data_type = 'text-data-yx'; // Horizontal plot
require 'labelcolor.php';
