<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Vaccin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Vaccin_model');
    } 

    /*
     * Listing of vaccins
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('vaccin/index?');
        $config['total_rows'] = $this->Vaccin_model->get_all_vaccins_count();
        $this->pagination->initialize($config);

        $data['vaccins'] = $this->Vaccin_model->get_all_vaccins($params);
        
        $data['_view'] = 'vaccin/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new vaccin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('tranche_age','Tranche Age','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'campage_sid' => $this->input->post('campage_sid'),
				'nom' => $this->input->post('nom'),
				'type_vaccin' => $this->input->post('type_vaccin'),
				'tranche_age' => $this->input->post('tranche_age'),
				'date_created' => $this->input->post('date_created'),
				'last_update' => $this->input->post('last_update'),
				'observation' => $this->input->post('observation'),
            );
            
            $vaccin_id = $this->Vaccin_model->add_vaccin($params);
            redirect('vaccin/index');
        }
        else
        {
			$this->load->model('Campagne_model');
			$data['all_campagnes'] = $this->Campagne_model->get_all_campagnes();
            
            $data['_view'] = 'vaccin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a vaccin
     */
    function edit($vacc_id)
    {   
        // check if the vaccin exists before trying to edit it
        $data['vaccin'] = $this->Vaccin_model->get_vaccin($vacc_id);
        
        if(isset($data['vaccin']['vacc_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom','Nom','required');
			$this->form_validation->set_rules('tranche_age','Tranche Age','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'campage_sid' => $this->input->post('campage_sid'),
					'nom' => $this->input->post('nom'),
					'type_vaccin' => $this->input->post('type_vaccin'),
					'tranche_age' => $this->input->post('tranche_age'),
					'date_created' => $this->input->post('date_created'),
					'last_update' => $this->input->post('last_update'),
					'observation' => $this->input->post('observation'),
                );

                $this->Vaccin_model->update_vaccin($vacc_id,$params);            
                redirect('vaccin/index');
            }
            else
            {
				$this->load->model('Campagne_model');
				$data['all_campagnes'] = $this->Campagne_model->get_all_campagnes();

                $data['_view'] = 'vaccin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The vaccin you are trying to edit does not exist.');
    } 

    /*
     * Deleting vaccin
     */
    function remove($vacc_id)
    {
        $vaccin = $this->Vaccin_model->get_vaccin($vacc_id);

        // check if the vaccin exists before trying to delete it
        if(isset($vaccin['vacc_id']))
        {
            $this->Vaccin_model->delete_vaccin($vacc_id);
            redirect('vaccin/index');
        }
        else
            show_error('The vaccin you are trying to delete does not exist.');
    }
    
}