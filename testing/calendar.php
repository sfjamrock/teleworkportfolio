<?php
function getDaysInMonth($thisYear,$thisMonth)
	{
		$date=getdate(mktime(0,0,0,$thisMonth+1,0,$thisYear));
		return $date["mday"]+1;
	}
//get basic month information and initialize starter values.
function getArrayMonth($datetime){
$dateArray = getdate($datetime);
$mon = $dateArray['mon'];
$year = $dateArray['year'];
$numDaysInMonth = getDaysInMonth($year,$mon);
$week=1;
//for each day, get the current day's information and store in a result array
// for that day, the week and the day of the week.
//finally if that day is the last day of the week, start a new week.
for ($i=1; $i < $numDaysInMonth;$i++){

$timestamp = mktime(0,0,0,$mon,$i,$year);
$dateArray = getdate($timestamp);
$result[$i]=array('wday'=>$dateArray['wday'],'week'=>$week,'timestamp'=>$timestamp);
if ($dateArray['wday']==6){
$week=$week+1;
}
}

return $result;

}
function getHTMLCalendar($datetime){
$arrayCalendar = getArrayMonth($datetime);
echo "<TABLE border='1'>\n";
$week=1;
echo "<tr>";
//add initial padding to month
for ($start=1;$start<=$arrayCalendar[1]['wday'];
$start=$start+1)
echo "<td></td>";
// for each day make a cell with
$lastday=1; //use for end month padding later
foreach ($arrayCalendar as $day => $result) {
//if we change weeks, start a new row
if ($week!=$result['week']){
echo "<td></tr><tr>"; //week row
$week=$result['week'];
}
//start day cell
echo "<td>";
echo "<table>";
echo "<tr><td>";

echo date("D M j Y", $result['timestamp']);
echo "</td></tr>";
echo "<tr><td>";
echo "<input type='time' />";
echo "</td></tr>";
echo "</table>";
echo "</td>\n"; //end day cell
$lastday = $day;
}
//add final padding
for ($start=1;$start<=6-$arrayCalendar[$lastday]['wday'];
$start=$start+1)
echo "<td></td>";

echo "</tr>\n";

echo "</TABLE>\n";
}
getHTMLCalendar(time());

?>
