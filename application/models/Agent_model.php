<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Agent_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get agent by agent_id
     */
    function get_agent($agent_id)
    {
        return $this->db->get_where('agents',array('agent_id'=>$agent_id))->row_array();
    }
    
    /*
     * Get all agents count
     */
    function get_all_agents_count()
    {
        $this->db->from('agents');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all agents
     */
    function get_all_agents($params = array())
    {
        $this->db->order_by('agent_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('agents')->result_array();
    }
        
    /*
     * function to add new agent
     */
    function add_agent($params)
    {
        $this->db->insert('agents',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update agent
     */
    function update_agent($agent_id,$params)
    {
        $this->db->where('agent_id',$agent_id);
        return $this->db->update('agents',$params);
    }
    
    /*
     * function to delete agent
     */
    function delete_agent($agent_id)
    {
        return $this->db->delete('agents',array('agent_id'=>$agent_id));
    }
}