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
	<strong>How to View the Calendar</strong>
<p>
	<B>Step 1:</B> On the navigation bar at the top of the page, find <B>calendar:</B>
	and select <B>view</B>, like this:<BR> <BR> <a
		href="tutorial/screenshots/viewcalendarstep1.gif" class="image"
		title="viewcalendarStep1.png" horizontalalign="center"
		target="tutorial/screenshots/viewcalendarstep1.gif">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/viewcalendarstep1.gif" width="10%"
		rel="popover" data-img="tutorial/screenshots/viewcalendarstep1.gif"
		border="1px" align="center"> </a>
<p>
	<B>Step 2:</B> You should now see a page with this week's calendar of
	scheduled shifts. Each shift's scheduled voluteers and vacancies appear
	here, like this:<BR> <BR> <a
		href="tutorial/screenshots/viewcalendarstep2.gif" class="image"
		title="viewcalendarStep2.png"
		target="tutorial/screenshots/viewcalendarstep2.gif">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/viewcalendarstep2.gif" width="10%"
		rel="popover" data-img="tutorial/screenshots/viewcalendarstep2.gif"
		border="1px" align="middle"> </a> <BR> &nbsp&nbsp&nbsp NOTE: this page
	only lets you view the information; it does not allow editing. If you
	wish to edit the calendar, find <B>calendar:</B> and select <B>manage</B>.<BR>
	<BR>
<p>
	<B>Step 3:</B> You can view the calendar schedule for future and
	previous weeks by selecting the <strong>Next Week &gt&gt</strong> or <strong>&lt&lt
		Previous Week</strong> button on the top right or left corner of the
	calendar, like this:<BR> <BR> <a
		href="tutorial/screenshots/viewcalendarstep3.gif" class="image"
		title="viewcalendarStep3.png"
		target="tutorial/screenshots/viewcalendarstep3.gif">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/viewcalendarstep3.gif" width="10%"
		rel="popover" data-img="tutorial/screenshots/viewcalendarstep3.gif"
		border="1px" align="middle"> </a>
<p>
	<B>Step 4:</B> You can return to any other function by selecting it on
	the navigation bar.