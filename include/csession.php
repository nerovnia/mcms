<?php

class csession {
    private $username;
    private $idsession;
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getIdsession()
    {
        return $this->idsession;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $idsession
     */
    public function setIdsession($idsession)
    {
        $this->idsession = $idsession;
    }

    
    
}

