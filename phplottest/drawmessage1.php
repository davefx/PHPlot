<?php
# $Id: drawmessage1.php 1155 2012-02-06 16:52:04Z lbayuk $
# PHPlot Test: DrawMessage() message image, case 1
# This is a parameterized test. See the script named at the bottom for details.
$options = array(
  'draw_background' => TRUE,
  'text_color' => 'red',
);
$text = 'Red text, background color.';
$extra_chars = 100;
$set_bgcolor = True;

require 'drawmessage.php';
