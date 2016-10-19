<?php
# $Id: drawmessage6.php 1155 2012-02-06 16:52:04Z lbayuk $
# PHPlot Test: DrawMessage() message image, case 6
# This is a parameterized test. See the script named at the bottom for details.
$options = array(
  'draw_background' => True,
  'draw_border' => True, // No effect without Set*()
  'wrap_width' => 30,
);
$text = 'Background color, text wrap changed to 30.'
      . " Newlines still work[\n] with wrapping.";
$set_bgcolor = True;
$extra_chars = 200;

require 'drawmessage.php';
