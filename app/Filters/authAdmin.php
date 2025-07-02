<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/login')->with('error', 'Akses ditolak. Anda bukan admin.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
