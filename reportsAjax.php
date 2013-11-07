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
	//pull_shift_data()
	$names = $_POST['volunteer-names'];
	$from = "";
	$to = "";
	if($_POST['date'] != "") {
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
	error_log($from);
	error_log($to);
	//error_log(''.$_POST['from']);
	//error_log(''.$_POST['to']);
	report_by_volunteer_names($names, $from, $to);
	//foreach ($_POST['report-types'] as $t) error_log(''.$t);
	//error_log(''.$_POST['volunteer-name']);
}

function report_by_volunteer_names($names, $from, $to) {
	$the_persons = array();
	foreach ($names as $name) $the_persons = array_merge($the_persons, retrieve_persons_by_name($name));
	$reports = array();
	$names = array();
	foreach ($the_persons as $p) {
		if ($p != null) {
			$names[] = $p->get_first_name() . " " . $p->get_last_name();
			$reports[] = $p->hours_report($from, $to);
		}
	}
	echo display_table_reports($names, $reports);
	
}

function display_table_reports ($names, $reports) {
	$res = "
		<table id = 'hours-report'> 
			<thead>
			<tr>
				<th>Name</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
				<th>Sunday</th>
				<th>Total</th>
			</tr>
			</thead>
			<tbody>
	";
	for ($i = 0; $i < count($reports); $i++) $res .= display_table_report($names[$i], $reports[$i]);
	$res = $res . "</tbody></table>";
	return $res;
}

function display_table_report ($name, $report) {

	$row = "<tr>";
	$row .= "<td>" . $name . "</td>";
	$total = 0;
	foreach($report as $hours) {
		$total += $hours;
		$row .= "<td>" . $hours. "</td>";	
	}
	$row .= "<td>".$total."</td>";
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