<?php
# $Id: range-part2.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test with partial range specification
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Set lower limit PlotMin < DataMin < DataMax',
  'plot_min_y' => 45,     # SetPlotAreaWorld Ymin
  'plot_max_y' => NULL,    # SetPlotAreaWorld Ymax
  );
require 'range-part.php';
