<?php
/*
 * Copyright 2012 by Johnny Coster, Jackson Moniaga, Judy Yang, and
 * Allen Tucker.  This program is part of RMH Homebase. RMH Homebase
 * is free software.  It comes with absolutely no warranty. You can
 * redistribute it and/or modify it under the terms of the GNU General
 * Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 */
/*
 * reports page for RMH homebase.
 * @author JerrickHoang Coster
 * @version 11/5/2013
 */
session_start();
session_cache_expire(30);
?>
<html>
<head>
<title>Search for data objects</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
	
</head>
<body>
<div id="container">
<?php 
include_once('header.php'); 
include_once('reports.inc.php');
include_once('database/dbPersons.php');
include_once('domain/Person.php');
?> 
</div>

</body>