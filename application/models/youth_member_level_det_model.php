<?php
class Youth_member_level_det_model extends CI_Model {
		public function __construct() {
		$this -> load -> database();
	}
		public function get_member_level_det($member_id= FALSE, $code=FALSE) {
		$this -> db -> select('*');
		$this -> db -> from('youth_member_level_det');
		$this -> db -> where('member_id', urldecode($member_id));
		$this -> db -> where('code',urldecode($code));
		$this -> db -> order_by('code');
		return $this -> db -> get() -> result_array();
	}
	
	public function clone_member_level_det($member_id= FALSE,$level=FALSE) {
		 $this ->db -> select("code,desc,in_date,level");
	     $this ->db -> from('youth_level_det');
		 $this ->db -> where('level', urldecode($level));
		 $data['youth_member_level_det'] = $this -> db -> get() ->result_array();
		 
		 
		// print_r( $data);
		 
		foreach ( $data['youth_member_level_det'] as $youth_level_det_item){
			$row = array(
			'code' => $youth_level_det_item['code'],
			'desc' => $youth_level_det_item['desc'],
			'in_date' => NULL,
			'member_id' => $member_id,
			'level' => urldecode($level),
			'isfinish' => 0	
		);
   	  	$this->db->insert('youth_member_level_det',$row);
		}
	}
}
