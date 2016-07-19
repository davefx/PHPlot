<?php
# $Id: drawdataborder2.php 1440 2012-12-24 02:44:41Z lbayuk $
# PHPlot test - SetDrawDrawBorders (PHPlot >= 6.0) - case 2
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'shading' => 0,        # Shaded: NULL for default shading, 0 unshaded, etc.
  'draw_borders' => True,   # SetDrawDataBorders: NULL to not call, True, False
  );
require 'drawdataborder.php';
