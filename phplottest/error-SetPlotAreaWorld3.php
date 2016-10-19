<?php
# $Id: error-SetPlotAreaWorld3.php 1355 2012-07-27 21:38:06Z lbayuk $
# Testing PHPlot - Bad data range with SetPlotAreaWorld
# See the script named below for details
$subtitle = 'Xmin>Xmax, Ymin>Ymax'; // Subtitle for plot
$spaw = array(200, 20, 200, 20); // Args to SetPlotAreaWorld
require 'error-SetPlotAreaWorld.php';
