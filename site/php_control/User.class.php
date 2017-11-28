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
    private $street;
    private $number;
    private $district;
    private $complement;
    private $cep;
    private $city;
    private $county;
    private $isAdmin;
    private $dataCadastro;

    /**
     * User constructor.
     * @param $completeName
     * @param $userName
     * @param $email
     * @param $password
     * @param $birthDate
     * @param $cpf
     * @param $tel
     * @param $street
     * @param $number
     * @param $district
     * @param $complement
     * @param $cep
     * @param $city
     * @param $county
     * @param bool $isAdmin
     */
    public function __construct(
        $completeName = null,
        $userName = null,                                    
        $email = null,                                       
        $password = null,                                    
        $birthDate = null,                                   
        $cpf = null,                                         
        $tel = null,                                         
        $street = null,                                      
        $number = null,                                      
        $district = null,                                    
        $complement = null,                                  
        $cep = null,                                         
        $city = null,                                        
        $county = null,                                      
        $isAdmin = false
    )
    {
        $this->completeName = $completeName;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->tel = $tel;
        $this->street = $street;
        $this->number = $number;
        $this->district = $district;
        $this->complement = $complement;
        $this->cep = $cep;
        $this->city = $city;
        $this->county = $county;
        $this->isAdmin = $isAdmin;
    }

    private $varList = [
        "completeName" =>  ["completeName"      ,         "nome_completo"       ],
        "userName"     =>  ["userName"          ,         "UN_nome_usuario"     ],
        "email"        =>  ["email"             ,         "UN_email"            ],
        "password"     =>  ["password"          ,         "senha"               ],
        "birthDate"    =>  ["birthDate"         ,         "data_nasc"           ],
        "cpf"          =>  ["cpf"               ,         "PK_cpf"              ],
        "tel"          =>  ["tel"               ,         "tel"                 ],
        "street"       =>  ["street"            ,         "rua"                 ],
        "number"       =>  ["number"            ,         "numero"              ],
        "district"     =>  ["district"          ,         "bairro"              ],
        "complement"   =>  ["complement"        ,         "complemento"         ],
        "cep"          =>  ["cep"               ,         "cep"                 ],
        "city"         =>  ["city"              ,         "cidade"              ],
        "county"       =>  ["county"            ,         "pais"                ],
        "isAdmin"      =>  ["isAdmin"           ,         "is_adm"              ],
        "dataCadastro" =>  ["dataCadastro"      ,         "data_cadastro"       ],
    ];

    function __set($name, $value)
    {
        foreach ($this->varList as $key => $possibleVarName){
            if(in_array($name, $possibleVarName)){

                switch ($key){
                    case "completeName":
                        $this->completeName = $value;
                        break;
                    case "userName":
                        $this->userName = $value;
                        break;
                    case "email":
                        $this->email = $value;
                        break;
                    case "password":
                        $this->password = $value;
                        break;
                    case "birthDate":
                        $this->birthDate = $value;
                        break;
                    case "cpf":
                        $this->cpf = $value;
                        break;
                    case "tel":
                        $this->tel = $value;
                        break;
                    case "street":
                        $this->street = $value;
                        break;
                    case "number":
                        $this->number = $value;
                        break;
                    case "district":
                        $this->district = $value;
                        break;
                    case "complement":
                        $this->complement = $value;
                        break;
                    case "cep":
                        $this->cep = $value;
                        break;
                    case "city":
                        $this->city = $value;
                        break;
                    case "county":
                        $this->county = $value;
                        break;
                    case "isAdmin":
                        $this->isAdmin = $value;
                        break;
                    case "dataCadastro":
                        $this->dataCadastro = $value;
                        break;
                }
            }
        }
    }


    function __toString()
    {
        $rsp = "<div class='user'>";
        $rsp .= "<span class='userBigOutput'><strong>Nome: </strong> $this->completeName</span><br>";
        $rsp .= "<hr>";
        $rsp .= "<span class='userNormalOutput'><strong>E-mail: </strong> $this->email </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>Data de nascimento: </strong></span><br> <input type='date' value='$this->birthDate' disabled><br>";
        $rsp .= "<span class='userNormalOutput'><strong>CPF: </strong> $this->cpf </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>Telefone: </strong> $this->tel </span><br>";
        $rsp .= "<hr>";
        $rsp .= "<span class='userNormalOutput'><strong>Rua: </strong> $this->street </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>Número: </strong>  $this->number </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>Bairro: </strong> $this->district </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>Complemento: </strong> $this->complement </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>CEP: </strong> $this->cep </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>Cidade: </strong> $this->city  </span><br>";
        $rsp .= "<span class='userNormalOutput'><strong>País: </strong>$this->county </span><br>";

        if($this->isAdmin()){
            $rsp .= "<span class='userNormalOutput'><strong>É um administrador: </strong> Sim </span><br>";
        }else{
            $rsp .= "<span class='userNormalOutput'><strong>É um administrador: </strong> Não </span><br>";
        }
        $rsp .= "</div>";
        return $rsp;
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
     * @return mixed
     */
    public function getId()
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
    public function isAdmin()
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