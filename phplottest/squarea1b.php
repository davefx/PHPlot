<?php
# $Id: squarea1b.php 1733 2015-10-25 18:09:21Z lbayuk $
# PHPlot test: Squared and Squared Area (1b)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Squared, Don\'t Draw Broken Lines, Data Value Labels',
  'plot_type' => 'squared',
  'dataset' => 0,
  'broken_lines' => FALSE,
  'missing_point' => TRUE,
  'data_value_labels' => TRUE,
  );
require 'squarea.php';
