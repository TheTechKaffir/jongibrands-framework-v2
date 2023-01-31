<?php 

/**
 * Database Class
 */

 class Database 
 {
    private function connect()
    {
        // DSN
        $dsn = DBDRIVER . ':host=' . DBHOST . ';dbname=' . DBNAME;

        try {
            // Create a PDO instance
            $conn = new PDO($dsn, DBUSER, DBPASS);
            // Set Attributes
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public function query($query, $data = [])
    {
        $conn = $this->connect();

        $stmt = $conn->prepare($query);

        if ($stmt) {
            $check = $stmt->execute($data);
            if ($check) {
                $result = $stmt->fetchAll();

                if (is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }

        return false;
    }

    public function create_tables()
    {
        // Users Table
        $sql = " USE play_db;
        CREATE TABLE IF NOT EXISTS `users` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `name` varchar(255) NOT NULL,
                `username` varchar(255) NOT NULL,
                `email` varchar(50) NOT NULL,
                `password` varchar(255) NOT NULL,
                `userRole` varchar(50) NOT NULL DEFAULT 'user',
                `date` date DEFAULT current_timestamp(),
                PRIMARY KEY (`id`),
                UNIQUE KEY `email_2` (`email`),
                UNIQUE KEY `name_2` (`name`),
                UNIQUE KEY `username` (`username`),
                KEY `email` (`email`),
                KEY `date` (`date`),
                KEY `name` (`name`),
                KEY `username_2` (`username`)
               ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
        ";

        $this->query($sql);
    }
 }