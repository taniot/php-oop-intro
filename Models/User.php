
<?php
/**
 * User
 */
class User
{
    public $nome = 'User Name';
    public $email = 'email';
    private $sconto = 0;
    public $address;

    /**
     * __construct
     *
     * @param  string $_nome Parametro nome utente
     * @param  Address $_address Indirizzo utente
     * @param  int $_eta Età utente
     * @return void
     */
    function __construct(string $_nome,  array $_address, int $_eta = 18)
    {
        $this->nome = $_nome;
        $this->setSconto($_eta);
        $this->address = $_address;
    }


    /**
     * getNome
     *
     * @return void
     */
    public function getNome()
    {
        return $this->setUpperCase($this->nome);
    }

    /**
     * setSconto
     *
     * @param  mixed $eta
     * @return void
     */
    public function setSconto($eta) //setter
    {
        if ($eta > 20) {
            $this->sconto = 25;
        }
    }


    public function getSconto() //getter
    {
        //mandare una mail all'amministratore dicendo che gaetano vuole leggere lo sconto
        return $this->sconto;
    }

    private function setUpperCase($string)
    {
        return strtoupper($string);
    }
}
