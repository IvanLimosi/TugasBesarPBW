<?php

class Driver{
	protected $username;
    protected $nama;
	protected $password;

	public function __construct($username,$nama,$password){
		$this->username = $username;
        $this->nama = $nama;
		$this->password = $password;
	}

    public function getNama(){
        return $this->nama;
    }

	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}

}


?>