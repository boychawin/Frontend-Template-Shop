
<?php
class Database
{

	private $server = "mysql:host=localhost;dbname=db_pulletdiaper";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;

	public function open()
	{
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
			$this->conn->exec("set names utf8");
			return $this->conn;
		} catch (PDOException $e) {
			
			$_SESSION['error'] = "มีปัญหาบางอย่างในการเชื่อมต่อ: " . $e->getMessage();
		}
	}

	public function close()
	{
		$this->conn = null;
	}
}
// $pdo->set_charset("utf8");
$pdo = new Database();


date_default_timezone_set('Asia/Bangkok');

?>

