<?php
class Admin_order_model extends CI_Model{
    function GET_ORDER_LISTS($limit, $offset){
        $this->db->select('tb1.id,tb1.date,tb1.code,count(tb2.order_id) as num_products,tb3.name as customer,tb1.grand_total');
        $this->db->select('tb1.viewed,tb1.delivery_status,tb1.payment_type,tb1.payment_status');
        $this->db->from('tbl_orders as tb1');
        $this->db->join('tbl_order_details as tb2','tb1.id=tb2.order_id','left');
        $this->db->join('tbl_users as tb3','tb1.user_id=tb3.id','left');
        $this->db->group_by('tb2.order_id');
        $query=$this->db->get();
        return $query->result();
    }

    function GET_NUM_ALL_ORDER(){
        return 1000;
    }
    function GET_ORDER_USER_DATA($order_id){
        $this->db->select('tb1.id,tb1.code,tb2.name,tb2.email,tb2.phone,tb1.shipping_address,tb1.delivery_status');
        $this->db->select('tb1.date,tb1.grand_total,tb1.payment_type,tb1.additional_info');
        $this->db->from('tbl_orders as tb1');
        $this->db->join('tbl_users as tb2','tb1.user_id=tb2.id','left');
        $query=$this->db->get();
        return $query->row();
    }
    function GET_ORDER_DETAILS($order_id){
        $this->db->select('tb1.id,tb2.variant,tb5.grand_total,tb3.file_name,tb1.price,tb1.quantity,tb4.name as product_name');
        $this->db->select('tb1.shipping_type,tb1.quantity_details');
        $this->db->from('tbl_order_details as tb1');
        $this->db->join('tbl_product_stocks as tb2',"tb1.variation=tb2.variant AND tb1.product_id=tb2.product_id","left");
        $this->db->join('tbl_uploads as tb3',"tb2.image=tb3.id","left");
        $this->db->join('tbl_products as tb4',"tb1.product_id=tb4.id","left");
        $this->db->join('tbl_orders as tb5','tb1.order_id=tb5.id','left');
        $this->db->where('tb1.order_id',$order_id);
        $query=$this->db->get();
        return $query->result();
    }
}