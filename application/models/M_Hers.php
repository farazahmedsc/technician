<?php 

class M_Hers extends CI_Model {

    // !!--------------- General Functions --------------!!






    public function countPu(){
        //$where = "order_h_technician_id='$id' OR order_h_technician_id2='$id'";
        $this->db->where('unit_type','Package_Unit'); 
        return $this->db->count_all_results('h_form');
    }

    public function countCs(){
        //$where = "order_h_technician_id='$id' OR order_h_technician_id2='$id'";
        $this->db->where('unit_type','Central_Split_AC'); 
        return $this->db->count_all_results('h_form');
    }

    public function countHp(){
        //$where = "order_h_technician_id='$id' OR order_h_technician_id2='$id'";
        $this->db->where('unit_type','Heat_Pump'); 
        return $this->db->count_all_results('h_form');
    }

    public function countDu(){
        //$where = "order_h_technician_id='$id' OR order_h_technician_id2='$id'";
        $this->db->where('unit_type','Ductless_Unit'); 
        return $this->db->count_all_results('h_form');
    }


    
    public function get()
    {
        $query = $this->db->get('h_user');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where("t_id =",$id)->get("h_technician");
        return $query->row();
    }

    public function create($data)
    {
       $this->db->insert("h_technician", $data);
       $result = $this->db->insert_id();
       return $result;
    } 

    public function update($data)
    {
        $id = $data['u_id'];
        $this->db->where('u_id', $id);
        $this->db->update('h_user', $data);
        $result = $this->db->affected_rows();
        return $result;
    }

    public function delete($data)
    {
        $id = $data['t_id'];
        $this->db->where('t_id', $id);
        $this->db->delete('h_technician'); 
        return $this->db->affected_rows();
    }

    // public function countOrder($id){

    //     $where = "order_h_technician_id='$id' OR order_h_technician_id2='$id'";
    //     $this->db->where($where); 
    //     return $this->db->count_all_results('order');
    // }

    public function login($data)
    {
        $query = $this->db->where("u_username=",$data['u_username'])->get("h_user");
        if($query->num_rows() > 0) {

            // var_dump($query->row());
            $user = $query->result_array()[0];
            // if( password_verify($data['user_pass'], $user['user_pass']) ) {
            if( $data['u_password'] == $user['u_password'] ) {
                
                return $user;

            } else {

                return "Wrong Password";

            }

        } else {

            return "No User Found";

        }
    }

    

}

?>