<?php

class Contact_Index_View extends FacadePage
{

    public function SendForm(Facade $facade, $data)
    {
        if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {

            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $db_table = "quizadm";

            Utils::DB()->insert($db_table, [
                'login'    => $login,
                'email'   => $email,
                'password' => $password,
            ]);

        }
    }
}