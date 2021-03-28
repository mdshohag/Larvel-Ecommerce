<?php


namespace App\Http\Controllers;
use App\Merchant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    public function index()
    {
        return view('merchant.merchantLogin');
    }

    public function register()
    {
        return view('merchant.merchantRegister');
    }
    public function create(Request $request)
    {
        
    }
    public function store(Request $request)
    {

    }
    public function dasboard()
    {
        return view('merchant.admin.deshboard');
    }
}