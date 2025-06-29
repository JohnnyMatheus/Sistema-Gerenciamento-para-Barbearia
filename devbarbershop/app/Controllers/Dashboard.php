<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // proteção de sessão
        if (!session()->get('usuario')) {
            return redirect()->to('/login');
        }

        return view('dashboard');
    }
}
