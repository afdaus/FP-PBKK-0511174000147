<?php
 
namespace App\Frontend\Models;
 
class Bantuan extends \Phalcon\Mvc\Model
{
    protected $bantuan_id;
    protected $id;
    protected $transaksi_id;
    protected $nilai_sumbangan;


    public function setBantuanId($bantuan_id)
    {
        $this->bantuan_id = $bantuan_id;
        return $this;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setTransaksiId($transaksi_id)
    {
        $this->transaksi_id = $transaksi_id;
        return $this;
    }
    public function setNilaiSumbangan($nilai_sumbangan)
    {
        $this->nilai_sumbangan = $nilai_sumbangan;
        return $this;
    }
    
    public function getBantuanId()
    {
        return $this->bantuan_id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTransaksiId()
    {
        return $this->transaksi_id;
    }
    public function getNilaiSumbangan()
    {
        return $this->nilai_sumbangan;
    }
    
}