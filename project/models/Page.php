<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Page extends Model
	{
		public function getById($id)
		{
			return $this->findOne("SELECT * FROM user WHERE id=$id");
		}
		
		public function getAll($from, $to)
		{
			return $this->findMany("SELECT * FROM user WHERE id>=$from AND id<=$to");
		}
	}
