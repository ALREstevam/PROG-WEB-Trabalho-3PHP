<?php

/**
 * Created by PhpStorm.
 * User: andre
 */

require_once "__constants.php";
require_once "UserControl.class.php";
require_once "Util.php";


class UserAuth
{
    private $isAuthenticationEnabled = true; /*PARA DEBUG!*/
    function __construct($accessType)
    {
        $this->verifyAuth($accessType);
    }

    function verifyAuth($accessType)
    {
        if(!$this->isAuthenticationEnabled){
            return;
        }

        $loginPage = "index.php";
        $userPage = "user_see_info.php";
        $adminPage = "admin_list_all_users.php";

        $uc = new UserControl();
        if($id = $uc->isUserLogged()){
            try{
                $user = $uc->retrieveUserById($id);

                if($user == null){
                    throw new Exception("erro ao recuperar o usuário para verificar o tipo.");
                }

                /*Admin tentando acessar página de usuário comum*/
                if($user->isAdmin() && ($accessType == AccessType::COMMON)){
                    Util::redirectTo($adminPage);
                }

                /*Usuário comum tentando acessar página de admin*/
                if(!$user->isAdmin() && ($accessType == AccessType::ADMIN)) {
                    Util::redirectTo($userPage);
                }
            }
            catch (Exception $e){
                Util::redirectTo($loginPage);
            }
        }else{
            Util::redirectTo($loginPage);
        }
    }

}

class FieldValidation{
    /**
     * Essa função foi baseada nos seguintes gist
     * * https://gist.github.com/rafael-neri/ab3e58803a08cb4def059fce4e3c0e40
     * * https://gist.github.com/guisehn/3276015
     * @param $cpf
     * @return bool
     */
    static function validateCpf($cpf) {

        /*Regexps*/
        $regExtractNumbers = '/[^0-9]/is';
        $regVeifyRepetition = '/(\d)\1{10}/';

        $cpf = preg_replace($regExtractNumbers, '', $cpf);

        if (strlen($cpf) != 11 or preg_match($regVeifyRepetition, $cpf)) {
            return false;
        }

        /**************/
        for ($count = 0, $mult = 10, $soma = 0; $count < 9; $count++, $mult--) {
            $soma += $cpf{$count} * $mult;
        }
        $resto = $soma % 11;
        if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto)) {
            return false;
        }

        /**************/
        for ($count = 0, $mult = 11, $soma = 0; $count < 10; $count++, $mult--) {
            $soma += $cpf{$count} * $mult;
        }
        $resto = $soma % 11;
        /**************/

        return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
    }


    static function validatePassword($password, $minLen){
        return strlen($password) > $minLen;
    }

    static function validateDate($dateStr){
        $regDate = "/\\d{4}-\\d{2}-\\d{2}/";
        if(preg_match($regDate, $dateStr)){
            return true;
        }
        return false;
    }


}



abstract class AccessType
{
    const ADMIN = "ADMIN_USER_ONLY";
    const COMMON = "COMMON_USER_ONLY";
}

class Password{
    static function preparePassword($original){
        return Password::hashPassword(Password::simpleSaltPassword($original));
    }

    static private function simpleSaltPassword($password){
        $salt = [
            "00d7a33bbfb9ff1b46",
            "b7aed75a57283d949705",
            "2c8a3874f89b1b74f2f27bdbc",
            "08ddf2363f1ea0317a"
        ];
        srand(Password::makeSeed($password));
        $salted = $salt[rand(0,3)].$password.$salt[rand(0,3)];
        return $salted;
    }

    static  private function hashPassword($password){
        return hash('sha512', $password);
    }

    static private function makeSeed($password){
        return ord($password);
    }
}

