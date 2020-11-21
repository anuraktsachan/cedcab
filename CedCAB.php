<?php
$cars = $_REQUEST["cars"];
$luggage = $_REQUEST["luggage"];
$pickuplocation = $_REQUEST["pickuplocation"];
$droplocation = $_REQUEST["droplocation"];
$fare = '';
$luggagevalue = '';

$totaldistance = abs($pickuplocation - $droplocation);
echo "Total Distance: " . $totaldistance . ", ";

if ($luggage == '' || $luggage == 0) {
    $luggagevalue = 0;
} elseif (0 < $luggage && $luggage <= 10) {
    $luggagevalue = 50;
} elseif (0 < $luggage && $luggage <= 20) {
    $luggagevalue = 100;
} elseif ($luggage > 20) {
    $luggagevalue = 200;
}

if ($cars == 50) {
    if ($totaldistance <= 10) {
        $fare = 13.50 * $totaldistance;
    } elseif (10 < $totaldistance && $totaldistance <= 60) {
        $fare = (13.50 * 10) + (12.00 * ($totaldistance - 10));
    } elseif (60 < $totaldistance && $totaldistance <= 160) {
        $fare = (13.50 * 10) + (12.00 * 50) + (10.20 * ($totaldistance - 60));
    } elseif (160 < $totaldistance) {
        $fare = (13.50 * 10) + (12.00 * 50) + (10.20 * 100) + (8.50 * ($totaldistance - 160));
    }
    echo "Total Fare: " . floatval($fare + $cars);
} elseif ($cars == 150) {
    if ($totaldistance <= 10) {
        $fare = 14.50 * $totaldistance;
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (10 < $totaldistance && $totaldistance <= 60) {
        $fare = (14.50 * 10) + (13.00 * ($totaldistance - 10));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (60 < $totaldistance && $totaldistance <= 160) {
        $fare = (14.50 * 10) + (13.00 * 50) + (11.20 * ($totaldistance - 60));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (160 < $totaldistance) {
        $fare = (14.50 * 10) + (13.00 * 50) + (11.20 * 100) + (9.50 * ($totaldistance - 160));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } else {
        echo "Total Fare: " . floatval($cars);
    }
} elseif ($cars == 200) {
    if ($totaldistance <= 10) {
        $fare = 15.50 * $totaldistance;
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (10 < $totaldistance && $totaldistance <= 60) {
        $fare = (15.50 * 10) + (14.00 * ($totaldistance - 10));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (60 < $totaldistance && $totaldistance <= 160) {
        $fare = (15.50 * 10) + (14.00 * 50) + (12.20 * ($totaldistance - 60));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (160 < $totaldistance) {
        $fare = (15.50 * 10) + (14.00 * 50) + (12.20 * 100) + (10.50 * ($totaldistance - 160));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } else {
        echo "Total Fare: " . floatval($cars);
    }
} elseif ($cars == 250) {
    if ($totaldistance <= 10) {
        $fare = 16.50 * $totaldistance;
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (10 < $totaldistance && $totaldistance <= 60) {
        $fare = (16.50 * 10) + (15.00 * ($totaldistance - 10));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (60 < $totaldistance && $totaldistance <= 160) {
        $fare = (16.50 * 10) + (15.00 * 50) + (13.20 * ($totaldistance - 60));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } elseif (160 < $totaldistance) {
        $fare = (16.50 * 10) + (15.00 * 50) + (13.20 * 100) + (11.50 * ($totaldistance - 160));
        echo "Total Fare: " . floatval($fare + $luggagevalue + $cars);
    } else {
        echo "Total Fare: " . floatval($cars);
    }
}
?>