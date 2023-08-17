<?php

namespace Core;

use Core\DataBase;
use Core\App;
use Core\Session;

class Authenticator{
    function logout(){
        Session::destroy();
    }
    function login($user){
        $_SESSION['user']['email']=$user['email'];
        $_SESSION['user']['id']=$user['id'];
        session_regenerate_id(true);
    }

    public function attempt($email,$password){
        $db=App::resolve(DataBase::class);

        $user=$db->query("select * from users where email=:email",[
            'email'=>$email
        ])->find();
        if($user){
            if(password_verify($password,$user['password'])){
                $this->login(
                        $user
                    );

                return true;
            }
        }
        return false;
    }
}