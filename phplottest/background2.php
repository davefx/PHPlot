<?php
# $Id: background2.php 1001 2011-08-08 02:22:55Z lbayuk $
# Background image - 2
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => " (bubbles, white plot background)",       # Title part 2
  'image1' => 'images/bubbles.png', # Background image for entire graph, NULL for none
  'image2' => NULL, # Background image for plot area, NULL for none
  'mode1' => 'tile',  # Graph background mode: centeredtile, tile, scale
  'mode2' => 'centeredtile',  # Plot area background mode: centeredtile, tile, scale
  'pabgnd' => True, # If image2 is null, draw a plot area background?
  );
require 'background.php';
