<?php

namespace Core\middleware;

class Guest{
    public function handle(){
        if($_SESSION['user'] ?? false){
            redirect('/');
        }
    }
}
