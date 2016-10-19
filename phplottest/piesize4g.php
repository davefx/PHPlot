<?php
# $Id: piesize4g.php 1070 2011-12-30 17:02:12Z lbayuk $
# PHPlot test - Pie Chart Sizing and Label Variations - Label Type (g)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Label Formatting: default percentage with PrecisionY=3',    # Title part 2
  'data_choice' => 1,          # Select data array: 1 or 2
  'pie_label_args' => array(), # If set array of args to SetPieLabelType()
  'ttfonts' => TRUE,           # Use TrueType fonts?
  'font_size' => 10,           # If set, TrueType or GD font size
  'precision_y' => 3,       # Default precision, SetPrecisionY()
  );
require 'piesize.php';
