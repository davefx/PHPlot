<?php
# $Id: range-auto4d.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Null Range, high positive value, still goes to 0',
  'min' => 1000,           # Lowest data value
  'max' => 1000,           # Highest data value
  );
require 'range-auto.php';
