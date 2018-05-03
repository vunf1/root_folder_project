<?php
class Tionmodel extends CI_Model{
    
    
    public function info()
    {    
        $query = $this->db->select('*')->from('produtos')->get();
                        
            foreach ($query->result_array() as $row)
            {
                        echo json_encode($row);
            }

    }



}
?>
