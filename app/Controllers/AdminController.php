<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function daftarBuku(){
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();

        return view('admin/daftar-buku', $data);
    }

    public function createBuku(){
        $data = $this->request->getPost();
        $fileCover = $this->request->getFile('cover');

        if(!$fileCover->hasMoved()){
            $path = $fileCover->store('images');
            $data['cover'] = $path;
        }

        $bookModel = model('BookModel');

        if($bookModel->insert($data, false)){
            return redirect()->to('admin/daftar-buku')->with('berhasil', 'Data berhasil disimpan');
        }else{
            return redirect()->to('admin/daftar-buku')->with('error', 'Data gagal disimpan');
        }
    }
    public function hapusBuku()
    {
        $id = $this->request->getPost('id_hapus'); 
        $bookModel = model('BookModel'); 

        if ($bookModel->delete($id)) { 
            return redirect()->to('admin/daftar-buku')->with('berhasil', 'Data berhasil dihapus');
        } else {
            return redirect()->to('admin/daftar-buku')->with('error', 'Data gagal dihapus');
        }
    }
    public function editBuku()
    {
        $id = $this->request->getPost('id');
        $data = $this->request->getPost();
        unset($data['id']); 

        $fileCover = $this->request->getFile('cover');

        if ($fileCover && !$fileCover->hasMoved()) {
            
            $path = $fileCover->store('images');
            $data['GambarBunga'] = $path;
        }

        $bookModel = model('BookModel'); 

        if ($bookModel->update($id, $data)) {
            return redirect()->to('admin/daftar-bunga')->with('berhasil', 'Data berhasil diperbarui');
        } else {
            return redirect()->to('admin/daftar-bunga')->with('error', 'Data gagal diperbarui');
        }
    }


    public function transaksi(){
        return view('admin/transaksi');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }
}
