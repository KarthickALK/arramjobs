<?php
class Registration_model extends CI_Model {

public function __construct() {
    parent::__construct();
}

public function insert_registration_data($data) {
    $this->db->insert('registration_form', $data);
    return $this->db->insert_id(); 
}
}
?>
