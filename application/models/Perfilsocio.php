<?php defined('BASEPATH') or exit('No direct script access allowed');
 
 class Perfilsocio extends CI_Model{
     function __construct()
     {
         parent::__construct();
         $this->load->database();
         $this->table = 'usuario';
         $this->id='id';
     }

     public function miperfil($usuario)
     {
        
   
     }
 }