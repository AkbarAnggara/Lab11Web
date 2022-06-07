<?php 
namespace App\Controllers; 
class Page extends BaseController 
{ 
    public function about() 
    { 
            return view('about', [
                'title' => 'Halaman About',
                'content' => 'Ini adalah Halaman About yang menjelaskan tentang isi halaman ini'
            ]);
        }
    public function contact() 
    { 
        return view('contact', [
            'title' => 'Contact Us',
            'content' => 'Ini adalah Halaman Contact Us.'
        ]);
    } 
    public function faqs() 
    { 
        echo "Ini adalah halaman FAQ"; 
    } 
    public function TOS()
    {
        echo "Ini adalah Halaman Term of Services";
    }
    public function article()
    {
        return view('article', [
            'title' => 'Halaman Article',
            'content' => 'Ini adalah Halaman Article'
        ]);
    }
}