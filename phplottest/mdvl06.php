<?php
# $Id: mdvl06.php 1001 2011-08-08 02:22:55Z lbayuk $
# Testing phplot - Data Value Labels on more plot types - case 6
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => "\nLinepoints, @315",   # Title part 2
  'plot_type' => 'linepoints',  # Plot type
  'dvl_angle' => 315,      # Data Value Label angle, NULL to default
  );
require 'mdvl.php';
