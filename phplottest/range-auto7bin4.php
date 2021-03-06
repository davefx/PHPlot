<?php
# $Id: range-auto7bin4.php 1573 2013-04-02 22:08:50Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Binary tick step: check for roundoff error, expecting step=8',
  'min' => 0,              # Lowest data value
  'max' => 40,             # Highest data value
  'adjust_mode' => 'T',    # Range adjust mode: 'T', 'R', or 'I'
  'adjust_amount' => 0,    #  % of range for adjustment
  'mintick' => 5,          # Minimum tick count
  'tick_mode' => 'binary', # Tick selection mode
  );
require 'range-auto.php';
