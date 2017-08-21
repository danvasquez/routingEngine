<?
namespace RoutingEngine;

class Client
{
    /** @var string $ssn */
    private $ssn;
    /** @var string $tel */
    private $tel;

    /**
     * @param string $ssn
     * @param string $tel
     */
    public function __construct ($ssn, $tel)
    {
        $this->ssn = $ssn;
        $this->tel = $tel;
    }

    /** @return string */
    public function ssn()
    {
        return $this->ssn;
    }

    /** @return string */
    public function tel()
    {
        return $this->tel;
    }
}