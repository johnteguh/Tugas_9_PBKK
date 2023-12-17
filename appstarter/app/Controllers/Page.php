<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function admin(): string
    {
        return view('admin/overview');
    }
}