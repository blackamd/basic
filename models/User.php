<?php
	namespace app\models;

	
	class User extends \yii\db\ActiveRecord{
		private $id;
		private $name;
		private $username;
		private $password;
		private $email;
		private $mobile;
		private $gender;
		private $created_at;
		private $updated_at;
		
		public function rules(){
			return[
				[['name','username','password','email','mobile','gender'],'required']
			];
		}


	}
?>
