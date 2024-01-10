<?php
include __DIR__ . "/vendor/allowncreatefunction.php";


//root dir
DEFINE("ROOT", "http://localhost/LLRMCOLLEGE/admin");

//DB connection
DEFINE("HOST", "localhost");
DEFINE("USERNAME", "root");
DEFINE("PASSWORD", "");
DEFINE("DATABASE", "llrm");
$conn = mysqli_connect("localhost", "root", "", "llrm");

DEFINE("DBConnection", $conn);


include __DIR__ . "/vendor/crud.php";
