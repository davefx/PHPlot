<?php
# $Id: range-autox2.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot Test: for reference manual, tick increment calculation
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => "Ref. Man.: Advanced, Automatic Tick Increment Calculations\n"
              . "Example of date-mode tick increment choice",
  'min' => 0,              # Lowest data value
  'max' => 1020,          # Highest data value
  'tick_mode' => 'date',     # Tick selection mode
  );
require 'range-auto.php';
