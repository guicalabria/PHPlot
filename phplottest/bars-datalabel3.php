<?php
# $Id: bars-datalabel3.php 1001 2011-08-08 02:22:55Z lbayuk $
# PHPlot test: Bars with datalabel - 3
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => " 4x4",       # Title part 2
  'ngroups' => 4,           # Number of bar groups
  'nbars' => 4,             # Number of bars per group
  'fontsize' => NULL,       # Label font size or NULL to omit
  'shading' => NULL,        # SetShading: 0 or pixels or NULL to omit
  );
require 'bars-datalabel.php';
