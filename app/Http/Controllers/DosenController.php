<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

     public function biodata(){
        $nama = "Muhammad Ziyaad Syafiq";
        $umur = 20;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'pelajaran' => $pelajaran]);
    }
}
