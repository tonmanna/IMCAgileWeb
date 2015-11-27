<?php
	function GetParkHour($end, $start) {
		$start 	= new DateTime($start);
		$end 	= new DateTime($end);

		$diff = date_diff($end, $start);

		$hours = $diff->h;
		$hours = $hours + ($diff->days*24);

		$total = intval($hours);

		if(intval($diff->format('%i')) > 0 || intval($diff->format('%s')) > 0) {
			$total++;
		}
		return $total;
	}
?>