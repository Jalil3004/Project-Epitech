<?php
session_start();
require '../database/db.php';

class Logout
{
    public function logout()
    {
        if(isset($_SESSION))
        {
            session_destroy();
        }

        return true;
    }
}

?>