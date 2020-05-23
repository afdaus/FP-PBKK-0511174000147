<?php
 
namespace App\Frontend\Models;
 
class Kategori extends \Phalcon\Mvc\Model
{
    protected $id;
    protected $nama;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
        return $this;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getNama()
    {
        return $this->nama;
    }
    
}