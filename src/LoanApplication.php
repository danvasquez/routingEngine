<?php
/**
 * Created by PhpStorm.
 * User: dvasquez
 * Date: 8/20/17
 * Time: 8:46 PM
 */

namespace RoutingEngine;


class LoanApplication
{
    /** @var Applicants */
    private $applicants;
    /** @var string */
    private $currentPitstopCode;
    /** @var array */
    private $assets;
    /** @var array */
    private $livingSituationHistory;
    /** @var array */
    private $employmentHistory;

    /**
     * @param Applicants $applicants
     * @param string $currentPitstopCode
     * @param array $assets
     * @param array $livingSituationHistory
     * @param array $employmentHistory
     */
    public function __construct (
        $applicants,
        $currentPitstopCode,
        $assets,
        $livingSituationHistory,
        $employmentHistory
    ) {
        $this->applicants = $applicants;
        $this->currentPitstopCode = $currentPitstopCode;
        $this->assets = $assets;
        $this->livingSituationHistory = $livingSituationHistory;
        $this->employmentHistory = $employmentHistory;
    }

    /** @return Applicants */
    public function applicants()
    {
        return $this->applicants;
    }

    /** @return bool */
    public function isCurrentlyPitstopped()
    {
        return ($this->currentPitstopCode === null) ? false : true;
    }

    /** @return array */
    public function assets()
    {
        return $this->assets;
    }

    /** @return array */
    public function livingSituationHistory()
    {
        return $this->livingSituationHistory;
    }

    /** @return array */
    public function employmentHistory()
    {
        return $this->employmentHistory;
    }
}