<?php

class User
{
    private $id, $username, $password, $email, $role, $created_at;

    public function __construct($id, $username, $password, $email, $role, $created_at)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
        $this->created_at = $created_at;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($put_id)
    {
        $this->id = $put_id;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($put_username)
    {
        $this->username = $put_username;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($put_password)
    {
        $this->password = $put_password;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($put_email)
    {
        $this->email = $put_email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($put_role)
    {
        $this->role = $put_role;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($put_created_at)
    {
        $this->created_at = $put_created_at;
    }
}


$currentDateTime = date('d-m-Y H:i:s');
$created_at = new DateTime($currentDateTime);
$Nowy = new User (321,'Marcin', 'maslo','beber@gmail.com','USer',$created_at);



echo "Dane uzytkownika Nowy \n";
echo $Nowy->getUsername();
echo 'Data stworzenia użytkownika: ' . $Nowy->getCreatedAt()->format('d-m-Y H:i:s');











