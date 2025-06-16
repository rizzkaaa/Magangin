<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/dashboard-dosen', function () {
    return view('dashboard-dosen');
});
// Route::get('/test', function () {
//     return view('test');
// });















Route::get('/cobe', function () {
    return view('cobe');
});
Route::get('/cobe2', function () {
    return view('cobe2');
});

use Illuminate\Support\Facades\DB;

Route::get('/users', function () {
    $query = DB::table('users-test');

    // Ambil parameter "peran" dari URL jika ada
    if (request()->has('peran')) {
        $query->where('peran', request('peran'));
    }

    if (request()->has('id_users')) {
        $query->where('id_users', request('id_users'));
    }

    $users = $query->get();

    return response()->json($users);
});

// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;

Route::get('/setup-users', function () {
    // 1. Buat tabel jika belum ada
    // if (!Schema::hasTable('users-test')) {
    //     Schema::create('users-test', function (Blueprint $table) {
    //         $table->string('id_users', 10)->primary();
    //         $table->string('email', 50);
    //         $table->string('no_telp', 20);
    //         $table->string('password', 255);
    //         $table->enum('peran', ['peserta', 'dosen', 'perusahaan']);
    //         $table->timestamps();
    //     });
    // }

    // 2. Tambahkan 10 data dummy
    for ($i = 1; $i <= 10; $i++) {
        DB::table('users-test')->insert([
            'id_users' => 'USR' . str_pad($i, 3, '0', STR_PAD_LEFT),
            'email' => 'user' . $i . '@example.com',
            'no_telp' => '0812345678' . $i,
            'password' => bcrypt('password'),
            'peran' => collect(['peserta', 'dosen', 'perusahaan'])->random(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return 'Tabel users berhasil dibuat dan diisi 10 data dummy!';
});

