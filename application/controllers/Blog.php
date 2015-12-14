<?php
class Blog extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();

      $this->load->database();
      $this->load->helper('url');
      $this->load->helper('html');
      $this->load->model('Post_model', 'post');
    }

    public function index()
    {
      $data['posts'] = $this->post->get_all();

      $this->load->view('templates/header');
      $this->load->view('blog/index', $data);
      $this->load->view('templates/footer');
    }

    public function details()
    {
      $id = $this->uri->segment(3);
      $data['post'] = $this->post->get_by_id($id);

      $this->load->view('templates/header');
      $this->load->view('blog/details', $data);
      $this->load->view('templates/footer');
    }

    public function create()
    {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[255]');
      $this->form_validation->set_rules('body', 'Body', 'trim|required|max_length[500]');
      
      $data['action'] = site_url('blog/create');
      $data['title'] = NULL;
      $data['body'] = NULL;

      if($_POST)
      {
        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('templates/header');
          $this->load->view('blog/create', $data);
          $this->load->view('templates/footer');
        }
        else
        {
          $this->load->helper('security');
          $post = new Post_model();
          $post->title = xss_clean($this->input->post('title', TRUE));
          $post->body = xss_clean($this->input->post('body', TRUE));
          $date = new DateTime();
          $post->created = $date->format('Y-m-d H:i:s');

          if($post->save())
          {
            redirect(base_url(), 'location');
          }
        }
      }
      else
      {
        $this->load->view('templates/header');
        $this->load->view('blog/create', $data);
        $this->load->view('templates/footer');
      }
    }

    public function edit()
    {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $id = $this->uri->segment(3);
      $post = $this->post->get_by_id($id);

      $this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[255]');
      $this->form_validation->set_rules('body', 'Body', 'trim|required|max_length[500]');
      $data['action'] = site_url('blog/edit/'.$id);
      $data['post'] = $post;

      if($_POST)
      {
        if ($this->form_validation->run() == FALSE)
        {
          $this->load->view('templates/header');
          $this->load->view('blog/edit', $data);
          $this->load->view('templates/footer');
        }
        else
        {
          $this->load->helper('security');
          $post = new Post_model();
          $post->id = xss_clean($this->uri->segment(3));
          $post->title = xss_clean($this->input->post('title', TRUE));
          $post->body = xss_clean($this->input->post('body', TRUE));
          $date = new DateTime();
          $post->created = $date->format('Y-m-d H:i:s');

          if($post->save())
          {
            redirect(base_url('blog/details/'.$post->id), 'location');
          }
        }
      }
      else
      {
        $this->load->view('templates/header');
        $this->load->view('blog/edit', $data);
        $this->load->view('templates/footer');
      }
    }

    public function delete()
    {
      $post = new Post_model();
      $post->id= $this->uri->segment(3);
      if($post->delete())
      {
        redirect(base_url(), 'location');
      }
    }

}
/* End of file Blog.php */
/* Location: ./controllers/Blog.php */
