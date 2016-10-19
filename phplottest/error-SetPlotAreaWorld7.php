<?php
# $Id: error-SetPlotAreaWorld7.php 1355 2012-07-27 21:38:06Z lbayuk $
# Testing PHPlot - Bad data range with SetPlotAreaWorld
# See the script named below for details
$subtitle = 'Ymax<Data_Min, Ymin unset'; // Subtitle for plot
$spaw = array(20, NULL, 200, 20); // Args to SetPlotAreaWorld
require 'error-SetPlotAreaWorld.php';
