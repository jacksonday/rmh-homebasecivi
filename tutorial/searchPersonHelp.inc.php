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
	<strong>How to Search for People in the Database</strong>
<p>
	<B>Step 1:</B> On the navigation bar at the top of the page, find <B>volunteers:</B>
	and select <B>search</B>, like this:<BR> <BR> <a
		href="tutorial/screenshots/searchpersonstep1.png" class="image"
		title="searchpersonstep1.png"
		target="tutorial/screenshots/searchpersonstep1.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep1.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep1.png"
		border="1px" align="middle"> </a>
</p>
<p>
	<B>Step 2:</B> You can enter any part of a person's first name or last
	name as a search criterion. For example, a search for "ann" would
	return <B>Ann</B>, <B>Ann</B>a, Di<B>ann</B>e, etc.
<p>
	You can also search for all persons with a particular status, like
	"Active" or "on Applicant".<BR> <BR> <a
		href="tutorial/screenshots/searchpersonstep2.png" class="image"
		title="searchpersonstep2.png" horizontalalign="center"
		target="tutorial/screenshots/searchpersonstep2.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep2.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep2.png"
		border="1px" align="middle"> </a>
</p>
<p>
	Another option is to search for a particular type of people, like "Sub"
	or "Guest Chef".<BR> <BR> <a
		href="tutorial/screenshots/searchpersonstep2-2.png" class="image"
		title="searchpersonstep2-2.png" horizontalalign="center"
		target="tutorial/screenshots/searchpersonstep2-2.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep2-2.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep2-2.png"
		border="1px" align="middle"> </a>
</p>
<p>
	Yet another option is to search by availability. Remember, you can
	always search with more than one criterion. <BR> <BR> <a
		href="tutorial/screenshots/searchpersonstep2-3.png" class="image"
		title="searchpersonstep2-3.png" horizontalalign="center"
		target="tutorial/screenshots/searchpersonstep2-3.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep2-3.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep2-3.png"
		border="1px" align="middle"> </a>
</p>

<p>
	<B>Step 3:</B> After typing your criteria in the appropriate box,
	select the <B>Search</B> button, like this:<BR> <BR> <a
		href="tutorial/screenshots/searchpersonstep3.png" class="image"
		title="searchpersonstep3.png"
		target="tutorial/screenshots/searchpersonstep3.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep3.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep3.png"
		border="1px" align="middle"> </a>
</p>
<p>
	<B>Step 4:</B> Now you will see a list of the names in the database
	that match your search criteria, like this:<BR> <BR> <a
		href="tutorial/screenshots/searchpersonstep4.png" class="image"
		title="searchpersonstep4.png"
		target="tutorial/screenshots/searchpersonstep4.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep4.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep4.png"
		border="1px" align="middle"> </a>
<p>
	Note that the person's phone number will appear next to his/her name: <BR>
	<BR> <a href="tutorial/screenshots/searchpersonstep4-2.png"
		class="image" title="searchpersonstep4.png"
		target="tutorial/screenshots/searchpersonstep4-2.png">
		&nbsp&nbsp&nbsp&nbsp<img
		src="tutorial/screenshots/searchpersonstep4-2.png" width="10%"
		rel="popover" data-img="tutorial/screenshots/searchpersonstep4-2.png"
		border="1px" align="middle"> </a>
</p>
<p>
	If you see the person you want to view or edit, then <B>click on</B>
	that person's name. <br>
<p>
	<B>Step 5:</B> If you don't see what you were looking for, you can try
	again by repeating <B>Step 2</B>. <BR> <BR>
</p>

<p>
	<B>Step 6:</B> When you finish, you can return to any other function by
	selecting it on the navigation bar.