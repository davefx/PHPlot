<?php
# $Id: error-SetPlotAreaWorld4.php 1355 2012-07-27 21:38:06Z lbayuk $
# Testing PHPlot - Bad data range with SetPlotAreaWorld
# See the script named below for details
$subtitle = 'Xmin>Data_Max, Xmax unset'; // Subtitle for plot
$spaw = array(200, 20, NULL, 200); // Args to SetPlotAreaWorld
require 'error-SetPlotAreaWorld.php';
