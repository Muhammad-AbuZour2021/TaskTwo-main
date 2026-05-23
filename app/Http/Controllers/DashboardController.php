<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Plan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
          // الإحصائيات
        $usersCount = User::count();
        $productsCount = Product::count();
        $messagesCount = Contact::count();

        // آخر المستخدمين
        $latestUsers = User::latest()->take(5)->get();

        // آخر المنتجات
        $latestProducts = Product::latest()->take(5)->get();

        return view('Admin.index', compact('usersCount', 'productsCount', 'messagesCount', 'latestUsers', 'latestProducts'));
    }


   public function contact()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('Admin.contact', compact('contacts'));
    }

     public function index_User()
    {
         return view('home');
    }

}
