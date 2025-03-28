<?php
class homeModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

}