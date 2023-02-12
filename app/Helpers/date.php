<?php

use Carbon\Carbon;


function currentDate($dates){
    return Carbon::createFromFormat('d-m-Y', $dates)->toDateTimeString();
}

function initiation(){
    $date = Carbon::now(new DateTimeZone('America/Bogota'));
    return ucwords($date->format('M d,Y'));
}

function blog_date($dates): string {
$date = Carbon::parse($dates);
return ucwords($date->format('Y'));
}

function humanize_month($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('Y'));
}

function humanize_day($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('j'));
}

function humanize_time($dates): string {
  $dates = Carbon::parse($dates);
  return date_format($dates, 'g:i A');
}

function humanize_date($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('Y-m-d'));
}

function humanize_year($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('Y'));
}

function date_invoices($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('M d,Y'));
}

function date_offers($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('M d,Y'));
}

function date_activity($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('M d,Y'));
}

function time_activity($dates): string {
    $dates = Carbon::parse($dates);
    return date_format($dates, 'g:i A');
}

  
function input_date($dates): string {
    $date = Carbon::parse($dates);
    return ucwords($date->format('Y-m-d'));
}

function input_time($time): string {
  $date = Carbon::parse($time);
  return date_format($date, 'g:i A');
}

function number_month($n) {

    if ($n <= 1) {
        $n_month = "Mes";
        $n_format = $n." ".$n_month;
    } else if ($n < 999) {
        $n_month = "Meses";
        $n_format = $n." ".$n_month;
    } 

    return $n_format;
}



function number_requests($n) {

    if ($n < 10) {
        $n_zero = str_repeat( '0', 7);
        $n_format = $n_zero . $n;
    } else if ($n < 99) {
        $n_zero = str_repeat( '0', 6);
        $n_format = $n_zero . $n;
    } else if ($n < 999) {
        $n_zero = str_repeat( '0', 5);
        $n_format = $n_zero . $n;
    } else if ($n < 9999) {
        $n_zero = str_repeat( '0', 4);
        $n_format = $n_zero . $n;
    } else if ($n < 99999) {
        $n_zero = str_repeat( '0', 3);
        $n_format = $n_zero . $n;
    } else if ($n < 999999) {
        $n_zero = str_repeat( '0', 2);
        $n_format = $n_zero . $n;
    } else if ($n < 9999999) {
        $n_zero = str_repeat( '0', 1);
        $n_format = $n_zero . $n;
    } else if ($n < 99999999) {
        $n_zero = str_repeat( '0', 1);
        $n_format = $n_zero . $n;
    }

    $dotzero = 'SO';
    $n_format = $dotzero.$n_format;

    return $n_format;
}


function number_offers($n) {

    if ($n < 10) {
        $n_zero = str_repeat( '0', 7);
        $n_format = $n_zero . $n;
    } else if ($n < 99) {
        $n_zero = str_repeat( '0', 6);
        $n_format = $n_zero . $n;
    } else if ($n < 999) {
        $n_zero = str_repeat( '0', 5);
        $n_format = $n_zero . $n;
    } else if ($n < 9999) {
        $n_zero = str_repeat( '0', 4);
        $n_format = $n_zero . $n;
    } else if ($n < 99999) {
        $n_zero = str_repeat( '0', 3);
        $n_format = $n_zero . $n;
    } else if ($n < 999999) {
        $n_zero = str_repeat( '0', 2);
        $n_format = $n_zero . $n;
    } else if ($n < 9999999) {
        $n_zero = str_repeat( '0', 1);
        $n_format = $n_zero . $n;
    } else if ($n < 99999999) {
        $n_zero = str_repeat( '0', 1);
        $n_format = $n_zero . $n;
    }

    $dotzero = 'OF';
    $n_format = $dotzero.$n_format;

    return $n_format;
}



    function number_amount( $n, $precision = 5 ) {
        if ($n < 900) {
            // 0 - 900
            $n_format = number_format($n, $precision);
            $suffix = '';
        } else if ($n < 900000) {
            // 0.9k-850k
            $n_format = number_format($n , $precision);
            $suffix = '';
        } else if ($n < 900000000) {
            // 0.9m-850m
            $n_format = number_format($n , $precision);
            $suffix = '';
        } else if ($n < 900000000000) {
            // 0.9b-850b
            $n_format = number_format($n , $precision);
            $suffix = '';
        } else {
            // 0.9t+
            $n_format = number_format($n , $precision);
            $suffix = '';
        }
        // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
        // Intentionally does not affect partials, eg "1.50" -> "1.50"
        if ( $precision > 0 ) {
            $dotzero = '.' . str_repeat( '0', $precision );
            $n_format = str_replace( $dotzero, '', $n_format );
        }
        return $n_format . $suffix;
    }

if (! function_exists('skip_zero_array_filter')) {
    function skip_zero_array_filter($var){
        return ($var !== NULL && $var !== FALSE && $var !== '');
    }
}

if (! function_exists('generate_date_range')) {
    function generate_date_range($start, $end, $step = '+1 day', $format = 'Y-m-d'){
        $dates = [];

        $current = strtotime( $start );
        $last = strtotime( $end );

        while( $current <= $last ) {

            $dates[] = date( $format, $current );
            $current = strtotime( $step, $current );
        }

        return $dates;
    }
}

?>