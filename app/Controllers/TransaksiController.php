<?php
 
namespace App\Controllers;
 
use App\Models\MTransaksi;
 
class TransaksiController extends RestfulController
{
    public function create()
{
        $data = [
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'nama_transaksi' => $this->request->getVar('nama_transaksi'),
            'nominal' => $this->request->getVar('nominal')
        ];

        $model = new MTransaksi();
        $model->insert($data);
        $transaksi = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $transaksi);
} 

    public function list()
{
     $model = new MTransaksi();
     $transaksi = $model->findAll();
     return $this->responseHasil(200, true, $transaksi);
} 

    public function detail($id)
{
     $model = new MTransaksi();
     $transaksi = $model->find($id);
     return $this->responseHasil(200, true, $transaksi);
} 

    public function ubah($id)
{
    $data = [
        'kode_transaksi' => $this->request->getVar('kode_transaksi'),
        'nama_transaksi' => $this->request->getVar('nama_transaksi'),
        'nominal' => $this->request->getVar('nominal')
    ];

    $model = new MTransaksi();
    $model->update($id, $data);
    $transaksi = $model->find($id);

    return $this->responseHasil(200, true, $transaksi);
} 

    public function hapus($id)
{
    $model = new MTransaksi();
    $transaksi = $model->delete($id);

    return $this->responseHasil(200, true, $transaksi);
} 


     
} 