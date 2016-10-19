<?php
# $Id: range-auto4b.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Null Range, 0 value',
  'min' => 0,              # Lowest data value
  'max' => 0,              # Highest data value
  );
require 'range-auto.php';
