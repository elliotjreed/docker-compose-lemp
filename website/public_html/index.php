<?php
/**
 * In our PDO connection settings we put in the database credentials from the `environment:`
 * block from `docker-compose.yml`
**/ 
$pdo = new \PDO('mysql:host=lemp-mariadb;charset=utf8;', 'exampleuser', 'exampleuserpassword');

$databases = $pdo->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN);

echo '<h2>Databases: </h2>';
echo '<p>Running SQL query <code>SHOW DATABASES;</code></p>';

echo '<ul>';
foreach ($databases as $database) {
    echo '<li>' . $database . '</li>';
}
echo '</ul>';

phpinfo();
