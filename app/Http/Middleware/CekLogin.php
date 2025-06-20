<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('user_id')) {
            return redirect()->route('masuk')->withErrors([
                'error' => 'Silakan login terlebih dahulu.'
            ]);
        }

        $role = session('user_role');
        $path = $request->path(); 

        $allowedRoutes = [
            'mahasiswa' => 'dashboard-mahasiswa',
            'dosen' => 'dashboard-dosen',
            'perusahaan' => 'dashboard-perusahaan',
        ];

        if (isset($allowedRoutes[$role]) && $path !== $allowedRoutes[$role]) {
            return abort(403, 'Anda mengakses rute yang salah.');
        }

        return $next($request);
    }
}
