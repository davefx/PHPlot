<?php
# $Id: range-auto7bin6.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Binary tick step: small range',
  'min' => 0,              # Lowest data value
  'max' => 4,              # Highest data value
  'tick_mode' => 'binary', # Tick selection mode
  );
require 'range-auto.php';
