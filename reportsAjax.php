<?php 
include_once('database/dbPersons.php');
include_once('domain/Person.php');
$names = getall_volunteer_names();
if (isset($_GET['q'])) {
	show_hint($names);
}

if (isset($_POST['_form_submit']) && $_POST['_form_submit'] == 'report') {
	show_report();
}

function show_report() {

	$names = $_POST['volunteer-names'];
	$from = "";
	$to = "";
	if(isset($_POST['date']) && $_POST['date'] != "") {
		if ($_POST['date'] == "last-week") {
			$from = date("m/d/y", strtotime("last week"));
			$to   = date("m/d/y", strtotime("this week"));
		} else if ($_POST['date'] == "last-month") {
			$from = date("m/d/y", strtotime("last month"));
			$to   = date("m/d/y", strtotime("this month"));
		} else {
			$from = $_POST["from"];
			$to   = $_POST["to"];
		}
	}

	if (isset($_POST['report-types'])) {
		if (in_array('volunteer-names', $_POST['report-types'])) {
			report_by_volunteer_names($names, $from, $to);
		} 
		if (in_array('volunteer-hours', $_POST['report-types'])) {
			report_volunteer_hours_by_day($from, $to);
		}
		if (in_array('shifts-staffed-vacant', $_POST['report-types'])) {
			report_shifts_staffed_vacant_by_day($from, $to);
		}
		
	}

}

function report_by_volunteer_names($names, $from, $to) {
	echo ("<p>Volunteer names and total hours</p>");
	error_log("volunteer names");
	$the_persons = array();
	foreach ($names as $name) $the_persons = array_merge($the_persons, retrieve_persons_by_name($name));
	$reports = array();
	$names = array();
	foreach ($the_persons as $p) {
		if ($p != null) {
			$names[] = $p->get_first_name() . " " . $p->get_last_name();
			$reports[] = $p->report_hours($from, $to);
		}
	}
	echo display_table_reports($names, $reports);
	
}

function report_volunteer_hours_by_day($from, $to) {
	echo ("<p>Volunteer hours by day</p>");
	error_log("volunteer hours");
	$all_volunteers = getall_dbPersons();
	$labels = array(
				"Morning",
				"Early Afternoon",
				"Late Afternoon",
				"Evening",
				"Overnight"
			);
	$reports = report_hours_by_day($all_volunteers, $from, $to);
	echo display_table_reports($labels, $reports);
}

function report_shifts_staffed_vacant_by_day($from, $to) {
	echo ("<p>Shifts staffed/vacant by day</p>");
	error_log("shifts hours");
	$labels = array(
				"Morning",
				"Early Afternoon",
				"Late Afternoon",
				"Evening",
				"Overnight"
			);
	$reports = report_shifts_staffed_vacant($from, $to);
	echo display_table_reports($labels, $reports);
}

function display_table_reports ($labels, $reports) {
	$res = "
		<table id = 'report'> 
			<thead>
			<tr>
				<th></th>
				<th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
				<th>Sat</th>
				<th>Sun</th>
				<th>Total</th>
			</tr>
			</thead>
			<tbody>
	";
	foreach (array_combine($labels, $reports) as $label => $report) $res .= display_table_report($label, $report);
	$res = $res . "</tbody></table>";
	return $res;
}

function display_table_report ($label, $report) {

	$row = "<tr>";
	$row .= "<td>" . $label . "</td>";
	$total = 0;
	foreach($report as $hours) {
		if (is_array($hours)) {
			$hours = implode('/', $hours);
		} else {
			$total += $hours;
		}
		$row .= "<td>" . $hours. "</td>";
	}
	if (isset($total)) $row .= "<td>".$total."</td>";
	$row .= "</tr>";
	return $row;
}

function show_hint($names) {
	$q = $_GET['q'];
	$hint = array();
	if (strlen($q) > 0) {
		for($i=0; $i <count($names); $i++) {
			if (strtolower($q) == strtolower(substr($names[$i], 0, strlen($q)))){
				$hint[] = $names[$i];
			}
		}
	}
	echo json_encode($hint);
}
?>