<?php
 
namespace App\Frontend\Models;
 
class User extends \Phalcon\Mvc\Model
{
    protected $user_id;
    protected $user_nama;
    protected $email;
    protected $password;


    public function setTransaksiId($id)
    {
        $this->transaksi_id = $id;
        return $this;
    }
    public function setNamaPenyumbang($nama_penyumbang)
    {
        $this->nama_penyumbang = $nama_penyumbang;
        return $this;
    }
    public function setWaktuSumbangan($waktu_sumbangan)
    {
        $this->waktu_sumbangan = $waktu_sumbangan;
        return $this;
    }
    
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getUserNama()
    {
        return $this->user_nama;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    
}