<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard(): string|RedirectResponse
    {
        helper('url');

        return view('dashboard');
        if (!session()->has('client')) {
            return redirect()->to('login');
        }

        return view('dashboard', [
            'client' => session()->get('client'),
        ]);
    }

    public function caisse(): string
    {
        return view('page/caisse');
    }

    public function produits(): string
    {
        return view('page/produits');
    }
}
