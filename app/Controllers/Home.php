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
        if (!session()->has('client')) {
            return redirect()->to('login');
        }

        return view('dashboard', [
            'client' => session()->get('client'),
        ]);
    }
}
