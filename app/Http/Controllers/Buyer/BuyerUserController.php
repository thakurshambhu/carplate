<?php
namespace App\Http\Controllers\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\UserRepository;
use Exeception;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;
use Exception;
use Session;
use Mail;
use DB;
use Hash;
use Cookie;
use Segment;
use DateTime;

class BuyerUserController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->userRepository = $userRepository;
    }
    public function index(){
         
        return view('buyer.buyer_dashboard');
    }



}