<?

namespace RoutingEngine;

class Applicant
{
    /** @var bool */
    private $hasConsentedToCreditPull;
    /** @var int */
    private $creditScore;

    /**
     * @param bool $hasConsentedToCreditPull
     * @param int $creditScore
     */
    public function __construct (
        $hasConsentedToCreditPull,
        $creditScore
    ) {
        $this->hasConsentedToCreditPull = $hasConsentedToCreditPull;
        $this->creditScore = $creditScore;
    }

    /**
     * @return bool
     */
    public function hasConsentedToCreditPull()
    {
        return $this->hasConsentedToCreditPull;
    }

    /**
     * @return int
     */
    public function creditScore()
    {
        return $this->creditScore;
    }
}