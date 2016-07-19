<?php
# $Id: squarea1h.php 1733 2015-10-25 18:09:21Z lbayuk $
# PHPlot test: Squared and Squared Area (1h)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Squared, Don\'t Draw Broken Lines',
  'plot_type' => 'squared',
  'dataset' => 3,
  'broken_lines' => FALSE,
  'missing_point' => TRUE,
  );
require 'squarea.php';
