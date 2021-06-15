<?php

class Service {
    
    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=pruebaweb', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getValidUser($email, $pass) {
        
        

        self::setNames();

        $sql = "SELECT * 
                FROM t_user
                WHERE t_user_email = '".$email."'
                AND t_user_pass = '".$pass."'";

        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }

        return $this->servicio;
    }

    public function insertUser($email, $pass) {

        self::setNames();
        $sql = "INSERT INTO t_user(t_user_email, t_user_pass, t_user_creation) VALUES ('" . $email . "', '" . $pass . "' , '" . date('Y-m-d h:i:s') . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function updateUser($email) {
        $pass = $this->randomPassword();
        self::setNames();
        $sql = "UPDATE t_user
        SET t_user_pass = '" . $pass . "'
        WHERE t_user_email = '" . $email . "';";

        $result = $this->db->query($sql);

        if ($result) {
            mail($email, 'Recuperación de contraseña', $pass);
            return true;
        } else {
            return false;
        }
    }


    /*CODIGO DE https://stackoverflow.com/questions/6101956/generating-a-random-password-in-php PARA GENERAR UN PASSWORD*/
    public function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
?>