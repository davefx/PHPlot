<?php
# $Id: range-auto3d.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle'    => 'Range Sign Case D: min < max == 0',
  'min' => -598,           # Lowest data value
  'max' => 0,              # Highest data value
  'zm' => 0,               # Range zero magnet
  );
require 'range-auto.php';
