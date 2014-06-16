<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../css/menu.css">
        <link rel="stylesheet" type ="text/css" href="../css/calend.css">

        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>
    </head>
    <body>
        <div id="header">
            <!-- Das Logo sowie Profilbild in Header -->
            <img id="logo" src="../Logo.png" width="350" height="100"/>
        </div>
        <!-- Hier das Akkordeon Menü -->
        <nav>
            <ul>
                <li id = "home">
                    <a href="index.php">Home</a>
                </li>
                <li id = "kalender">
                    <a href="calender.php">Kalender</a>
                </li>
                <li id = "projektverwaltung">
                    <a href="#projektverwaltung">Projektverwaltung</a>
                    <ul>
                        <li> 
                        </li>
                    </ul>
                </li>
                <li id = "stories">
                    <a href="stories.php">Stories</a>
                </li>
                <li id = "dokumente">
                    <a href="documents.php">Dokumente</a>
                </li>
            </ul>
        </nav>
        <div id="cal">
        <?php
        
        
      /* draws a calendar */
function draw_calendar($month,$year){

 

     
    
	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}

   $monate = array(1=>"Januar",
                2=>"Februar",
                3=>"M&auml;rz",
                4=>"April",
                5=>"Mai",
                6=>"Juni",
                7=>"Juli",
                8=>"August",
                9=>"September",
                10=>"Oktober",
                11=>"November",
                12=>"Dezember");

$monat = date("n");
$jahr = date("Y");
/* sample usages */
echo '<h2>'.$monate[$monat].' '.$jahr.'</h2>';
echo draw_calendar($monat,$jahr);     
       ?> 
        </div>

</html>
