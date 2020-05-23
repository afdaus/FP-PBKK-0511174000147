<?php
 
namespace App\Frontend\Models;
 
class Transaksi extends \Phalcon\Mvc\Model
{
    protected $transaksi_id;
    protected $nama_penyumbang;
    protected $waktu_sumbangan;

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
    
    public function getTransaksiId()
    {
        return $this->transaksi_id;
    }
    public function getNamaPenyumbang()
    {
        return $this->nama_penyumbang;
    }
    public function getWaktuSumbangan()
    {
        return $this->waktu_sumbangan;
    }

}