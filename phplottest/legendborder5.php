<?php
# $Id: legendborder5.php 1801 2016-01-04 22:48:17Z lbayuk $
# PHPlot test: Legend border control - Defaults on, color overrides grid color
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Border color (blue) overrides grid color (red)',
  'border_color' => 'blue',         # Legend border color if set
  'grid_color' => 'red',            # Grid color
  );
require 'legendborder.php';

