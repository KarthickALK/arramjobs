<?php
class idenModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $aadharfrontphoto = $this->input->post('aadharfrontphoto');
        $aadharbackphoto = $this->input->post('aadharbackphoto');
        $photo = $this->input->post('photo');
        
        $insert = array(
            'aadharfrontphoto' => $aadharfrontphoto,
            'aadharbackphoto' => $aadharbackphoto,
            'photo' => $photo
        );

        $this->db->insert('identification', $insert);
    }
}
?>
