<?php



function numberofdays ( $firstdate, $lastdate )
{

    $checkin = date_create($firstdate);
    $checkout = date_create($lastdate);
    $diff=date_diff($checkin,$checkout);
    $n = $diff->format('%d');
    return $n;
}


echo numberofdays("10-04-2019","20-04-2019");



?>