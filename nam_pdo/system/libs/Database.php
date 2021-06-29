<?php 

class Database extends PDO{
	
	public function __construct($connect,$user,$pass)
	{
		
		 parent::__construct($connect,$user,$pass); //bằng dòng $db = new PDO($connect,$user,$pass);
		// echo "ket noi oke";

	}
	public function select($sql,$data = array(),$fetchStyle = PDO::FETCH_ASSOC){
		$statement = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindParam($key,$value);
		}
		$statement->execute();
		return  $statement->fetchAll($fetchStyle);
		
	}
	public function insert($table,$data){
		$key = implode(",", array_keys($data));
		$value = ":". implode(", :", array_keys($data));

		$sql = "INSERT INTO $table($key) VALUES ($value)";
		$statement = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key",$value);
		}

		return $statement->execute();

		

	}	

	public function update($table,$data,$cond){
		$updateKeys = NULL;
		foreach ($data as $key => $value) {
			$updateKeys .= "$key=:$key,";
		}
		$updateKeys = rtrim($updateKeys,",");
		$sql = "UPDATE $table SET $updateKeys WHERE $cond";
		$statement = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key",$value);
		}
		return $statement->execute();

		// $sql = "UPDATE $table  SET title_category_product=:title_category_product, desc_category_product=:desc_category_product WHERE $cond";
		// $statement = $this->prepare($sql);
		// foreach ($data as $key => $value) {
		// 	$statement->bindValue(":$key",$value);
		// }
	}

	public function delete($table,$cond,$limit = 1){
		$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
		return $this->exec($sql);
	}

	//login
	public function affectedRows($sql,$username,$password){
		$statement = $this->prepare($sql);
		$statement->execute(array($username,$password));
		return  $statement->rowCount();
	}
	public function selectUser($sql,$user,$password){
		$statement = $this->prepare($sql);
		$statement->execute(array($user,$password));
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}


}
 ?>
