
<?php
$dsn = "mysql:host=localhost;dbname=pandya_dev_portfolio_db;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'root', '');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>