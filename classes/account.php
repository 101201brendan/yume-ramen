<?php

class account{

    public int $userId;
    public string $email;
    public string $fName;
    public string $lName;
    public string $password;

    /**
     * @param int $userId
     * @param string $email
     * @param string $fName
     * @param string $lName
     * @param string $password
     */
    public function __construct(int $userId, string $email, string $fName, string $lName, string $password)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->password = $password;
    }

}