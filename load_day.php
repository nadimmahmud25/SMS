<?php
$total_day_in_day=cal_days_in_month(CAL_GREGORIAN, $_GET[month], $_GET[year]);
for($i=1;$i<=$total_day_in_day;$i++){
echo "<option>$i</option>";
}
?>