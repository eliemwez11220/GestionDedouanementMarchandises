<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Marchandise_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get marchandise by mar_id
     */
    function get_marchandise($mar_id)
    {
        return $this->db->get_where('marchandises',array('mar_id'=>$mar_id))->row_array();
    }
    
    /*
     * Get all marchandises count
     */
    function get_all_marchandises_count()
    {
        $this->db->from('marchandises');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all marchandises
     */
    function get_all_marchandises($params = array())
    {
        $this->db->order_by('mar_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('marchandises')->result_array();
    }
        
    /*
     * function to add new marchandise
     */
    function add_marchandise($params)
    {
        $this->db->insert('marchandises',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update marchandise
     */
    function update_marchandise($mar_id,$params)
    {
        $this->db->where('mar_id',$mar_id);
        return $this->db->update('marchandises',$params);
    }
    
    /*
     * function to delete marchandise
     */
    function delete_marchandise($mar_id)
    {
        return $this->db->delete('marchandises',array('mar_id'=>$mar_id));
    }
}
