<?php
# $Id: ydatalabellines2.php 1413 2012-09-18 21:05:53Z lbayuk $
# Testing PHPlot: Y Data Label Lines, for horizontal plots - case 2
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => "1 lines dataset, labels right, lines to right",    # Title part 2
  'groups' => 1,            # Number of data groups (1 or more)
  'labelpos' => 'plotright',     # Y Data Label Position: plotleft, plotright, both, none
  'labellines' => True,    # Draw data lines? False or True
  'plottype' => 'lines',   # Plot type: lines points linepoints
  );
require 'ydatalabellines.php';
