<?php 

class M_Form extends CI_Model {

    // !!--------------- General Functions --------------!!
    public function get()
    {
        $this->db->select('h_form.f_id, t.t_name as tech_name,h_form.tech_id, h_form.test_name, h_form.company_name, h_form.site_address, h_form.duct_location, h_form.email, h_form.number_of_bedroom, h_form.unit_type');
        $this->db->from('h_form');
        $this->db->join('h_technician as t','t.t_id = h_form.tech_id', 'left');



        $query = $this->db->get();
        
        return $query->result();
    }

    public function getTechForm($id)
    {
        $this->db->select('f_id, test_name, company_name, site_address, duct_location, email, number_of_bedroom, unit_type')->where('tech_id', $id);
        $query = $this->db->get('h_form');
        return $query->result();
    }


    
    public function getByIdWithTech($id){
        
        $this->db->select('*, t.t_name as tech_name');
        $this->db->from('h_form as hf');
        $this->db->join('h_technician as t','hf.tech_id = t.t_id ', 'left');
        $this->db->join('h_form as hfg','hfg.f_id ='. $id );
        //$this->db->where("f_id",$id);

        
        
    
        $query = $this->db->get("h_form");
        return $query->row();
    }

    public function getById($id)
    {
        $query = $this->db->where("f_id =",$id)->get("h_form");
        return $query->row();
    }

    public function create($data)
    {
       $this->db->insert("h_form", $data);
       $result = $this->db->insert_id();
       return $result;
    } 

    public function update($data)
    {
        $id = $data['f_id'];
        $this->db->where('f_id', $id);
        $this->db->update('h_form', $data);
        $result = $this->db->affected_rows();
        return $result;
    }   

    public function delete($data)
    {
        $id = $data['f_id'];
        $this->db->where('f_id', $id);
        $this->db->delete('h_form'); 
        return $this->db->affected_rows();
    }

    

}

?>