<?php
# $Id: error-SetPlotAreaWorld5.php 1355 2012-07-27 21:38:06Z lbayuk $
# Testing PHPlot - Bad data range with SetPlotAreaWorld
# See the script named below for details
$subtitle = 'Xmax<Data_Min, Xmin unset'; // Subtitle for plot
$spaw = array(NULL, 20, 20, 200); // Args to SetPlotAreaWorld
require 'error-SetPlotAreaWorld.php';
