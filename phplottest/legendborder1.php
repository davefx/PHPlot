<?php
# $Id: legendborder1.php 1801 2016-01-04 22:48:17Z lbayuk $
# PHPlot test: Legend border control - border on w/background
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Border on, defaults to grid color (red), lavender background',
  'grid_color' => 'red',             # Grid color
  'legend_bg_color' => 'lavender',        # Legend background color
  );
require 'legendborder.php';
