<?php
/*
 * Copyright 2012 by Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan, 
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker. 
 * This program is part of RMH Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).

  @author Judy Yang and Jackson Moniaga
 */
session_start();
session_cache_expire(30);
?>
<html>
    <head>
        <title>
            Calendar viewing
        </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <link rel="stylesheet" href="calendarhouse.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                if (in_array('manager', $_SESSION['type']) || in_array('volunteer', $_SESSION['type'])) {
                	if ($_GET['venue'] == 'house') {
                        include_once('database/dbWeeks.php');
                        include_once('database/dbPersons.php');
                        include_once('database/dbLog.php');
                        include_once 'calendarhouse.inc';
                        
                        // checks to see if in edit mode
                        $edit = $_GET['edit'];
                        if ($edit != "true")
                            $edit = false;
                        else
                            $edit = true;
                        // gets the week to show, if no week then defaults to current week
                        $venue = $_GET['venue'];
                        $weekid = $_GET['id'];
                        if (!$weekid)
                            $weekid = date("m-d-y", time());
                        $week = get_dbWeeks($weekid); // get the week
                        // if invalid week or unpublished week and not a manager
                        if (!$week instanceof Week || $week->get_status() == "unpublished" && $_SESSION['access_level'] < 2) {
                            echo 'This week\'s calendar is not available for viewing. ';
                            if ($_SESSION['access_level'] >= 2)
                                echo ('<a href="addWeek.php?archive=false"> <br> Manage weeks</a>');
                        }
                        else {
                            $days = $week->get_dates();
                            $year = date("Y", time());
                            $doy = date("z", time()) + 1;
                            // if notes were edited, processes notes
                            if (array_key_exists('_submit_check_edit_notes', $_POST) && $_SESSION['access_level'] >= 2) {
                                process_edit_notes($week, $venue, $_POST, $year, $doy);
                                $week = get_dbWeeks($weekid);
                            }
                            // shows the previous week / next week navigation
                            $week_nav = do_week_nav($week, $edit, $venue);
                            echo $week_nav;
                            // prevents archived weeks from being edited by anyone
                            if ($week->get_status() == "archived")
                                $edit = false;
                            echo '<form method="POST">';
                            show_week($days, $week, $edit, $year, $doy, $venue);
                            if ($edit == true && !($days[6]->get_year() < $year || ($days[6]->get_year() == $year && $days[6]->get_day_of_year() < $doy) ) && $_SESSION['access_level'] >= 2)
                                echo "<p align=\"center\"><input type=\"submit\" value=\"Save changes to all notes\" name=\"submit\">";
                            echo '</form>';
                        }
                    }
                    if ($_GET['venue'] == 'parking')
                        echo('<iframe src="https://www.google.com/calendar/embed?src=fdcm5k97is5cag3j76697eg4g4%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                    if ($_GET['venue'] == 'activities')
                        echo('<iframe src="https://www.google.com/calendar/embed?src=s9ot8kn5qmevkqqn596jqqgkig%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                    if ($_GET['venue'] == 'guestchef')
                        echo('<iframe src="https://www.google.com/calendar/embed?src=loveserveddaily%40gmail.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                    //echo('<iframe src="https://www.google.com/calendar/embed?src=c49jhj56uk5kmr08hqk98d7e60%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                }
                else {
                    if (in_array('guestchef', $_SESSION['type']))
                        echo('<iframe src="https://www.google.com/calendar/embed?src=loveserveddaily%40gmail.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                    if (in_array('activities', $_SESSION['type']))
                        echo('<iframe src="https://www.google.com/calendar/embed?src=s9ot8kn5qmevkqqn596jqqgkig%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                    if (in_array('parking', $_SESSION['type']))
                        echo('<iframe src="https://www.google.com/calendar/embed?src=fdcm5k97is5cag3j76697eg4g4%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');
                }
                echo " </div>";
                include('footer.inc');
                ?>      
        </div></div>
    </body>
</html>