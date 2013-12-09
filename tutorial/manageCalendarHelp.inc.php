<?php
/*
 * Copyright 2013 by Jerrick Hoang, Ivy Xing, Sam Roberts, James Cook,
 * Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan,
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker.
 * This program is part of RMH Homebase, which is free software.  It comes with
 * absolutely no warranty. You can redistribute and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 *
 */
?>

<script src="lib/jquery-1.9.1.js"></script>
<script src="lib/jquery-ui.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script>

<script>
	$(function () {
		$('img[rel=popover]').popover({
			  html: true,
			  trigger: 'hover',
			  placement: 'right',
			  content: function(){return '<img src="'+$(this).data('img') + '" width="60%"/>';}
			});
	});
</script>

<p>
	<strong>Working with the Calendar</strong>
<p>
	The calendar has four different pages, one for each venue: the <strong>House</strong>
	calendar, the <strong>Guest chef</strong> calendar, the <strong>Parking</strong>
	calendar, and the <strong>Activities</strong> calendar. The House and
	Guest Chef calendars show all the persons scheduled to volunteer for
	each shift.
<p>
	<b>Step 1:</b> To begin working with a calendar page, find <B>calendar:</B>
	and select a venue, like <B>House</B>:<BR>
	<BR> <a href="tutorial/screenshots/manageCalendarHelp_choose_house.png"
		class="image" title="manageCalendarHelp_choose_house.png"
		horizontalalign="center"
		target="tutorial/screenshots/manageCalendarHelp_choose_house.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/manageCalendarHelp_choose_house.png"
		rel="popover" data-img="tutorial/screenshots/manageCalendarHelp_choose_house.png"
		width="10%" border="1px" align="center">
	</a>
<p>
	<b>Step 2:</b> You will then see the House volunteer calendar on the
	screen. Here is that calendar for the week beginning November 18, 2013.
	Notice that <b>Vacancies</b> are highlighted for each shift that isn't
	fully staffed.'<BR>
	<BR> <a href="tutorial/screenshots/manageCalendarHelp_vacant_shift.png"
		class="image" title="manageCalendarHelp_vacant_shift.png"
		horizontalalign="center"
		target="tutorial/screenshots/manageCalendarHelp_vacant_shift.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/manageCalendarHelp_vacant_shift.png"
		rel="popover" data-img="tutorial/screenshots/manageCalendarHelp_vacant_shift.png"
		width="10%" border="1px" align="center">
	</a>
<p>
	<B>Step 3:</B> You can view the calendar schedule for future and
	previous weeks by selecting the <strong>Next Week &gt&gt</strong> or <strong>&lt&lt
		Previous Week</strong> button on the top right or left corner of the
	calendar, like this:<BR>
	<BR> <a href="tutorial/screenshots/manageCalendarHelp_next_week.png"
		class="image" title="manageCalendarHelp_next_week.png"
		target="tutorial/screenshots/manageCalendarHelp_next_week.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/manageCalendarHelp_next_week.png"
		rel="popover" data-img="tutorial/screenshots/manageCalendarHelp_next_week.png"
		width="10%" border="1px" align="middle">
	</a>
<p>
	<B>Step 4:</B> To make any calendar changes, you must first select <strong>(edit
		this week)</strong> at the top of the calendar, like this:<BR>
	<BR> <a href="tutorial/screenshots/manageCalendarHelp_edit_week.png"
		class="image" title="manageCalendarHelp_edit_week.png"
		target="tutorial/screenshots/manageCalendarHelp_edit_week.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/manageCalendarHelp_edit_week.png"
		rel="popover" data-img="tutorial/screenshots/manageCalendarHelp_edit_week.png"
		width="10%" border="1px" align="middle">
	</a>
<p>Managers make the following changes on any calendar:
<ul>
	<li><a href="help.php?helpPage=assignToShift.php">Fill a vacancy on any
			upcoming shift.</a>
	</li>
	<li><a href="help.php?helpPage=removeFromShift.php">Remove a volunteer
			from any upcoming shift.</a>
	</li>
	<li><a href="help.php?helpPage=addSlotToShift.php">Add or remove a slot
			from an upcoming shift.</a>
	</li>
	<li><a href="help.php?helpPage=addNotes.php">Add notes to any upcoming
			shift or day.</a>
	</li>
</ul>

<p>
	<B>Step 5:</B> You can return to any other function by selecting it on
	the navigation bar.