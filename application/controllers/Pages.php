<?php 
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if( !file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			//if file doesnt exist at above path
			show_404();	
		}
		
		if ($page == 'myform')
		{
		
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            if ($this->form_validation->run() == FALSE)
            {                        
            	$this->load->view('myform');
            }
            else
            {
               $this->load->view('formsuccess');
            }
      	  
		}
		
		$data['title'] = ucfirst($page); //cap

		//load header , $page, and footer
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}
