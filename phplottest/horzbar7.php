<?php
# $Id: horzbar7.php 1001 2011-08-08 02:22:55Z lbayuk $
# Horizontal bars - case 7 options
# This is a parameterized test. See the script named at the bottom for details.
$tp = array_merge(array(
  'suffix' => "\nGD text labels 90d both sides",       # Title part 2
  'ydatalabelpos' => 'both',      # Y data label position (SetYDataLabelPos)
  'ydatalabelangle' => 90,    # Y data label angle
  ));
require 'horzbar.php';
