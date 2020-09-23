<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Exception;
use Session;
use Mail;
use DB;
use Hash;
use Cookie;
use Segment;
use DateTime;

class AdminController extends Controller
{
   
    /**
    * Construction function
    * @param $request(Array), $userRepository
    * @return 
    *
    * Created By: Shambhu Thakur
    * Created At: 
    */
    //protected $redirectTo = '/user_login';

    public function __construct(Request $request)
    {
        $this->request = $request;
        
    }

    /**
    * Function to artists listing page
    * @param $request(Array)
    * @return 
    *
    * Created By: Shambhu Thakur
    * Created At: 
    */
    public function dashboard()
    {
    	dd('hii');
        
    }

    


}
