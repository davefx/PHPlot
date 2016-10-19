<?php
# $Id: range-autox4.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot Test: for reference manual, tick increment calculation
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => "Ref. Man.: Tick Increment Parameter tick_inc_integer\n"
              . "Example of not forcing integer tick increment, binary mode",
  'min' => 0,              # Lowest data value
  'max' => 1.8,            # Highest data value
  'tick_mode' => 'binary',  # Tick selection mode
  'intinc' => False,       # Integer increment flag
  );
require 'range-auto.php';
