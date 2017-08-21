<?

namespace RoutingEngine;

interface Rule
{
    /**
     * @param Client $client
     * @param LoanApplication $loanApplication
     * @return bool
     */
    public static function assert (Client $client, LoanApplication $loanApplication);

    /**
     * @return HAL
     */
    public static function getRoute ();
}