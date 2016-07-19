<?php
# $Id: range-auto7date2.php 1563 2013-04-01 20:06:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Date/time tick step',
  'min' => 0,              # Lowest data value
  'max' => 200,            # Highest data value
  'tick_mode' => 'date', # Tick selection mode
  );
require 'range-auto.php';
