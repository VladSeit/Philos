<?php
// Set your timezone
date_default_timezone_set('Europe/Berlin');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
 // Today
$today = date('Y-m-j', time()); 
// For H1 title
$months = array(
    "Januar",
    "Februar",
    "Marz",
    "April",
    "Mai",
    "Juni",
    "Juli",
    "August",
    "September",
    "Oktober",
    "November",
    "Dezember",);   
$html_date_h1 = $months[date('n', $timestamp)-1];
$html_date_p = date('Y', $timestamp);

$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

$day_count = date('t', $timestamp);
$num_days_last_month = date('j', strtotime('last day of previous month',$timestamp ));

$first_day_of_week = date('N', $timestamp)-1;
$last_day_month = date('N', strtotime('last day of ', $timestamp));

// Create Calendar!!
$days= '';

    for ($i = $first_day_of_week; $i > 0; $i--) {
       $days .= '<div class="prev-date"> '. ($num_days_last_month-$i+1).' </div>' ;
    }
    for ($i = 1; $i <= $day_count; $i++) {
        $date = $ym . '-' . $i;
        if ( $today == $date) {
            $days .= '<div class="today">'.$i . ' </div>    ';
        }else{
            $days .='<div>'.$i.'</div>';
        }
    }
    for ($i = 1; $i <= 7- $last_day_month ; $i++) {
        $days .= '<div class="next-date">' . $i . '</div>';
    } 
?>