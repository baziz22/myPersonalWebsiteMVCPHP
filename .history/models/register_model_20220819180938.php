<?php

class Register_Model extends Model{
    function __construct() {
        echo "التسجيل للجاتا بيس";
        // عقم لكي لا يسيؤا أستخدامة
        //echo "THis is : ", $this;
        parent::__construct();
        // sanatize the  so they can't abuse it.
        //echo "THis is : ", $this;
    }
    public function register($data) {
        echo "THis is : ";
        echo '<pre>';
        print_r($this);
        echo '</pre>';
        

        
        //$this->db->query('INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)');
                
        //$sql = 'INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)';
        //$stmt = $this->db->connect()->prepare($sql);
        //$this->db->connect()->prepare($sql);
       // $this->db->bindParam(':username','user_name', ':email','user_email', ':password','user_password');
        //$stmt->bindValue(1, $is_);
        //$stmt->bindValue(2, $id);
        //$stmt->execute($username, $pass, $the_role);
        //$stmt->bindParam('user_name',$data) ;
        
        /* $stmt->db->execute(array(
            ':username' => $data['user_name'],
            ':email' => $data['user_email'],
            ':password' => $data['user_password']
            
        )); */
        //$this->db->execute();
        //Bind values
        $this->db->bind(':username', $data['user_name']);
        $this->db->bind(':email', $data['user_email']);
        $this->db->bind(':password', $data['user_password']);
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

}