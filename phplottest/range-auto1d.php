<?php
# $Id: range-auto1d.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Zero Magnet threshold case (D): decrease ZM, does not include 0',
  'min' => 83.33,          # Lowest bar value
  'max' => 100,            # Highest bar value
  'zm' => 0.800,           # Range zero magnet
  );
require 'range-auto.php';
