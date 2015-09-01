<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function test()
    {
        $store = array(
                'theme_path' => 'base_url',
                'theme' => 'nitro',
                'logo' => 'logo.png',
                'akhir' => array(
                        '2' => array(
                                'id' => '90',
                                'title' => 'title recursive',
                            ),                        
                        // '1' => 'satu', asdsad
                        // '3' => array(
                        //         'tema' => array(
                        //                 'pagi' => 'tema pagi',
                        //                 'siang' => 'tema siang',
                        //                 'malam' => array(
                        //                         'middle' => 'tema malam middle',
                        //                         'late' => 'tema malam late'
                        //                     )
                        //             )
                        //     )
                    ),
                'cart' => array(
                        'items' => 'item tes'
                    )
            );
        $cart = array(
                'theme_path' => 'base_url',
                'theme' => 'nitro',
                'logo' => 'logo.png',
                'akhir' => array()
            );
        $ok = array($store,$cart);
        return view($store['theme'].'.test')->with('oke', $ok)->with('msg', 'success');
    }
    public function index()
    {
        // echo ('tes halaman index');
        return view('nitro.test');
        // echo debug();
    }


}
