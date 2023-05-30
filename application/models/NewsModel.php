<?php

class NewsModel extends CI_Model{


	public function insertCategoryNews($data){
		return $this->db->insert('news',$data);
	}
	public function selectCategoryNews(){

		$query = $this->db->get('news');
		return $query->result();
	}
	public function selectCategory_NewsById($id){
		$query = $this->db->get_where('news',['id'=>$id]);
		return $query->row();
	}
	public function updateCategoryNews($id,$data){
		return $this->db->update('news',$data,['id'=>$id]);
	}
	public function deleteCategoryNews($id){
		return $this->db->delete('news',['id'=>$id]);
	}
}
?>

