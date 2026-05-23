<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogSection;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Product;
use App\Models\ScanningSolution;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



 public function index()
{
    $productsCount = Product::count();
    $usersCount = User::count();

    $clinicsCount = Contact::distinct('clinic_name')->count('clinic_name');

    return view('index', compact('productsCount', 'usersCount', 'clinicsCount'));
}
    public function why_lazord()
    {


        $productsCount = Product::count();

        $usersCount = User::count();


        $clinicsCount = Contact::distinct('clinic_name')->count('clinic');

        $faqs = Faq::latest()->get();

        return view('why-lazord', compact('faqs', 'productsCount', 'usersCount', 'clinicsCount'));
    }
    public function solutions()
    {
        $solutions = ScanningSolution::with('features')->get();
$blogs = BlogSection::latest()->get();
        return view('solutions', compact('solutions', 'blogs'));
    }
    public function pricing()
    {

        $plans = Plan::with('features')->get();
        return view('pricing', compact('plans'));

    }
    public function learn()
    {
        $faqs = Faq::latest()->get();
$blogs = BlogSection::latest()->get();

        $articles = Article::where('is_active', 1)->get();
        return view('learn', compact('faqs', 'articles', 'blogs'));
    }
    public function lab_services()
    {


        $productsCount = Product::count();

        $usersCount = User::count();


        $clinicsCount = Contact::distinct('clinic_name')->count('clinic');


        $products = Product::where('is_active', 1)->get();

        $solutions = ScanningSolution::with('features')->get();

        return view('lab-services', compact('products', 'solutions', 'productsCount', 'usersCount', 'clinicsCount'));
    }



    public function contact_store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        Contact::create($request->all());

        return response()->json([
            'message' => 'تم إرسال الطلب بنجاح'
        ]);
    }




    public function __construct()
    {
        $this->middleware('auth')->except([
            'index',
            'why_lazord',
            'solutions',
            'pricing',
            'learn',
            'lab_services',
            'contact_store'
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
}
