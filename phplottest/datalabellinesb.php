<?php
# $Id: datalabellinesb.php 1209 2012-03-17 01:28:47Z lbayuk $
# PHPlot test: Data Label Lines - case 11
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => " (2 datasets, labels up/down, lines through)",    # Title part 2
  'groups' => 2,            # Number of data groups (1 or more)
  'labelpos' => 'both',     # X Data Label Position: plotup, plotdown, both, none
  'labellines' => True,    # Draw data lines? False or True
  'plottype' => 'bubbles', # Plot type
  );
require 'datalabellines.php';
