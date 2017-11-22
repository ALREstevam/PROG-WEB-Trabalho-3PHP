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

    /**
     * @return mixed
     */
    public function getCompleteName()
    {
        return $this->completeName;
    }

    /**
     * @param mixed $completeName
     */
    public function setCompleteName($completeName)
    {
        $this->completeName = $completeName;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param mixed $complement
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param mixed $county
     */
    public function setCounty($county)
    {
        $this->county = $county;
    }

    /**
     * @return boolean
     */
    public function isIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param boolean $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }




}