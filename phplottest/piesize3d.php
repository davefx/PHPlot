<?php
# $Id: piesize3d.php 1057 2011-12-30 17:01:13Z lbayuk $
# PHPlot test - Pie Chart Sizing and Label Variations - Pie/image size (d)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Landscape',     # Title part 2
  'pie_diam_factor' => 1,      # If set, oblateness for shaded pie (dflt=0.5)
  'image_aspect' => 'L',       # Image aspect: S=square, P=portrait, L=landscape
  );
require 'piesize.php';
