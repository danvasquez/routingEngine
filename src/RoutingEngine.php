<?php

namespace RoutingEngine;


class RoutingEngine
{
    /** @var Rule[] */
    private $rules;

    /**
     * @param Rule[] $rules 
     */
    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @param Client $client
     * @param LoanApplication $loanApplication
     *
     * @throws \Exception
     *
     * @return HAL[]
     */
    public function __invoke(Client $client, LoanApplication $loanApplication)
    {
        $routeCollection = [];

        array_walk($this->rules, function (Rule $rule) use (&$routeCollection, $client, $loanApplication) {
            if ($rule::assert($client, $loanApplication)) {
                $routeCollection[] = $rule::getRoute();
            }
        });

        if (count($routeCollection) === 0) {
            throw new \Exception("No routes matched!");
        }

        return $routeCollection;
    }
}
