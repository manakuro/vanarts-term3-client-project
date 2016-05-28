<?php

namespace WWM;

/**
 * DB Class
 * 
 * [DB class wraps medoo object (http://medoo.in/)]
 * 
 */
class DB {

    private $_hostname;
    private $_username;
    private $_password;
    private $_database;

    /**
     * __construct
     * [setup properties]
     * @param string $hostname [description]
     * @param string $username [description]
     * @param string $password [description]
     * @param string $database [description]
     */
    function __construct($hostname = 'localhost', $username = 'root', $password = '', $database = 'wwm') {
        $this->_hostname = $hostname;
        $this->_username = $username;
        $this->_password = $password;
        $this->_database = $database;
    }

    function forge() {
        return new \medoo(array(
            'database_type' => 'mysql',
            'database_name' => $this->_database,
            'server' => $this->_hostname,
            'username' => $this->_username,
            'password' => $this->_password,
            'charset' => 'utf8'
        ));
    }
}
