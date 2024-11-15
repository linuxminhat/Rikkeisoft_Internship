<?php

namespace Framework;

use PDO;

class User
{
    public $conn;
    /**
     * Constructor for User class
     *
     * @param array $config
     *
     */
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};
        port={$config['port']};
        dbname={$config['dbname']}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

        ];
        try {
            $this->conn = new PDO($dsn, $config['username'],
                $config['password'], $options);

        } catch (PDOException $e) {
            throw new Exception("Connection failed: {$e->getMessage()}");
        }
    }
    /**
     * Query database
     *
     * @param string $query
     *
     * @return PDOStatement
     * @throws PDOException
     *
     */
    public function query($query, $params = [])
    {
        try {
            $statement = $this->conn->prepare($query);

            //Bind named parameters
            foreach ($params as $params => $value) {
                $statement->bindValue(':' . $params, $value);
            }

            //Execute the statement and return the result set
            $statement->execute();
            return $statement;

        } catch (PDOException $e) {
            throw new Exception("Query failed: {$e->getMessage()}");
        }
    }
    public function getUserByEmail($email)
    {
        $params = ['email' => $email];
        return $this->query('SELECT * FROM users WHERE email = :email', $params)->fetch();
    }

    public function createUser(array $params)
    {
        return $this->query('INSERT INTO users (name, email, city, state, password) VALUES (:name, :email, :city, :state, :password)', $params);
    }
    public function lastID()
    {
        return $this->conn->lastInsertId();
    }
}