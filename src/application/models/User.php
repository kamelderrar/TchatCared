<?php

class UserModel extends Model
{
    public function find($id){
        
    }
    
    public function fetchAll(){
        
    }
    
    public function findByLoginAndPassword($login, $password){
    	
    	$query = "SELECT * FROM `users` WHERE login=:login AND password=:password;";
    	
    	$statement = $this->getDb()->prepare($query);
    	$statement->bindParam(':login', $login);
    	$statement->bindParam(':password', $password);
    	
    	$statement->execute();
		
    	return $statement->fetch();
    }
    
    public function fetchAllByCondition($condition) {
        
        $query = "SELECT * FROM `users` WHERE " . $condition;
        
        $statement = $this->getDb()->prepare($query);
        $statement->execute();
        
        return $statement->fetchAll();
    }
}