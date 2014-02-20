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

/*
 * 	reports.inc.php
 *   shows a form to search for a data object
 * 	@author Jerrick Hoang
 * 	@version 11/5/2013
 */
?>
<link
	rel="stylesheet" href="lib/jquery-ui.css" />
<script
	src="lib/jquery-ui.js"></script>
<script
	src="reports.js"></script>
	
<link rel="stylesheet" href="reports.css" type="text/css" />
<div id = "content">
<div id = "report-table">
	<div id="search-fields-container">
	<form id = "search-fields" method="post">
		<input type="hidden" name="_form_submit" value="report" />
		<div class = "search-description" id="today"> Today is <?php echo Date("l F d, Y");?></div>
		<div class = "search-description"> Report Type</div>
		<div >
			<select multiple name="report-types[]" id = "report-type">
	  		<option value="volunteer-names">Individual Volunteer Hours</option>
	  		<option value="volunteer-hours">Total Volunteer Hours</option>
	  		<option value="shifts-staffed-vacant">Shifts/Vacancies</option>
			</select>
		</div>
		<div class = "search-description" >
			<span>Volunteer name(s)</span>
			<button id="add-more">add more</button>
		</div>
		<div id="volunteer-name-inputs">
			<div class="ui-widget"> <input type="text" name="volunteer-names[]" class="volunteer-name" id="1"></div>
		</div>
		<div class = "search-description"> Date</div>
		<div>
			<input type="radio" name="date" value="last-week">Last Week<br>
			<input type="radio" name="date" value="last-month">Last Month<br>
			<input type="radio" name="date" value="date-range">Date Range
			<div id="fromto"> from : <input name = "from" type="text" id="from"> 
								to : <input name = "to" type="text" id="to"></div>
		</div>
		<div><input type="submit" value="submit" id ="report-submit" class ="btn"s></div>
	</form>
	</div>
	<div id="outputs">

	</div>
</div>
</div>
