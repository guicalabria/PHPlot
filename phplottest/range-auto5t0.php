<?php
# $Id: range-auto5t0.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot auto-range test
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Tick Anchor at 0 vs No Tick Anchor, Adjust Mode T',
  'min' => 23,             # Lowest data value
  'max' => 100,            # Highest data value
  'zm' => 0,               # Range zero magnet
  'adjust_mode' => 'T',    # Range adjust mode: 'T', 'R', or 'I'
  'tickanchor' => NULL,    # Tick anchor, if set
  );
require 'range-auto.php';
