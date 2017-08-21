<?php
/**
 * Created by PhpStorm.
 * User: dvasquez
 * Date: 8/20/17
 * Time: 10:52 PM
 */

namespace RoutingEngine\Rules;


use RoutingEngine\Client;
use RoutingEngine\HAL;
use RoutingEngine\LoanApplication;
use RoutingEngine\Rule;

class PullSolutionsRule implements Rule
{
    /**
     * @inheritdoc
     */
    public static function assert(Client $client, LoanApplication $loanApplication)
    {
        // NOTE: notice we don't check what the credit score is here. That's the pitstop engine's job. If
        // the credit score didn't meet our criteria, there would be an appropriate pitstopcode on the loan already.
        // this is how we can try and keep logic isolated
        if (
            $loanApplication->applicants()->primary()->creditScore()
            && $loanApplication->isCurrentlyPitstopped() === false
        ) {
            return true;
        } {
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public static function getRoute()
    {
        return new HAL (
            'pullSolutions',
            '/events/pullSolutions'
        );
    }

}