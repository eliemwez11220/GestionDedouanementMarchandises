<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cotation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cotation_model');
    } 

    /*
     * Listing of cotations
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('cotation/index?');
        $config['total_rows'] = $this->Cotation_model->get_all_cotations_count();
        $this->pagination->initialize($config);

        $data['cotations'] = $this->Cotation_model->get_all_cotations($params);
        
        $data['_view'] = 'cotation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new cotation
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('numCotation','NumCotation','required');
		$this->form_validation->set_rules('dateCotation','DateCotation','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'honoraire' => $this->input->post('honoraire'),
				'tva' => $this->input->post('tva'),
				'frais_transit' => $this->input->post('frais_transit'),
				'seguce' => $this->input->post('seguce'),
				'montant' => $this->input->post('montant'),
				'cot_id' => $this->input->post('cot_id'),
				'numCotation' => $this->input->post('numCotation'),
				'dateCotation' => $this->input->post('dateCotation'),
				'concernee' => $this->input->post('concernee'),
				'periode' => $this->input->post('periode'),
				'facture' => $this->input->post('facture'),
				'marque' => $this->input->post('marque'),
				'dgda' => $this->input->post('dgda'),
				'redevance' => $this->input->post('redevance'),
				'fpi' => $this->input->post('fpi'),
				'ogefrem' => $this->input->post('ogefrem'),
				'pors_soins' => $this->input->post('pors_soins'),
				'intervention' => $this->input->post('intervention'),
            );
            
            $cotation_id = $this->Cotation_model->add_cotation($params);
            redirect('cotation/index');
        }
        else
        {            
            $data['_view'] = 'cotation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a cotation
     */
    function edit($id)
    {   
        // check if the cotation exists before trying to edit it
        $data['cotation'] = $this->Cotation_model->get_cotation($id);
        
        if(isset($data['cotation']['']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('numCotation','NumCotation','required');
			$this->form_validation->set_rules('dateCotation','DateCotation','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'honoraire' => $this->input->post('honoraire'),
					'tva' => $this->input->post('tva'),
					'frais_transit' => $this->input->post('frais_transit'),
					'seguce' => $this->input->post('seguce'),
					'montant' => $this->input->post('montant'),
					'cot_id' => $this->input->post('cot_id'),
					'numCotation' => $this->input->post('numCotation'),
					'dateCotation' => $this->input->post('dateCotation'),
					'concernee' => $this->input->post('concernee'),
					'periode' => $this->input->post('periode'),
					'facture' => $this->input->post('facture'),
					'marque' => $this->input->post('marque'),
					'dgda' => $this->input->post('dgda'),
					'redevance' => $this->input->post('redevance'),
					'fpi' => $this->input->post('fpi'),
					'ogefrem' => $this->input->post('ogefrem'),
					'pors_soins' => $this->input->post('pors_soins'),
					'intervention' => $this->input->post('intervention'),
                );

                $this->Cotation_model->update_cotation($id,$params);            
                redirect('cotation/index');
            }
            else
            {
                $data['_view'] = 'cotation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cotation you are trying to edit does not exist.');
    } 

    /*
     * Deleting cotation
     */
    function remove($id)
    {
        $cotation = $this->Cotation_model->get_cotation($id);

        // check if the cotation exists before trying to delete it
        if(isset($cotation['']))
        {
            $this->Cotation_model->delete_cotation($id);
            redirect('cotation/index');
        }
        else
            show_error('The cotation you are trying to delete does not exist.');
    }
    
}
