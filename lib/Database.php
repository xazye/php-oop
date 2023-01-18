<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private PDO $dbh;
    private Exception $error;
    private PDOStatement $stmt;

    public function __construct()
    {
        // set dsn
        $dsn = "pgsql:host={$this->host};dbname={$this->dbname}";
        // set options
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        // PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
    public function query(string $query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind(string $param, mixed $value, $type = null)
    {
        // maybe swap this for match
        if (is_null($type)) {
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
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute()
    {
        return $this->stmt->execute();
    }
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(Pdo::FETCH_OBJ);
    }
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(Pdo::FETCH_OBJ);
    }
}
