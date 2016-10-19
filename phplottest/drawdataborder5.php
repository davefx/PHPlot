<?php
# $Id: drawdataborder5.php 1440 2012-12-24 02:44:41Z lbayuk $
# PHPlot test - SetDrawDrawBorders (PHPlot >= 6.0) - case 5
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'plottype' => 'stackedbars',     # Plot type: bars or stackedbars
  'draw_borders' => True,   # SetDrawDataBorders: NULL to not call, True, False
  );
require 'drawdataborder.php';
