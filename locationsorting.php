<?php
// n is the second token number.

function P ($n) {
	if ($n <= 1) {
		echo "SOUTH,28";
	} elseif ($n <= 25) {
		echo "SOUTH,27";
	} elseif ($n <= 51) {
		echo "SOUTH,26";
	} elseif ($n <= 105) {
		echo "SOUTH,25";
	} elseif ($n <= 211) {
		echo "SOUTH,24";
	}
	else
		echo "SOUTH,23";
}

function PA ($n) {
	if ($n <= 56) {
		echo "SOUTH,22"; 
	} elseif ($n <= 3539) {
		echo "SOUTH,21";
	} elseif ($n <= 5000) {
		echo "SOUTH,20";
	}
	else
		echo "SOUTH,19";
}

function PB ($n) {
	echo "SOUTH,18";
}

function PB ($n) {
	if ($n < 1074) {
		echo "SOUTH,18";
	} elseif ($n <= 2625) {
		echo "SOUTH,17";
	else
		echo "SOUTH,16";
}
function PD ($n) {
	echo "SOUTH,16";
}

function PE ($n) {
	echo "SOUTH,15";
}

function PF ($n) {
	echo "SOUTH,14";
}

function PG ($n) {
	if ($n <= 2947) {
		echo "SOUTH,13"; 
	} elseif ($n <= 3462) {
		echo "SOUTH,12";
	} elseif ($n <= 3492) {
		echo "SOUTH,11";
	}
	else
		echo "SOUTH,10";
}

function PJ ($n) {
	if ($n <= 3701) {
		echo "SOUTH,10";
	} elseif ($n < 5024) {
		echo "SOUTH,9";
	} elseif ($n < 5055) {
		echo "SOUTH,8";
	} elseif ($n < 7814) {
		echo "SOUTH,7";
	}
	else
		echo "SOUTH,6";
}

function PI ($n) {
	echo "SOUTH,1";
}

function PK ($n) {
	if ($n <= 1730) {
		echo "SOUTH,5"; 
	} elseif ($n <= 2165) {
		echo "SOUTH,4";
	} elseif ($n <= 2418) {
		echo "SOUTH,3";
	} elseif ($n <= 3621) {
		echo "SOUTH,2";
	} elseif ($n <= 5013) {
		echo "MIDDLE,1";
	}
	else
		echo "MIDDLE,2";
}

function PL ($n) {
	if ($n <= 2442) {
		echo "NORTH,2"; 
	} elseif ($n <= 4758) {
		echo "MIDDLE,2";
	}
	else
		echo "NORTH,3";
}

function PM ($n) {
	if ($n <= 6301) {
		echo "MIDDLE,3";
	} else 
		echo "NORTH,3";
}

function PN ($n) {
	if ($n <= 80) {
		echo "NORTH,4";
	} elseif ($n <= 147) {
		echo "MIDDLE,4";
	} elseif ($n <= 1849) {
		echo "NORTH,5";
	} elseif ($n <= 1991) {
		echo "MIDDLE,5";
	} elseif ($n <= 1998) {
		echo "NORTH,6";
	} elseif ($n <= 2919) {
		echo "MIDDLE,6";
	} elseif ($n <= 4105) {
		echo "NORTH,7";
	} elseif ($n <= 6149) {
		echo "NORTH,8";
	}
	else
		echo "MIDDLE,7";
}

function PQ ($n) {
	if ($n < 1812) {
		echo "NORTH,8"; 
	} elseif ($n <= 1812) {
		echo "NORTH,9";
	} elseif ($n <= {
		echo "MIDDLE,8"
	} elseif ($n <= 2391) {
		echo "MIDDLE,9";
	} elseif ($n <= 2603) {
		echo "NORTH,10";
	} elseif ($n <= 2662) {
		echo "MIDDLE,10";
	} elseif ($n <= 2673) {
		echo "NORTH,11";
	} elseif ($n <= 4098) {
		echo "MIDDLE,11";
	} elseif ($n <= 4332) {
		echo "NORTH,12";
	} elseif ($n <= 4841) {
		echo "MIDDLE,12";
	} elseif ($n <= 4901) {
		echo "NORTH,13";
	} elseif ($n <= 6436) {
		echo "MIDDLE,13";
	} elseif ($n <= 6603) {
		echo "NORTH,14";
	} elseif ($n < 7082) {
		echo "MIDDLE,14";
	} elseif ($n < 7298) {
		echo "NORTH,15";
	} elseif ($n < 7798) {
		echo "MIDDLE,15";
	} elseif ($n <= 9098) {
		echo "NORTH,16";
	}
	else
		echo "MIDDLE,16";
}

function PR ($n) {
	if ($n < 275) {
		echo "NORTH,17";
	} elseif ($n < 730) {
		echo "MIDDLE,16";
	} elseif ($n < 1119) {
		echo "MIDDLE,17";
	} elseif ($n <= 1309) {
		echo "NORTH,18";
	} elseif ($n < 2935) {
		echo "MIDDLE,18";
	} elseif ($n <= 3346) {
		echo "NORTH,19";
	} elseif ($n < 4300) {
		echo "MIDDLE,19";
	} elseif ($n <= 4984) {
		echo "NORTH,20";
	} elseif ($n < 5403) {
		echo "MIDDLE,20";
	} elseif ($n <= 5869) {
		echo "NORTH,21";
	} elseif ($n < 6027) {
		echo "MIDDLE,21";
	} elseif ($n <= 6045) {
		echo "NORTH,22";
	} elseif ($n < 6063) {
		echo "MIDDLE,22";
	} elseif ($n <= 6070) {
		echo "NORTH,23";
	} elseif ($n < 9369) {
		echo "MIDDLE,23";
	}
	else
		echo "NORTH,24";
}

function PS ($n) {
	if ($n < 69) {
		echo "MIDDLE,24";
	} elseif ($n <= 423) {
		echo "NORTH,25";
	} elseif ($n < 648) {
		echo "MIDDLE,25";
	} elseif ($n <= 1300) {
		echo "NORTH,26";
	} elseif ($n < 2410) {
		echo "MIDDLE,26";
	} elseif ($n <= 3281) {
		echo "NORTH,27";
	} elseif ($n < 3511) {
		echo "MIDDLE,27";
	} elseif ($n <= 3517) {
		echo "NORTH,28";
	} elseif ($n < 3537) {
		echo "MIDDLE,33";
	} elseif ($n <= 3545) {
		echo "NORTH,35";
	} elseif ($n < 3554) {
		echo "MIDDLE,34";
	} elseif ($n <= 3556) {
		echo "NORTH,36";
	} elseif ($n < 3562) {
		echo "MIDDLE,35";
	} elseif ($n <= 3563) {
		echo "NORTH,37";
	} elseif ($n < 3569) {
		echo "MIDDLE,36";
	} elseif ($n < 3573) {
		echo "NORTH,38";
	} elseif ($n < 3609) {
		echo "MIDDLE,37";
	} elseif ($n <= 3613) {
		echo "NORTH,39";
	}
	else
		echo "MIDDLE,38";
}

function PT ($n) {
	if ($n <= 67) {
		echo "MIDDLE,38";
	} elseif ($n < 217) {
		echo "MIDDLE,39";
	} elseif ($n <= 304) {
		echo "NORTH,40";
	} elseif ($n < 1258) {
		echo "MIDDLE,40";
	} elseif ($n <= 1419) {
		echo "NORTH,41";
	} elseif ($n < 1891) {
		echo "MIDDLE,41";
	}
	else
		echo "NORTH,42";
}

function Z ($n) {
	if ($n < 120) {
		echo "MIDDLE,28";
	} elseif ($n <= 266) {
		echo "NORTH,29";
	} elseif ($n < 695) {
		echo "MIDDLE,29";
	} elseif ($n <= 798) {
		echo "NORTH,30";
	} elseif ($n <= 1201) {
		echo "NORTH,31";
	} elseif ($n < 2537) {
		echo "MIDDLE,30";
	} elseif ($n <= 3201) {
		echo "NORTH,32";
	} elseif ($n < 6611) {
		echo "MIDDLE,31";
	} elseif ($n <= 6621) {
		echo "NORTH,33";
	} elseif ($n < 8430) {
		echo "MIDDLE,32";
	}
	else
		echo "NORTH,34";
}

function ZA ($n) {
	echo "NORTH,34";}
}
?>