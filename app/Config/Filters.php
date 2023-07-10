<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'filteruser' => \App\Filters\FilterUser::class,
        'filtersiswa' => \App\Filters\FilterSiswa::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'filteruser' => [
                'except' => [
                    'auth', 'auth/*',
                    'home', 'home/*',
                    'penguji', 'penguji/*',
                    '/',


                ]
            ],
            'filtersiswa' => [
                'except' => [
                    'auth', 'auth/*',
                    'home', 'home/*',
                    '/',
                    'daftar', 'daftar/*',
                    'penguji', 'penguji/*',

                ]
            ],
        ],
        'after' => [
            'filteruser' => [
                'except' => [
                    'home', 'home/*',
                    '/',
                    'admin', 'admin/*',
                    'agama', 'agama/*',
                    'pendidikan', 'pendidikan/*',
                    'pekerjaan', 'pekerjaan/*',
                    'penghasilan', 'penghasilan/*',
                    'user', 'user/*',
                    'ta', 'ta/*',
                    'ppdb', 'ppdb/*',
                    'sekolah', 'sekolah/*',
                    'kelas', 'kelas/*',
                    'guru', 'guru/*',
                    'jadwal', 'jadwal/*',
                    'mapel', 'mapel/*',
                    'tinggal', 'tinggal/*',
                    'transportasi', 'transportasi/*',
                    'penguji', 'penguji/*',
                    'ruangan', 'ruangan/*',
                    'test', 'test/*',

                ]
            ],
            'filtersiswa' => [
                'except' => [
                    'home', 'home/*',
                    '/',
                    'siswa', 'siswa/*',
                    'wilayah', 'wilayah/*',

                ]
            ],
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
