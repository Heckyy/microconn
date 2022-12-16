<?php

class Database
{
    /**
     * field untuk kebutuhan membuat koneksi database mysql
     * isi field masih kosong jika ada kebutuhan penggunaan database, seluruh field bisa disesuaikan dengan koneksi database
     */
    private $host;
    private $dbaname;

    private $conn;
    private $statement;

    /**
     * constructor ini digunakan untuk membuat koneksi database
     * ========================================================
     */
    public function __construct()
    {
        // data source untuk membuat koneksi database
        $datasouce = 'mysqli:host=' . $this->host . ';dbname=' . $this->dbaname . ';';

        $options = [
            PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION
        ];

        try {
            // $this->conn = new PDO($datasouce, Configuration::$DB_USERNAME, Configuration::$DB_PASSWORD, $options);
        } catch (PDOException $e) {
            print "ERROR " . $e->getMessage() . '<br>';
            die();
        }
    }

    /**
     * fungsi ini digunakan untuk membuat query database
     */
    public function query($query)
    {
        $this->statement = $this->conn->prepare($query);
    }

    /**
     * fungsi ini digunakan untuk binding data ke query
     */
    public function bindData($key, $value)
    {
        switch (true) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
                break;
        }

        $this->statement->bindValue($key, $value, $type);
    }

    /**
     * fungsi ini digunakan untuk mengambil hasil query menjadi array assoc
     * data yang dikembalikan lebih dari satu
     */
    public function fetchAll() {
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * fungsi ini digunakan untuk mengambil hasil query menjadi array assoc
     * data yang dikembalikan hanya satu
     */
    public function fetch() {
        $this->statement->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * fungsi ini digunakan untuk mendapatkan hasil affected rows dari query yang dijalankan
     * jika hasil kembalian lebih dari 0 artinya ada perubahan yang terjadi didatabase
     */
    public function affectedRows() {
        $this->statement->execute();
        return $this->statement->rowCount();
    }
}
