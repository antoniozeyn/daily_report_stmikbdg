<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobdesk;

class JobdeskController extends Controller  {
    public function index()

    {
        $model = new Jobdesk;
        $model = $model->get();
        $data['jobdesk'] = $model;
        return view('job_desk.index', $data);
    }
}