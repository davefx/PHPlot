<?php
# $Id: range-auto7dec1.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Decimal tick step',
  'min' => 0,              # Lowest data value
  'max' => 10,             # Highest data value
  'tick_mode' => 'decimal', # Tick selection mode
  );
require 'range-auto.php';
