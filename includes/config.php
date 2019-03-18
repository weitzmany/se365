<?

define ('DBHOST','localhost');
define ('DBUSER', 'root');
define ('DBPASS', 'root');
define ('DBDATA', 'se365');

$db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATA);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
    exit;
}
?>