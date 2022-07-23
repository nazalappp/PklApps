<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu(){
        $a = [
            array('beranda' => 'Beranda', 'berita' => 'Berita', 'list' => 'Olahraga', 'olga' => ['Sepak Bola', 'Bulutangkis'],
            'list2' => ['Politik', 'Manca Negara'],'tentang' => 'Tentang'),
        ];
        // dd($a);
        return view('pages.menu', ['menu' => $a]);
    }

    public function dosen(){
        $b = [
            ['dosen' => 'Dosen 1',
            'nama' => 'Yusuf Bachtiar',
            'matkul' => 'Pemrogragam Mobile', 
            'mahasiswa' => [
            [
                'namamahasiswa' => 'Muhammad Sholeh', 
                'nilai' => 78
            ],
            [
                'namamahasiswa' => 'Jujun Junaedi', 
                'nilai' => 85
            ],
            [
                'namamahasiswa' => 'Mamat Alkatiri', 
                'nilai' => 90
            ],
            [
                'namamahasiswa' => 'Ubay Holin', 
                'nilai' => 87
            ],
            [
                'namamahasiswa' => 'Fadillah', 
                'nilai' => 95
            ],
            ]
        ],
        ['dosen' => 'Dosen 2',
            'nama' => 'Yaris Riyadi',
            'matkul' => 'Pemrogragam Web', 
            'mahasiswa' => [
            [
                'namamahasiswa' => 'Alfred McTomminay', 
                'nilai' => 67
            ],
            [
                'namamahasiswa' => 'Bruno Kasmir', 
                'nilai' => 90
            ],
            [
                'namamahasiswa' => 'Akid Hendra', 
                'nilai' => 50
            ],
            [
                'namamahasiswa' => 'Dany Irawan', 
                'nilai' => 70
            ],
            [
                'namamahasiswa' => 'Chandra Mega Putra', 
                'nilai' => 60
            ],
            ]
        ]
    ];
        // dd($b);
        return view('pages.dosen', ['dosen' => $b]);
    }

    public function siaran(){
        $s = [
            [
                'saluran' => 'NET TV',
                'jadwal' => [
                    [
                        'siaran' => 'One Championship',
                        'jam' => '00.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'Comedy Night Live',
                        'jam' => '01.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'Ini Talk Show',
                        'jam' => '03.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'JATANRAS',
                        'jam' => '04.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'Menjemput Berkah',
                        'jam' => '05.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                ],
            ],
            [
                'saluran' => 'TVRI',
                'jadwal' => [
                    [
                        'siaran' => 'JEJAK ISLAM',
                        'jam' => '04.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'SERAMBI ISLAMI',
                        'jam' => '04.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'KLIK INDONESIA PAGI',
                        'jam' => '06.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'SALAM OLAHRAGA',
                        'jam' => '07.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'INFO COVID 19 TERKINI',
                        'jam' => '07.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                ],
            ],
            [
                'saluran' => 'BEINSPORT',
                'jadwal' => [
                    [
                        'siaran' => 'Vila Real',
                        'jam' => '00.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'Moussa Dembele',
                        'jam' => '01.18 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'Paris Day 4 Match 4',
                        'jam' => '01.28 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'Episode Number 10',
                        'jam' => '03.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'LA Galaxy vs San Jose',
                        'jam' => '03.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                ],
            ],
            [
                'saluran' => 'OChannel',
                'jadwal' => [
                    [
                        'siaran' => 'VOLLEYBALL NATIONS LEAGUE 2022(LIVE) Turki (W) vs Thailand (W)',
                        'jam' => '00.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'VOLLEYBALL NATIONS LEAGUE 2022(RECORDED) Bulgaria (W) vs Turki (W)',
                        'jam' => '01.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'VOLLEYBALL NATIONS LEAGUE 2022(RECORDED) Argentina (M) vs Belanda (M)',
                        'jam' => '03.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'KLINIKI PIRAMIDAS',
                        'jam' => '05.30 am',
                        'tanggal' => '15 July 2022',
                    ],
                    [
                        'siaran' => 'SPORT WOMAN',
                        'jam' => '06.00 am',
                        'tanggal' => '15 July 2022',
                    ],
                ],
            ],
            [
                'saluran' => 'Indosiar',
                'jadwal' => [
                    [
                        'siaran' => 'Via & Chevra Ever After',
                        'jam' => '08.00 am',
                        'tanggal' => '14 July 2022',
                    ],
                    [
                        'siaran' => 'Kisah Nyata Spesial',
                        'jam' => '11.30 am',
                        'tanggal' => '14 July 2022',
                    ],
                    [
                        'siaran' => 'Beratnya Berbagi Suami Dengan Sahabat Sendiri',
                        'jam' => '14.30 pm',
                        'tanggal' => '14 July 2022',
                    ],
                    [
                        'siaran' => 'Aku Harus Sabar Menghadapi Sisi Gelap Suami Ku',
                        'jam' => '16.00 pm',
                        'tanggal' => '14 July 2022',
                    ],
                    [
                        'siaran' => 'Panggilan',
                        'jam' => '17.30 am',
                        'tanggal' => '14 July 2022',
                    ],
                ],
            ],
        ];
        // dd($s);
        return view('pages.siaran', ['siaran' => $s]);
    }
}