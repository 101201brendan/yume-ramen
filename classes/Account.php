<?php

class Account{

    public int $userId;
    public string $email;
    public string $fName;
    public string $lName;
    public string $password;

    public string $postcode;
    public string $street;
    public int $houseNum;

    /**
     * @param int $userId
     * @param string $email
     * @param string $fName
     * @param string $lName
     * @param string $password
     * @param string $postcode
     * @param string $street
     * @param int $houseNum
     */
    public function __construct(int $userId, string $email, string $fName, string $lName, string $password, string $postcode, string $street, string $houseNum)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->password = $password;
        $this->postcode = $postcode;
        $this->street = $street;
        $this->houseNum = $houseNum;
    }

}