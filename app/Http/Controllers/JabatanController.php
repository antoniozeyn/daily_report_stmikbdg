<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
class JabatanController extends Controller {
    
    public function index()
    {
        $model = new Jabatan;
        $model = $model->get();
        $data['jabatan'] = $model;
        return view('jabatan.index', $data);
    
    }
    public function tambah()
{
    return view('jabatan.tambah');
}   
}
