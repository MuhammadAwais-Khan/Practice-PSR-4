<?php
namespace MyApp\Data;

use MyApp\Practice;

class Database {
    public function __construct(){
        echo "<br>Database object Created";
    }
    public function dbFunction(){
        echo "<br>DB Function Called";
    }
}