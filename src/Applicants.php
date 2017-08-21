<?php

namespace RoutingEngine;

class Applicants
{
    /** @var Applicant[] */
    private $applicants;

    /**
     * @param Applicant[] $applicants
     */
    public function __construct (array $applicants)
    {
        $this->applicants = $applicants;
    }

    /** @return Applicant */
    public function primary()
    {
        return $this->applicants[0]; //this is just me being lazy in a demo, be smarter than this
    }
}