<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function login(): RedirectResponse
    {
        $email = trim((string) $this->request->getPost('email'));
        $password = (string) $this->request->getPost('password');

        try {
            $db = new \SQLite3(realpath(ROOTPATH . 'database/supermarket.db'));
            $result = $db->querySingle("SELECT * FROM client WHERE email = '$email'", true);

            if ($result && $result['mot_de_passe'] === $password) {
                session()->set('client', [
                    'id' => $result['id'],
                    'nom' => $result['nom'],
                    'email' => $result['email'],
                ]);

                return redirect()->to('dashboard');
            }

            session()->setFlashdata('error', 'Email ou mot de passe incorrect.');
            return redirect()->back()->withInput();
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'Erreur: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function logout(): RedirectResponse
    {
        session()->remove('client');

        return redirect()->to('login');
    }
}

