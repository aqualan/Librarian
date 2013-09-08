<?php	

function P ($n) {
	if ($n <= 1) {
		return "southern,28";
	} elseif ($n <= 25) {
		return "southern,27";
	} elseif ($n <= 51) {
		return "southern,26";
	} elseif ($n <= 105) {
		return "southern,25";
	} elseif ($n <= 211) {
		return "southern,24";
	}
	else
		return "southern,23";
}

function PA ($n) {
	if ($n <= 56) {
		return "southern,22"; 
	} elseif ($n <= 3539) {
		return "southern,21";
	} elseif ($n <= 5000) {
		return "southern,20";
	}
	else
		return "southern,19";
}

function PB ($n) {
	return "southern,18";
}

function PC ($n) {
	if ($n < 1074) {
		return "southern,18";
	} elseif ($n <= 2625) {
		return "southern,17";
	} else
		return "southern,16";
}
function PD ($n) {
	return "southern,16";
}

function PE ($n) {
	return "southern,15";
}

function PF ($n) {
	return "southern,14";
}

function PG ($n) {
	if ($n <= 2947) {
		return "southern,13"; 
	} elseif ($n <= 3462) {
		return "southern,12";
	} elseif ($n <= 3492) {
		return "southern,11";
	}
	else
		return "southern,10";
}

function PJ ($n) {
	if ($n <= 3701) {
		return "southern,10";
	} elseif ($n < 5024) {
		return "southern,9";
	} elseif ($n < 5055) {
		return "southern,8";
	} elseif ($n < 7814) {
		return "southern,7";
	}
	else
		return "southern,6";
}

function PII ($n) {
	return "southern,1";
}

function PK ($n) {
	if ($n <= 1730) {
		return "southern,5"; 
	} elseif ($n <= 2165) {
		return "southern,4";
	} elseif ($n <= 2418) {
		return "southern,3";
	} elseif ($n <= 3621) {
		return "southern,2";
	} elseif ($n <= 5013) {
		return "middle,1";
	}
	else
		return "middle,2";
}

function PL ($n) {
	if ($n <= 2442) {
		return "northern,2"; 
	} elseif ($n <= 4758) {
		return "middle,2";
	}
	else
		return "northern,3";
}

function PM ($n) {
	if ($n <= 6301) {
		return "middle,3";
	} else 
		return "northern,3";
}

function PN ($n) {
	if ($n <= 80) {
		return "northern,4";
	} elseif ($n <= 147) {
		return "middle,4";
	} elseif ($n <= 1849) {
		return "northern,5";
	} elseif ($n <= 1991) {
		return "middle,5";
	} elseif ($n <= 1998) {
		return "northern,6";
	} elseif ($n <= 2919) {
		return "middle,6";
	} elseif ($n <= 4105) {
		return "northern,7";
	} elseif ($n <= 6149) {
		return "northern,8";
	}
	else
		return "middle,7";
}

function PQ ($n) {
	if ($n < 1812) {
		return "northern,8"; 
	} elseif ($n <= 1812) {
		return "northern,9";
	} elseif ($n <= 1912) {
		return "middle,8";
	} elseif ($n <= 2391) {
		return "middle,9";
	} elseif ($n <= 2603) {
		return "northern,10";
	} elseif ($n <= 2662) {
		return "middle,10";
	} elseif ($n <= 2673) {
		return "northern,11";
	} elseif ($n <= 4098) {
		return "middle,11";
	} elseif ($n <= 4332) {
		return "northern,12";
	} elseif ($n <= 4841) {
		return "middle,12";
	} elseif ($n <= 4901) {
		return "northern,13";
	} elseif ($n <= 6436) {
		return "middle,13";
	} elseif ($n <= 6603) {
		return "northern,14";
	} elseif ($n < 7082) {
		return "middle,14";
	} elseif ($n < 7298) {
		return "northern,15";
	} elseif ($n < 7798) {
		return "middle,15";
	} elseif ($n <= 9098) {
		return "northern,16";
	}
	else
		return "middle,16";
}

function PR ($n) {
	if ($n < 275) {
		return "northern,17";
	} elseif ($n < 730) {
		return "middle,16";
	} elseif ($n < 1119) {
		return "middle,17";
	} elseif ($n <= 1309) {
		return "northern,18";
	} elseif ($n < 2935) {
		return "middle,18";
	} elseif ($n <= 3346) {
		return "northern,19";
	} elseif ($n < 4300) {
		return "middle,19";
	} elseif ($n <= 4984) {
		return "northern,20";
	} elseif ($n < 5403) {
		return "middle,20";
	} elseif ($n <= 5869) {
		return "northern,21";
	} elseif ($n < 6027) {
		return "middle,21";
	} elseif ($n <= 6045) {
		return "northern,22";
	} elseif ($n < 6063) {
		return "middle,22";
	} elseif ($n <= 6070) {
		return "northern,23";
	} elseif ($n < 9369) {
		return "middle,23";
	}
	else
		return "northern,24";
}

function PS ($n) {
	if ($n < 69) {
		return "middle,24";
	} elseif ($n <= 423) {
		return "northern,25";
	} elseif ($n < 648) {
		return "middle,25";
	} elseif ($n <= 1300) {
		return "northern,26";
	} elseif ($n < 2410) {
		return "middle,26";
	} elseif ($n <= 3281) {
		return "northern,27";
	} elseif ($n < 3511) {
		return "middle,27";
	} elseif ($n <= 3517) {
		return "northern,28";
	} elseif ($n < 3537) {
		return "middle,33";
	} elseif ($n <= 3545) {
		return "northern,35";
	} elseif ($n < 3554) {
		return "middle,34";
	} elseif ($n <= 3556) {
		return "northern,36";
	} elseif ($n < 3562) {
		return "middle,35";
	} elseif ($n <= 3563) {
		return "northern,37";
	} elseif ($n < 3569) {
		return "middle,36";
	} elseif ($n < 3573) {
		return "northern,38";
	} elseif ($n < 3609) {
		return "middle,37";
	} elseif ($n <= 3613) {
		return "northern,39";
	}
	else
		return "middle,38";
}

function PT ($n) {
	if ($n <= 67) {
		return "middle,38";
	} elseif ($n < 217) {
		return "middle,39";
	} elseif ($n <= 304) {
		return "northern,40";
	} elseif ($n < 1258) {
		return "middle,40";
	} elseif ($n <= 1419) {
		return "northern,41";
	} elseif ($n < 1891) {
		return "middle,41";
	}
	else
		return "northern,42";
}

function Z ($n) {
	if ($n < 120) {
		return "middle,28";
	} elseif ($n <= 266) {
		return "northern,29";
	} elseif ($n < 695) {
		return "middle,29";
	} elseif ($n <= 798) {
		return "northern,30";
	} elseif ($n <= 1201) {
		return "northern,31";
	} elseif ($n < 2537) {
		return "middle,30";
	} elseif ($n <= 3201) {
		return "northern,32";
	} elseif ($n < 6611) {
		return "middle,31";
	} elseif ($n <= 6621) {
		return "northern,33";
	} elseif ($n < 8430) {
		return "middle,32";
	}
	else
		return "northern,34";
}

function ZA ($n) {
	return "northern,34";
}

?>
