<?php

namespace Core\middleware;

class Auth{
    public function handle(){
        if(!isset( $_SESSION['user'])){
            redirect("/sessions");
        }
    }
}
