<?php 
class Equipos_model extends CI_Model
{
    function  __construct() 
    { 
        parent:: __construct(); 
    }

    public function getEquipos()
    {
    	$query=$this->db
    	->select("id,dyndns")
    	->from("equipos")
        ->order_by("id","desc")
    	->get();
    	return $query->result();
    }

    public function insertarEquipos($datos=array())
    {
        $this->db->insert("equipos",$datos);
        return true;
    }

    public function getEditEquipos($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("dyndns,usuario,contrasena")
        ->from("equipos")
        ->where($where)
        ->get();
        return $query->row();
    }

    public function editEquipos($datos=array(),$id)
    {
        $this->db->where('id',$id);
        $this->db->update('equipos',$datos);
        return true;
    }

    public function showEquipo($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("dyndns")
        ->from("equipos")
        ->where($where)
        ->get();
        return $query->row();
    }

    public function iframeEquipo($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("dyndns,usuario,contrasena")
        ->from("equipos")
        ->where($where)
        ->get();
        return $query->row();
    }

    public function eliminar($id=null)
    {
        $this->db->delete('equipos',array('id' => $id));
        return true;
    } 
    


}