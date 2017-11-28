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
            $user = $uc->retrieveUserById($id);

            /*Admin tentando acessar página de usuário comum*/
            if($user->isAdmin() && ($accessType == AccessType::COMMON)){
                Util::redirectTo($adminPage);
            }

            /*Usuário comum tentando acessar página de admin*/
            if(!$user->isAdmin() && ($accessType == AccessType::ADMIN)) {
                Util::redirectTo($userPage);
            }
        }else{
            Util::redirectTo($loginPage);
        }
    }

}

abstract class AccessType
{
    const ADMIN = "ADMIN_USER_ONLY";
    const COMMON = "COMMON_USER_ONLY";
}