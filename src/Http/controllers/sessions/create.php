<?php
use Core\Session;

view("sessions/create.view.php",[
    "errors"=>Session::get('errors'),
    "email"=>old('email')
]
);