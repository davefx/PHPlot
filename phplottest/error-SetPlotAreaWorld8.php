<?php
# $Id: error-SetPlotAreaWorld8.php 1355 2012-07-27 21:38:06Z lbayuk $
# Testing PHPlot - Bad data range with SetPlotAreaWorld
# See the script named below for details
$subtitle = 'Xmin==Xmax, Ymin Ymax unset'; // Subtitle for plot
$spaw = array(100, NULL, 100, NULL); // Args to SetPlotAreaWorld
require 'error-SetPlotAreaWorld.php';
