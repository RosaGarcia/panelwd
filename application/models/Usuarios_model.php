<?php 
class Usuarios_model extends CI_Model
{
    function  __construct() 
    { 
        parent:: __construct(); 
    }

    public function getUsuarios()
    {
    	$query=$this->db
    	->select("id,nombre,usuario,contrasena")
    	->from("usuarios")
        ->order_by("id","desc")
    	->get();
    	return $query->result();
    }

    public function insertar_usuario($datos=array())
    {
        $this->db->insert("usuarios",$datos);
        return true;
    }

    public function getUsuarioId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("id,nombre,usuario,contrasena")
        ->from("usuarios")
        ->where($where)
        ->order_by("id","desc")
        ->get();
        return $query->row();
    }

    public function modificar_usuario($datos=array(),$id)
    {
        $this->db->where('id',$id);
        $this->db->update('usuarios',$datos);
        return true;
    }

    public function eliminar($id=null)
    {
        $this->db->delete('usuarios',array('id' => $id));
        return true;
    } 
    
    /*Funcion añadida por lalo*/
    
    public function login($username, $password)
     {
       $this -> db -> select('id,usuario, contrasena');
       $this -> db -> from('usuarios');
       $this -> db -> where('usuario', $username);
       $this -> db -> where('contrasena', MD5($password));
       $this -> db -> limit(1);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
     }


}