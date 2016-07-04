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
    	->from("Usuarios")
        ->order_by("id","desc")
    	->get();
    	return $query->result();
    }        
    public function insertar_usuario($datos=array())
    {
        $this->db->insert("Usuarios",$datos);
        return true;
    }
    public function getUsuarioId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("id,nombre,usuario,contrasena")
        ->from("Usuarios")
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
    /*
    public function getUsuariosConEquipo()
    {
        $query=$this->db
        ->select("u.id as id_usuario,u.nombre,u.usuario,u.contresena,e.dyndns,e.usuario,e.contrasena")
        ->from("usuarios as u")
        ->join("equipo_usuario as e","u.id = e.id_usuario","inner")
        ->get();
        return $query->result();
    }*/

}