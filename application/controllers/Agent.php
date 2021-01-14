<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Agent extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agent_model');
    } 

    /*
     * Listing of agents
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('agent/index?');
        $config['total_rows'] = $this->Agent_model->get_all_agents_count();
        $this->pagination->initialize($config);

        $data['agents'] = $this->Agent_model->get_all_agents($params);
        
        $data['_view'] = 'agent/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new agent
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom_agent','Nom Agent','max_length[75]|required');
		$this->form_validation->set_rules('contact','Contact','max_length[25]|required');
		$this->form_validation->set_rules('centre_relais','Centre Relais','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'centre_relais' => $this->input->post('centre_relais'),
				'nom_agent' => $this->input->post('nom_agent'),
				'contact' => $this->input->post('contact'),
				'date_created' => date('Y-m-d H:i:s'),
				'adresse' => $this->input->post('adresse'),
            );
            
            $agent_id = $this->Agent_model->add_agent($params);
            redirect('agent/index');
        }
        else
        {
			$this->load->model('Centre_model');
			$data['all_centres'] = $this->Centre_model->get_all_centres();
            
            $data['_view'] = 'agent/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a agent
     */
    function edit($agent_id)
    {   
        // check if the agent exists before trying to edit it
        $data['agent'] = $this->Agent_model->get_agent($agent_id);
        
        if(isset($data['agent']['agent_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom_agent','Nom Agent','max_length[75]|required');
			$this->form_validation->set_rules('contact','Contact','max_length[25]|required');
			$this->form_validation->set_rules('centre_relais','Centre Relais','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'centre_relais' => $this->input->post('centre_relais'),
					'nom_agent' => $this->input->post('nom_agent'),
					'contact' => $this->input->post('contact'),
					
					'last_update' => date('Y-m-d H:i:s'),
					'adresse' => $this->input->post('adresse'),
                );

                $this->Agent_model->update_agent($agent_id,$params);            
                redirect('agent/index');
            }
            else
            {
				$this->load->model('Centre_model');
				$data['all_centres'] = $this->Centre_model->get_all_centres();

                $data['_view'] = 'agent/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The agent you are trying to edit does not exist.');
    } 

    /*
     * Deleting agent
     */
    function remove($agent_id)
    {
        $agent = $this->Agent_model->get_agent($agent_id);

        // check if the agent exists before trying to delete it
        if(isset($agent['agent_id']))
        {
            $this->Agent_model->delete_agent($agent_id);
            redirect('agent/index');
        }
        else
            show_error('The agent you are trying to delete does not exist.');
    }
    
}
