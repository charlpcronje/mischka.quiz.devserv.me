<?php
class Connection {
    private $connection = [];

    public function __construct($connection = null) {
        switch($connection) {
            case 'heepp':
                $this->connection = $this->heepp();
            break;
            default:
                $this->connection = $this->quiz();
            break;
        }
    }

    public function getConnection($connection = null) {
        return $this->connection;
    }

    public function getConnections() {
        $connections[] = (object)[
            'name'  =>'quiz',
            'alias' =>'Mischka Quiz'];
        return $connections;
    }

    private function quiz() {
        return (object)[
            'host'     => env('db.host'),
            'username' => env('db.user'),
            'password' => env('db.pass'),
            'database' => env('db.name')
        ];
    }
}
