<?php
namespace App\Frontend\Controllers;

use App\Frontend\Models\Transaksi;
use App\Frontend\Models\Bantuan;


class TransaksiController extends BaseController
{
    public function indexAction()
    {
 		return $this->dispatcher->forward(['action' => 'list']);
    }

    public function listAction()
    {
        $transaksi_manager = $this->getDI()->get(
            'frontend_transaksi_manager'
        );

        // Lakukan query dengan menambahkan sorting
        $transaksis = $transaksi_manager->find();
 
        $this->view->transaksis = $transaksis;
    }

    public function showAction($id)
    {
        $transaksi_manager = $this->getDI()->get(
            'frontend_transaksi_manager'
        );

        $bantuan_manager = $this->getDI()->get(
            'frontend_bantuan_manager'
        );

        $transaksi = $transaksi_manager->findFirst($id);
        $bantuans = $bantuan_manager->findTransaksi($id);

        $this->view->setVars(array(
            'transaksi' => $transaksi,
            'bantuans' => $bantuans
        ));

    }

    public function createAction()
    {
        
    }

    public function storeAction()
    {
        $transaksi = new Transaksi();
        $transaksi->nama_penyumbang = $this->request->getPost('nama');
        $transaksi->waktu_sumbangan = new \Phalcon\Db\RawValue('NOW()');
        $transaksi->save();

        $transaksi = Transaksi::findFirst([
            'conditions' => 'nama_penyumbang = :nama:',
            'bind' => [
                'nama' => $this->request->getPost('nama')
            ]
        ]);

        return $this->dispatcher->forward(['action' => 'list']);
    }

    public function tambahAction($id)
    {
        $this->view->transaksi_id = $id;
    }

    public function tambahStoreAction()
    {
        $bantuan = new Bantuan();
        $bantuan->id = $this->request->getPost('kategori_id');
        $bantuan->transaksi_id = $this->request->getPost('transaksi_id');
        $bantuan->nilai_sumbangan = $this->request->getPost('nilai');
        $bantuan->save();

        return $this->dispatcher->forward(['action' => 'list']);
    }

    public function bantuanAction($id)
    {
        $bantuan_manager = $this->getDI()->get(
            'frontend_bantuan_manager'
        );

        $bantuans = $bantuan_manager->findKategori($id);

        $this->view->bantuans = $bantuans;
    }

}
