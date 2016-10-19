<?php
# $Id: error-SetPlotAreaWorld9.php 1355 2012-07-27 21:38:06Z lbayuk $
# Testing PHPlot - Bad data range with SetPlotAreaWorld
# See the script named below for details
$subtitle = 'Ymin==Ymax, Xmin Xmax unset'; // Subtitle for plot
$spaw = array(NULL, 100, NULL, 100); // Args to SetPlotAreaWorld
require 'error-SetPlotAreaWorld.php';
