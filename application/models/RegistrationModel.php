<?php
class RegistrationModel extends CI_Model {

    public function insert_data($data) {
        $this->db->insert('provider_registration_form', $data);
        return $this->db->insert_id();
    }

}
