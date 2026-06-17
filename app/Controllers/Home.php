<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard(): string
    {
        helper('url');

        return view('dashboard');
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
