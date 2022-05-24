<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Public_Controller
{

    /**
     * constructor method
     */
    public function __construct()
    {

        parent::__construct();
        $this->load->model("admin/page_model");
        $this->lang->load("pages", 'english');
        $this->load->model("admin/page_content_model");
        $this->lang->load("page_contents", 'english');
        $this->lang->load("system", 'english');
        //$this->output->enable_profiler(TRUE);


    }
    //---------------------------------------------------------------






    public function view_page($page_id)
    {

        $page_id = (int) $page_id;

        $this->data["pages"] = $page = $this->page_model->get_page($page_id);

        $this->data['pageTitle'] = $page[0]->page_title;
        $this->data['pageDescription'] = $page[0]->page_description;
        $this->data['pageKeywords'] = $page[0]->page_keywords;

        // $where = "`page_contents`.`status` IN (1) AND `page_contents`.`page_id` = $page_id ORDER BY `page_contents`.order";
        // $this->data["page_contents"] = $this->page_content_model->get_page_content_list($where, FALSE, FALSE);
        $query = "SELECT * FROM page_contents WHERE page_id = $page_id and status=1";
        $this->data["page_contents"] = $this->db->query($query)->result();

        $this->data["title"] = $page[0]->page_title;
        $this->data["view"] = PUBLIC_DIR . "pages/view_page";
        $this->load->view(PUBLIC_DIR . "layout", $this->data);
    }
    //-----------------------------------------------------

}
