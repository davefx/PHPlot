<?php
# $Id: range-auto7bin7.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Binary tick step: small range, force integer step',
  'min' => 0,              # Lowest data value
  'max' => 4,              # Highest data value
  'tick_mode' => 'binary', # Tick selection mode
  'intinc' => TRUE,        # Integer increment flag
  );
require 'range-auto.php';
