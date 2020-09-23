<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Redirect, Response, File;

class CommonLoginController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login()
    {
        if (!Auth::check())
        {
           
            return redirect()->to('/');

        }
        else
        {
            $user_role = Auth::user()->role;
            if ($user_role == "admin")
            {
                return redirect()->to('/admin/profile');
            }
            elseif ($user_role == "buyer")
            {

                return redirect()->to('/');
            }
            elseif ($user_role == "seller")
            {
                return redirect()->to('/seller/add_plate');
            }
           
            else
            {
                return redirect()
                    ->back()
                    ->with('message', 'Information not appropriate');
            }
        }
    }

    public function submitLogin(Request $request)
    {
        
        $rules = array(
            'email' => 'required',
            'password' => 'required|min:8',
        );

        $validator = Validator::make($request->all() , $rules);

        if ($validator->fails())
        {
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        else
        {

            $userdata = array(
                'email' => Input::get('email') ,
                'password' => Input::get('password') ,
            );

            if (Auth::attempt($userdata)){
                
                $user_role = Auth::user()->role;

                if ($user_role == "admin")
                {
                    return redirect()->to('/admin/dashboard');
                }
                // $baseURL = env('APP_URL', 'http://127.0.0.1:8000/');
                // print_r(url()->previous(),'===',$baseURL);exit;
                if ($user_role == "buyer"){
                    // if(url()->previous() == $baseURL.'cart'){
                    //     return redirect()->to('/cart');   
                    // }   
                     return redirect()->to('/');
                        

                }

                if ($user_role == "seller"){
                    // if(url()->previous() == $baseURL.'cart'){
                    //     return redirect()->to('/');   
                    // } 

                    return redirect()->to('/seller/add_plate');

                }

              
                // if ($user_role == "buyer" || $user_role == "seller")
                // {
                //     $user_info = [];
                //     $user_info['user_id'] = Auth::user()->id;
                //     $user_info['guest_id'] = "";
                //     if (Session::has('random_id'))
                //     {
                //         $count_artist = $this
                //             ->savedArtistRepository
                //             ->getData(['guest_id' => Session::get('random_id') ], 'get', [], 0);

                //         if (count($count_artist) > 0)
                //         {
                //             foreach ($count_artist as $key => $value)
                //             {
                //                 $artist = $this
                //                     ->savedArtistRepository
                //                     ->createUpdateData(['id' => $value['id']], $user_info);
                //             }
                //         }

                //         $count_artwork = $this
                //             ->savedArtworkRepository
                //             ->getData(['guest_id' => Session::get('random_id') ], 'get', [], 0);
                //         if (count($count_artwork) > 0)
                //         {
                //             foreach ($count_artwork as $key => $value)
                //             {
                //                 $artist = $this
                //                     ->savedArtworkRepository
                //                     ->createUpdateData(['id' => $value['id']], $user_info);
                //             }
                //         }
                //         Session::forget('random_id');
                //     }
                // }

                // return response()->json(array(
                //     'redirect_url' => $url,
                //     'status' => 200,
                // ) , 200);

            }
            else
            {

                return redirect()
                    ->back()
                    ->with('message', 'Information not appropriate');
            }
        }

    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()
            ->to('/')
            ->with('message', 'You are Successfully Logged Out');
    }
   
}


