<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 21/06/13
 * Time: 14:39
 * To change this template use File | Settings | File Templates.
 */

class airtel_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
    }

    public function record_count($slug = false)
    {
        return $this->db->count_all($slug);
    }

    public function get_data($table = "", $select = false, $where = false, $limit = false, $start = false, $like = false)
    {
        if ($limit != false) {
            $this->db->limit($limit, $start);
        }
        if ($select != false) {
            $this->db->select($select);
        }
        if($where != false){
            $this->db->where($where);
        }
        if($like != false){
            $this->db->like('date',$like);
        }
        $query = $this->db->get($table);
//        echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return array();
    }

    public function delete($table, $vars)
    {
        $this->db->delete($table,$vars);
    }

    function add_response($data){
        $this->db->where('id', $data['query_id']);
        $this->db->update('query', array('solved'=>1));
        $this->db->insert('response', $data);
    }

    public function update_response($id, $vars){
        $this->db->where('id', $id);
        $this->db->update('response', $vars);
    }

    function delete_response(){
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('response');
    }

    function del_cat(){
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('category');
    }

}