<?php
require_once("db_conn.php");
session_start();
session_destroy();

header("Location: login.php");
exit();
