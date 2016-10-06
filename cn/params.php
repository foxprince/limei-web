<?php

$budget = null;
$budgetLow = 500;
$weightHigh = 5;
$weightLow = 0.3;
$ringid= null;

if (isset($_GET['budget'])) {
    $budget = (int) $_GET['budget'];
}
if (isset($_POST['budget'])) {
    $budget = (int) $_POST['budget'];
}
if (!$budget && isset($_COOKIE['budget'])) {
    $budget = $_COOKIE['budget'];
}

if ($budget) {
    setcookie('budget', $budget);
}

// $budget = isset($_POST['budget']) ? (int) $_POST['budget'] :
//     isset($_COOKIE['budget']) ? $_COOKIE['budget'] : $budget;
// setcookie('budget', $budget);

$budgetLow = isset($_GET['budgetLow']) ? (int) $_GET['budgetLow'] :
    (isset($_COOKIE['budgetLow']) ? $_COOKIE['budgetLow'] : $budgetLow);
setcookie('budgetLow', $budgetLow);

$weightHigh = isset($_GET['weightHigh']) ? (float) $_GET['weightHigh'] :
    (isset($_COOKIE['weightHigh']) ? $_COOKIE['weightHigh'] : $weightHigh);
setcookie('weightHigh', $weightHigh);

$weightLow = isset($_GET['weightLow']) ? (float) $_GET['weightLow'] :
    (isset($_COOKIE['weightLow']) ? $_COOKIE['weightLow'] : $weightLow);
setcookie('weightLow', $weightLow);

// currency
$currency = 'USD';
if (isset($_POST['currency'])) {
    $currency = $_POST['currency'];
} elseif (isset($_COOKIE['currency'])) {
    $currency = $_COOKIE['currency'];
}

// simply sanity check
switch ($currency) {
    case 'CNY':
    case 'EUR':
    case 'USD':
    case 'GBP':
        # code...
        break;
    default:
        throw new Exception('Unsupported currency');
        break;
}
setcookie('currency', $currency);


//20150809

if (isset($_GET['ringid'])) {
    $ringid = (int) $_GET['ringid'];
}
if (isset($_POST['ringid'])) {
    $ringid = (int) $_POST['ringid'];
}
if (!$ringid && isset($_COOKIE['ringid'])) {
    $ringid = $_COOKIE['ringid'];
}

if ($ringid) {
    setcookie('ringid', $ringid);
}






