<?php 
class schema extends database{
	public function create($sql,$is_die=false){
		return $this->runQuery($sql,$is_die);
	}
}