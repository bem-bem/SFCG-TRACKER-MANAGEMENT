<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function alertSweat()
    {
        if (session('success')) {
            Alert::success('success', session('success'));
        }
        return;
    }

    public function alertDanger()
    {
        if (session('danger')) {
            Alert::error('error', session('danger'));
        }
        return;
    }
}
