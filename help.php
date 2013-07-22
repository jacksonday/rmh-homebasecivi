<?PHP
	session_start();
	session_cache_expire(30);
?>
<!-- page generated by the BowdoinRMH software package -->
<html>
	<head>
		<title>
			Help - <?PHP echo($_GET['helpPage']); ?>
		</title>
		<link rel="stylesheet" href="tutorial/styles.css" type="text/css" />
	</head>

	<body>
		<div id="container">
			<?PHP include('header.php');?>
			<div id="content">
				<div align="center"><p><a href="?">Help Home</a></p></div>

				<?PHP
					//This array associates pages a person might be viewing
					//with the help page we assume they want. Note: it might be important
					//for each page to include within it a link to the 'home help' website
					//to allow us to get them to material somewhere else they might want.
					//you can guarantee a link to the home site by simply linking to
					//help.php with no variable passed through the GET method.

					//basic pages
					$assocHelp['login.php']='login.inc.php';
					$assocHelp['index.php']='index.inc.php';
					$assocHelp['about.php']='index.inc.php';

					//person editing, searching, viewing
					$assocHelp['searchPeople.php']='searchPersonHelp.inc.php';
					$assocHelp['edit.php']='editPersonHelp.inc.php';
					$assocHelp['rmh.php']='addPersonHelp.inc.php';
					$assocHelp['viewPerson.php']='viewPersonHelp.inc.php';

					//schedule managing
					$assocHelp['calendar.php']='viewCalendarHelp.inc.php';
					$assocHelp['viewCalendar.php']='viewCalendarHelp.inc.php';
					$assocHelp['addWeek.php']='manageCalendarHelp.inc.php';
					$assocHelp['generateWeek.php']='generateWeekHelp.inc.php';
					$assocHelp['addNotes.php']='calendarNotesHelp.inc.php';
					$assocHelp['editShift.php']='editShiftHelp.inc.php';
					$assocHelp['addSlotToShift.php']='addSlotToShiftHelp.inc.php';
					$assocHelp['assignToShift.php']='assignToShiftHelp.inc.php';
					$assocHelp['removeFromShift.php']='removeFromShiftHelp.inc.php';
					$assocHelp['subCallList.php']='subCallListHelp.inc.php';
					$assocHelp['masterSchedule.php']='schedulingHelp.inc.php';

					//personal home page
					$assocHelp['index.php']='indexHelp.inc.php';


					//Now if we have an undefined array value for the key they've passed us
					//what happens? This means that the page they're looking for help on doesn't have a
					//specific help page we defined above. So we pass them to the index page to see if they can find help from there.
					if(!$assocHelp[$_GET['helpPage']])
						$assocHelp[$_GET['helpPage']]='index.inc.php';

					//now this line actually snags the tutorial data they're requesting and displays it.
					include('tutorial/'.$assocHelp[$_GET['helpPage']]);
				?>

				
			</div>
		<?PHP include('helpFooter.inc');?>
		</div>
	</body>
</html>
