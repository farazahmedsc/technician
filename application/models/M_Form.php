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

    public function form2_create($data)
    {
       $this->db->insert("h_form_up", $data);
       $result = $this->db->insert_id();
       return $result;
    } 

    public function form2_lastRow(){
        return $this->db->select('id')
        ->order_by('id','desc')
        ->limit(1)
        ->get('h_form_up')
        ->row();
    }

    public function form2_update($data)
    {
        $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('h_form_up', $data);
        $result = $this->db->affected_rows();
        return $result;
    }   

    public function get2()
    {
        $this->db->select('h.id, t.t_name as tech_name,h.tech_id, h.no_of_form, h.basic_info');
        $this->db->from('h_form_up h');
        $this->db->join('h_technician as t','t.t_id = h.tech_id', 'left');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getById2($id)
    {
        $query = $this->db->where("id =",$id)->get("h_form_up");
        return $query->row();
    }
}

?>