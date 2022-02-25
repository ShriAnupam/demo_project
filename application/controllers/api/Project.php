<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Project extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_get($id = 0)
    {
        if(!empty($id)){
            $data = $this->db->get_where("project", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("project")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
    }
      


}