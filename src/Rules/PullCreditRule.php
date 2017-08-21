<?
namespace RoutingEngine\Rules;

use RoutingEngine\Rule;
use RoutingEngine\Client;
use RoutingEngine\LoanApplication;
use RoutingEngine\HAL;

class PullCreditRule implements Rule
{
    /**
     * @inheritdoc
     */
    public static function assert (Client $client, LoanApplication $loanApplication)
    {
        if (
            $client->ssn()
            && $client->tel()
            && count($loanApplication->assets()) > 0
            && count($loanApplication->employmentHistory()) > 0
            && count($loanApplication->livingSituationHistory()) > 0
            && $loanApplication->isCurrentlyPitstopped() === false
            && $loanApplication->applicants()->primary()->hasConsentedToCreditPull() === true
        ) {

            return true;
        } else {

            return false;
        }
    }

    /**
     * @return HAL
     */
    public static function getRoute()
    {
        return new HAL (
            'pullCredit',
            '/events/pullCredit'
        );
    }
}