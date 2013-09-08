<?php	

function P ($n) {
	if ($n <= 1) {
		echo "southern,28";
	} elseif ($n <= 25) {
		echo "southern,27";
	} elseif ($n <= 51) {
		echo "southern,26";
	} elseif ($n <= 105) {
		echo "southern,25";
	} elseif ($n <= 211) {
		echo "southern,24";
	}
	else
		echo "southern,23";
}

function PA ($n) {
	if ($n <= 56) {
		echo "southern,22"; 
	} elseif ($n <= 3539) {
		echo "southern,21";
	} elseif ($n <= 5000) {
		echo "southern,20";
	}
	else
		echo "southern,19";
}

function PB ($n) {
	echo "southern,18";
}

function PC ($n) {
	if ($n < 1074) {
		echo "southern,18";
	} elseif ($n <= 2625) {
		echo "southern,17";
	} else
		echo "southern,16";
}
function PD ($n) {
	echo "southern,16";
}

function PE ($n) {
	echo "southern,15";
}

function PF ($n) {
	echo "southern,14";
}

function PG ($n) {
	if ($n <= 2947) {
		echo "southern,13"; 
	} elseif ($n <= 3462) {
		echo "southern,12";
	} elseif ($n <= 3492) {
		echo "southern,11";
	}
	else
		echo "southern,10";
}

function PJ ($n) {
	if ($n <= 3701) {
		echo "southern,10";
	} elseif ($n < 5024) {
		echo "southern,9";
	} elseif ($n < 5055) {
		echo "southern,8";
	} elseif ($n < 7814) {
		echo "southern,7";
	}
	else
		echo "southern,6";
}

function PII ($n) {
	echo "southern,1";
}

function PK ($n) {
	if ($n <= 1730) {
		echo "southern,5"; 
	} elseif ($n <= 2165) {
		echo "southern,4";
	} elseif ($n <= 2418) {
		echo "southern,3";
	} elseif ($n <= 3621) {
		echo "southern,2";
	} elseif ($n <= 5013) {
		echo "middle,1";
	}
	else
		echo "middle,2";
}

function PL ($n) {
	if ($n <= 2442) {
		echo "northern,2"; 
	} elseif ($n <= 4758) {
		echo "middle,2";
	}
	else
		echo "northern,3";
}

function PM ($n) {
	if ($n <= 6301) {
		echo "middle,3";
	} else 
		echo "northern,3";
}

function PN ($n) {
	if ($n <= 80) {
		echo "northern,4";
	} elseif ($n <= 147) {
		echo "middle,4";
	} elseif ($n <= 1849) {
		echo "northern,5";
	} elseif ($n <= 1991) {
		echo "middle,5";
	} elseif ($n <= 1998) {
		echo "northern,6";
	} elseif ($n <= 2919) {
		echo "middle,6";
	} elseif ($n <= 4105) {
		echo "northern,7";
	} elseif ($n <= 6149) {
		echo "northern,8";
	}
	else
		echo "middle,7";
}

function PQ ($n) {
	if ($n < 1812) {
		echo "northern,8"; 
	} elseif ($n <= 1812) {
		echo "northern,9";
	} elseif ($n <= 1912) {
		echo "middle,8";
	} elseif ($n <= 2391) {
		echo "middle,9";
	} elseif ($n <= 2603) {
		echo "northern,10";
	} elseif ($n <= 2662) {
		echo "middle,10";
	} elseif ($n <= 2673) {
		echo "northern,11";
	} elseif ($n <= 4098) {
		echo "middle,11";
	} elseif ($n <= 4332) {
		echo "northern,12";
	} elseif ($n <= 4841) {
		echo "middle,12";
	} elseif ($n <= 4901) {
		echo "northern,13";
	} elseif ($n <= 6436) {
		echo "middle,13";
	} elseif ($n <= 6603) {
		echo "northern,14";
	} elseif ($n < 7082) {
		echo "middle,14";
	} elseif ($n < 7298) {
		echo "northern,15";
	} elseif ($n < 7798) {
		echo "middle,15";
	} elseif ($n <= 9098) {
		echo "northern,16";
	}
	else
		echo "middle,16";
}

function PR ($n) {
	if ($n < 275) {
		echo "northern,17";
	} elseif ($n < 730) {
		echo "middle,16";
	} elseif ($n < 1119) {
		echo "middle,17";
	} elseif ($n <= 1309) {
		echo "northern,18";
	} elseif ($n < 2935) {
		echo "middle,18";
	} elseif ($n <= 3346) {
		echo "northern,19";
	} elseif ($n < 4300) {
		echo "middle,19";
	} elseif ($n <= 4984) {
		echo "northern,20";
	} elseif ($n < 5403) {
		echo "middle,20";
	} elseif ($n <= 5869) {
		echo "northern,21";
	} elseif ($n < 6027) {
		echo "middle,21";
	} elseif ($n <= 6045) {
		echo "northern,22";
	} elseif ($n < 6063) {
		echo "middle,22";
	} elseif ($n <= 6070) {
		echo "northern,23";
	} elseif ($n < 9369) {
		echo "middle,23";
	}
	else
		echo "northern,24";
}

function PS ($n) {
	if ($n < 69) {
		echo "middle,24";
	} elseif ($n <= 423) {
		echo "northern,25";
	} elseif ($n < 648) {
		echo "middle,25";
	} elseif ($n <= 1300) {
		echo "northern,26";
	} elseif ($n < 2410) {
		echo "middle,26";
	} elseif ($n <= 3281) {
		echo "northern,27";
	} elseif ($n < 3511) {
		echo "middle,27";
	} elseif ($n <= 3517) {
		echo "northern,28";
	} elseif ($n < 3537) {
		echo "middle,33";
	} elseif ($n <= 3545) {
		echo "northern,35";
	} elseif ($n < 3554) {
		echo "middle,34";
	} elseif ($n <= 3556) {
		echo "northern,36";
	} elseif ($n < 3562) {
		echo "middle,35";
	} elseif ($n <= 3563) {
		echo "northern,37";
	} elseif ($n < 3569) {
		echo "middle,36";
	} elseif ($n < 3573) {
		echo "northern,38";
	} elseif ($n < 3609) {
		echo "middle,37";
	} elseif ($n <= 3613) {
		echo "northern,39";
	}
	else
		echo "middle,38";
}

function PT ($n) {
	if ($n <= 67) {
		echo "middle,38";
	} elseif ($n < 217) {
		echo "middle,39";
	} elseif ($n <= 304) {
		echo "northern,40";
	} elseif ($n < 1258) {
		echo "middle,40";
	} elseif ($n <= 1419) {
		echo "northern,41";
	} elseif ($n < 1891) {
		echo "middle,41";
	}
	else
		echo "northern,42";
}

function Z ($n) {
	if ($n < 120) {
		echo "middle,28";
	} elseif ($n <= 266) {
		echo "northern,29";
	} elseif ($n < 695) {
		echo "middle,29";
	} elseif ($n <= 798) {
		echo "northern,30";
	} elseif ($n <= 1201) {
		echo "northern,31";
	} elseif ($n < 2537) {
		echo "middle,30";
	} elseif ($n <= 3201) {
		echo "northern,32";
	} elseif ($n < 6611) {
		echo "middle,31";
	} elseif ($n <= 6621) {
		echo "northern,33";
	} elseif ($n < 8430) {
		echo "middle,32";
	}
	else
		echo "northern,34";
}

function ZA ($n) {
	echo "northern,34";
}

?>
