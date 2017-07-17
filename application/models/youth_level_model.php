<?php
class Youth_level_model extends CI_Model {

	public function __construct() {
		$this -> load -> database();
	}

	public function get_level($code = FALSE) {

		if ($code === FALSE) {
			$user_right = $this -> session -> userdata('user_right');
			$cat = $this -> session -> userdata('cat');
			$club_code = $this -> session -> userdata('club_code');
			$username2 = $this -> session -> userdata('username');
			$search_level = $this -> input -> post('search_level');
			$this -> db -> select('*');
			$this -> db -> from('youth_level');
			$this -> db -> where('level', $search_level);
			$this -> db -> order_by('code');
			return $this -> db -> get() -> result_array();
		}
		$query = $this->db->get_where('youth_level', array('code' => $code));
		return $query->row_array();
	}



	public function create_level() {

		$this -> load -> helper('url');



		$data = array(
			'level' => $this -> input -> post('level'),
			'cat' => $this -> input -> post('cat'),
			'code' => $this -> input -> post('code'),
			'desc' => $this -> input -> post('desc'),
			'version' => $this -> input -> post('version'),
			'indate' => $this -> input -> post('indate'));
			return $this -> db -> insert('youth_level', $data);


		}


		public function push_members_level($member_id, $level) {

			// get all the members_level  with member_id
			//團彥 準團師 團師MG 領袖勳章PLA  高級領袖勳章APLA
			// members master  files
			$this -> db -> select('*');
			$this -> db -> from('youth_member_level');
			$this -> db -> where('member_id', $member_id);
			$data['youth_member_level'] = $this->db->get()->result_array();

			// master files
			$this -> db -> select('*');
			$this -> db -> from('youth_level');
			$this->db->where('level',$level);
			$data['youth_level'] = $this->db->get()->result_array();

			//loop the member array with level e.g '團彥
			foreach ( $data['youth_level'] as $v){
				$flag_1 = false;
				foreach ( $data['youth_member_level'] as $index =>$levels ){
					if($levels['code'] === $v['code']) {
						$flag_1 =  true;
					}
				}
				if ($flag_1===true){
				} else {
					echo  "已更新 ".$v['code'] ." 新發現新的領袖級資格資料! </br>";
					$row = array(
						'level' => $v['level'],
						'cat' => $v['cat'],
						'code' => $v['code'],
						'desc' => $v['desc'],
						'version' =>$v['version'],
						'indate' => NULL,
						'member_id' => $member_id,
						'isfinish' => 0
					);
					$this->db->insert('youth_member_level', $row);
					// recetive master level_det files
					$this -> db -> select('*');
					$this -> db -> from('youth_level_det');
					$this->db->where('code', $v['code']);
					$data['youth_level_det'] = $this->db->get()->result_array();
					foreach ( $data['youth_level_det'] as $youth_level_det_item){
						$row = array(
							'code' => $youth_level_det_item['code'],
							'desc' => $youth_level_det_item['desc'],
							'in_date' => NULL,
							'member_id' => $member_id,
							'level' =>$youth_level_det_item['level'],
							'isfinish' => 0
						);
						$this->db->insert('youth_member_level_det',$row);
					}
				}
			}
		}
		public function update_level(){
			$data = array(
				'level' => $this->input->post('level'),
				'cat' => $this->input->post('cat'),
				'code' => $this->input->post('code'),
				'desc' => $this->input->post('desc'),
				'version' => $this->input->post('version'),
				'indate' => $this -> input -> post('indate'));
				$seq = $this->input->post('seq');
				$this->db->where('seq', $seq);
				$this->db->update('youth_level', $data);
			}

		}
