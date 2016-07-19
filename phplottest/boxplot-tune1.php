<?php
# $Id: boxplot-tune1.php 1615 2013-04-23 22:15:07Z lbayuk $
# PHPlot test: Box plot - tuning parameters
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Increase max_width to 40',
  'n_points' => 10,            # Number of data points
  'max_width' => 40,           # Tune: boxes_max_width
  );
require 'boxplot-tune.php';
