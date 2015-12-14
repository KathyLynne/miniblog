<?php
class Post_model extends CI_Model
{
  public $id;
  public $title;
  public $body;
  public $created;

  public function __construct()
  {
    parent::__construct();
  }

  public function get_all()
  {
    $query = $this->db->order_by('created', 'desc')->get('post');
    return $query->result();
  }

  public function get_by_id($id)
  {
    $query = $this->db->get_where('post', array('id' => $id));
    return $query->row();
  }

  private function create($post)
  {
    return $this->db->insert('post', $this);
  }

  private function edit($post)
  {
    $this->db->set('title', $this->title);
    $this->db->set('body', $this->body);
    $this->db->where('id', $this->id);
    return $this->db->update('post', $this);
  }

  public function delete(){
    $this->db->where('id', $this->id);
    return $this->db->delete('post');
  }

  public function save()
  {
    if (isset($this->id))
    {
      return $this->edit();
    }
    else
    {
      return $this->create();
    }
  }
}
/* End of file Post_model.php */
/* Location: ./application/models/Post_model.php */
