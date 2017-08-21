<?php

include_once('vendor/autoload.php');

// setup the routing engine
$routingEngine = new \RoutingEngine\RoutingEngine([
    new \RoutingEngine\Rules\PullCreditRule(),
    new \RoutingEngine\Rules\PullSolutionsRule()
]);

// setup the test data
$ssn = '2889899999';
$tel = '5555555555';
$hasConsentedToCreditPull = true;
$currentPitstopCode = null;
$assets = ['anAsset'];
$livingSituationHistory = ['livingSituationHistory'];
$employmentHistory = ['employmentHistory'];
$creditScore = 899;

$client = new \RoutingEngine\Client($ssn, $tel);
$applicant = new \RoutingEngine\Applicant($hasConsentedToCreditPull, $creditScore);

$loanApplication = new \RoutingEngine\LoanApplication(
    new \RoutingEngine\Applicants([$applicant]),
    $currentPitstopCode,
    $assets,
    $livingSituationHistory,
    $employmentHistory
);

$routes = $routingEngine($client, $loanApplication);

print_r($routes);
