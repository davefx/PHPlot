<?php
# $Id: labelvars17.php 1001 2011-08-08 02:22:55Z lbayuk $
# Testing phplot - tick/data label variant formatting - case 17
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Case 8: XT=none, XD=both',    # Title line 2
  'x' => True,              # Chart type, explicit X values or not
  'xt_pos' => 'none',       # X Tick Label position, NULL to skip
  'xd_pos' => 'both',       # X Data Label position, NULL to skip
  );
require 'labelvars.php';
