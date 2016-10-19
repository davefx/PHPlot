<?php
# $Id: squarea1c.php 1733 2015-10-25 18:09:21Z lbayuk $
# PHPlot test: Squared and Squared Area (1c)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Squared, Draw Broken Lines, Axis & Data Value Labels',
  'plot_type' => 'squared',
  'dataset' => 0,
  'broken_lines' => TRUE,
  'missing_point' => TRUE,
  'axis_data_labels' => TRUE,
  'data_value_labels' => TRUE,
  );
require 'squarea.php';
