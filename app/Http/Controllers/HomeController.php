<?php

namespace App\Http\Controllers;

use App\Services\SeoService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the landing page
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $seo = SeoService::generateMeta('home');
        
        $breadcrumbs = [
            ['name' => 'الرئيسية', 'url' => url('/')],
        ];
        
        return view('landing', compact('seo', 'breadcrumbs'));
    }
    
    /**
     * Display the features page
     * 
     * @return \Illuminate\View\View
     */
    public function features()
    {
        $seo = SeoService::generateMeta('features');
        
        $breadcrumbs = [
            ['name' => 'الرئيسية', 'url' => url('/')],
            ['name' => 'المميزات', 'url' => url('/features')],
        ];
        
        return view('features', compact('seo', 'breadcrumbs'));
    }
    
    /**
     * Display the pricing page
     * 
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        $seo = SeoService::generateMeta('pricing');
        
        $breadcrumbs = [
            ['name' => 'الرئيسية', 'url' => url('/')],
            ['name' => 'الأسعار', 'url' => url('/pricing')],
        ];
        
        return view('pricing', compact('seo', 'breadcrumbs'));
    }
    
    /**
     * Display the about page
     * 
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $seo = SeoService::generateMeta('about');
        
        $breadcrumbs = [
            ['name' => 'الرئيسية', 'url' => url('/')],
            ['name' => 'عن Beon', 'url' => url('/about')],
        ];
        
        return view('about', compact('seo', 'breadcrumbs'));
    }
    
    /**
     * Display the contact page
     * 
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $seo = SeoService::generateMeta('contact');
        
        $breadcrumbs = [
            ['name' => 'الرئيسية', 'url' => url('/')],
            ['name' => 'اتصل بنا', 'url' => url('/contact')],
        ];
        
        return view('contact', compact('seo', 'breadcrumbs'));
    }
}