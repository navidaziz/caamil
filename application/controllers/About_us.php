<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends Public_Controller
{

    /**
     * constructor method
     */
    public function __construct()
    {

        parent::__construct();
        $this->load->model("admin/contact_us_page_model");
        $this->lang->load("contact_us_page", 'english');
        $this->lang->load("system", 'english');
        //$this->output->enable_profiler(TRUE);


    }
    //---------------------------------------------------------------


    /**
     * Default action to be called
     */
    public function index()
    {
        $contact_us_page_id = 1;
        $this->data["contact_us_page"] = "";
        $this->data['pageTitle'] = "";
        $this->data['pageDescription'] = "";
        $this->data['pageKeywords'] = "";
        $this->data["title"] = "About Us";
        $this->data["view"] = PUBLIC_DIR . "about_us/about_us";
        $this->load->view(PUBLIC_DIR . "layout", $this->data);
    }
}
