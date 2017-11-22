<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

class User{

    private $completeName;
    private $userName;
    private $email;
    private $password;

    private $birthDate;
    private $cpf;
    private $tel;
    private $address;
    private $street;
    private $number;
    private $district;
    private $complement;
    private $cep;
    private $city;
    private $county;

    private $isAdmin = false;

    /**
     * User constructor.
     * @param $completeName
     * @param $userName
     * @param $email
     * @param $password
     * @param $birthDate
     * @param $cpf
     * @param $tel
     * @param $address
     * @param $street
     * @param $number
     * @param $district
     * @param $complement
     * @param $cep
     * @param $city
     * @param $county
     * @param bool $isAdmin
     */
    public function __construct($completeName, $userName, $email, $password, $birthDate, $cpf, $tel, $address, $street, $number, $district, $complement, $cep, $city, $county, $isAdmin)
    {
        $this->completeName = $completeName;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->tel = $tel;
        $this->address = $address;
        $this->street = $street;
        $this->number = $number;
        $this->district = $district;
        $this->complement = $complement;
        $this->cep = $cep;
        $this->city = $city;
        $this->county = $county;
        $this->isAdmin = $isAdmin;
    }


    function __toString()
    {
        // TODO: Implement __toString() method.
        // Pode ser utilizado para imprimir o objeto já com o html
        return "";
    }


}