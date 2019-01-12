<?php
/**
 * Fetches today's current hours for the homepage.
 * @author Faizaan A. Datoo
 */

$activity_hours = array(
    "Sunday" => "8:00a - 10:00p",
    "Monday" => "12:00p - 10:00p",
    "Tuesday" => "12:00p - 10:00p",
    "Wednesday" => "12:00p - 10:00p",
    "Thursday" => "12:00p - 10:00p",
    "Friday" => "12:00p - 10:00p",
    "Saturday" => "8:00a - 12:00a"
);


function day_of_week()
{
    return jddayofweek(cal_to_jd(CAL_GREGORIAN, date("m"), date("d"), date("Y")), 1);
}

function activity_hours() {
    global $activity_hours;
    return $activity_hours[day_of_week()];
}

function party_hours() {
    global $party_hours;
    return $party_hours[day_of_week()];
}

function snack_bar_hours() {
    global $snack_bar_hours;
    return $snack_bar_hours[day_of_week()];
}