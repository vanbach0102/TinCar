<?php

class OrderModel extends CI_Model{


	
	public function selectOrder(){

		$query = $this->db->select('orders.*,shipping.*')
		->from('orders')
		->join('shipping','orders.ship_id = shipping.id')
		->get();
		return $query->result();
	}
	public function selectOrderDetail($order_code){

		$query = $this->db->select('orders.order_code, orders.status as order_status, oder_details.quantity as qty,oder_details.*,products.*')
		->from('oder_details')
		->join('products','oder_details.product_id = products.id')
		->join('orders','orders.order_code = oder_details.order_code')
		->where('oder_details.order_code',$order_code)
		->get();
		return $query->result();
	}
	public function deleteOrder($order_code){
		return $this->db->delete('orders',['order_code' => $order_code]);
	}
	public function deleteOrderDetail($order_code){
		return $this->db->delete('oder_details',['order_code' => $order_code]);

	}
	public function updateOrder($data,$order_code){
		return $this->db->update('orders',$data,['order_code'=>$order_code]);
	}
}
?>
