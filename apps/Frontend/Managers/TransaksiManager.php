<?php
 
namespace App\Frontend\Managers;
 
use App\Frontend\Models\Transaksi;
 
class TransaksiManager extends BaseManager
{
    public function find()
    {
        return Transaksi::find();
    }

    public function findFirst($id)
    {
        return Transaksi::findFirst($id);
    }

    // public function create($data)
    // {
    //     $transaksi = new Transaksi();
    //     $transaksi->setNamaPenyumbang($data['nama']);
    //     $transaksi->setWaktuSumbangan(new \Phalcon\Db\RawValue('NOW()'));
        
    //     if (false === $transaksi->create()) {
    //         foreach ($transaksi->getMessages() as $message) {
    //             $error[] = (string) $message;
    //         }
    //         throw new \Exception(json_encode($error));
    //     }
    //     return $transaksi;
    // }

    // public function update($id, $data)
    // {
    //     $article = Article::findFirstById($id);
    //     if (!$article) {
    //         throw new \Exception('Article not found', 404);
    //     }
    //     $article->setArticleShortTitle($data['article_short_title']);
    //     $article->setUpdatedAt(new \Phalcon\Db\RawValue('NOW()'));
    //     if (false === $article->update()) {
    //         foreach ($article->getMessages() as $message) {
    //             $error[] = (string) $message;
    //         }
    //         throw new \Exception(json_encode($error));
    //     }
    //     return $article;
    // }

    // public function delete($id)
    // {
    //     $article = Article::findFirstById($id);
    //     if (!$article) {
    //         throw new \Exception('Article not found', 404);
    //     }
    //     if (false === $article->delete()) {
    //         foreach ($article->getMessages() as $message) {
    //             $error[] = (string) $message;
    //         }
    //         throw new \Exception(json_encode($error));
    //     }
    //     return true;
    // }

}
