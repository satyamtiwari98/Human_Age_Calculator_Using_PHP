<?php

date_default_timezone_set("Asia/Calcutta");

$date= $_POST['date'];
$time= $_POST['time'];


if($date>Date('Y-n-j')) {

    echo "Invalid Date Of Birth";

} else if(($date!="")) {

    $date = "$date $time";
    $currentdate = Date('Y-n-j H:i:s'); 
    $date1 = date_create($date);
    $date2 = date_create($currentdate);
    $diff = date_diff($date1,$date2);

    echo $diff -> format("%y Year, %m Month, %d Day, %h Hours, %i Minutes, %s Seconds");

} else {

    echo "Field Is Blank";

}

?>