<?php

namespace Framework;

use PDO;

class Listing
{
    public $conn;

    /**
     * Constructor for Listing class
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

    public function getListingById($id)
    {
        $params = ['id' => $id];
        return $this->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();
    }

    public function getAllListings()
    {
        return $this->query('SELECT * FROM listings ORDER BY created_at DESC')->fetchAll();
    }


    public function delete($table, $id)
    {
        $query = "DELETE FROM {$table} WHERE id = :id";
        $params = ['id' => $id];
        $statement = $this->query($query, $params);
        return $statement->rowCount() > 0;
    }
    public function insert($table, $data)
    {
        $fields = array_keys($data);
        $fields = implode(', ', $fields);

        $values = [];
        foreach ($data as $field => $value) {
            if ($value === null) {
                $data[$field] = 'NULL';
            }
            $values[] = ':' . $field;
        }
        $values = implode(', ', $values);

        $query = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";

        $statement = $this->query($query, $data);
        return $statement->rowCount() > 0;
    }

    public function update($table, $id, $data)
    {
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[] = "{$key} = :{$key}";
        }
        $fields = implode(', ', $fields);

        $sql = "UPDATE {$table} SET {$fields} WHERE id = :id";

        $data['id'] = $id;

        $this->query($sql, $data);

        return true;
    }

    public function searchListings($keyword,$location)
    {


        $query="SELECT * FROM listings WHERE (title LIKE :keyword
        OR description LIKE :keyword OR tags LIKE :keyword OR company LIKE :keyword OR city LIKE :keyword OR state LIKE :keyword) AND
                          (city LIKE :location OR state LIKE :location)";
         $params = [
            'keyword' => "%{$keyword}%",
            'location' => "%{$location}%"
        ];
         $listings = $this->query($query, $params)->fetchAll();

         return $listings;


    }

    public function getAllApplications($id)
    {
        $params = ['id' => $id];
        return $this->query('SELECT * FROM application WHERE listing_id = :id ORDER BY created_at DESC',$params)->fetchAll();
    }

}
