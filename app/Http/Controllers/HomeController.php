<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repository\UserRepository;
use App\Repository\PlateRepository;
use App\Repository\PlateImageRepository;
use App\Repository\SavePlateRepository;
use App\Repository\ContactFormRepository;
use App\Repository\ShippingAddressRepository;
use Exeception;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;
use Exception;
use App\SavePlate;
use App\Plate;
use Session;
use Mail;
use DB;
use Hash;
use Cookie;
use Segment;
use DateTime;
use App\Mail\ContactForm;
//use App\Mail\EnquiryForm;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, UserRepository $userRepository,PlateRepository $plateRepository,PlateImageRepository $plateImageRepository,SavePlateRepository $savePlateRepository,ContactFormRepository $contactFormRepository,ShippingAddressRepository $shippingAddressRepository)
    {
        // $this->middleware('auth');
        $this->request = $request;
        $this->userRepository = $userRepository;
        $this->plateRepository = $plateRepository;
        $this->plateImageRepository = $plateImageRepository;
        $this->savePlateRepository = $savePlateRepository;
        $this->contactFormRepository = $contactFormRepository;
        $this->shippingAddressRepository = $shippingAddressRepository;
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

    public function home(){
        if(Session::has('random_id')) {
            
        }else{
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
            $rand = substr(str_shuffle($str_result), 0, 5);
            Session::put('random_id', $rand);
        }
        // $plates = DB::table('plates')->paginate(10);
        $plates = DB::table('plates')->where(['is_deleted'=>'no','is_publised'=>'publish'])->orderBy('id', 'desc')->count();
      
       //dd($plates);
        // $feature_plates = $this->plateRepository->getData(['is_deleted'=>'no','is_featured'=>'yes'],'get',[],0);
       $feature_plates= DB::table('plates')->where(['is_deleted'=>'no','is_featured'=>'yes','is_publised'=>'publish'])->orderBy('id', 'desc')->paginate(4);
       //dd($feature_plates);
       return view('welcome',compact('plates','feature_plates'));
    } 

    public function number_plates_list(){
        $plates = Plate::with('plateimage')->where(['is_deleted'=>'no','is_publised'=>'publish'])->orderBy('id', 'desc')->paginate(12);
        return view('frontend.number_plates_list',compact('plates'));
    }

    public function plate_detail($id){
       $plate_detail = $this->plateRepository->getData(['id'=>$id,'is_deleted'=>'no'],'first',['plateimage'],0);
       return view('frontend.plate_detail',compact('plate_detail'));
    }

    public function add_to_cart(){
        

        $message = "";
        if(Auth::user()){
            $saved_plate = [];
            $saved_plate['user_id'] = Auth::user()->id;
            $saved_plate['plate_id'] = $this->request->plate_id;
            $saved_plate['status'] = 'cart';

            $count_saved = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $this->request->plate_id, 'status' => 'cart'],'count',[],0);    
            if(empty($count_saved)){
                $plate = $this->savePlateRepository->createUpdateData(['id'=> $this->request->id],$saved_plate);
                $delete_saved_plate = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $this->request->plate_id, 'status' => 'like'],'delete',[],0);
                $message = "Item Added to Cart!";
                $btn_text = "REMOVE FROM CART";
            }else{
                $count_saved = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $this->request->plate_id, 'status' => 'cart'],'delete',[],0);
                $message = "Item Removed from Cart!";
                $btn_text = "ADD TO CART";
            }
            $plate_in_cart = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'status' => 'cart'],'count',[],0);
        }else{
            $saved_plate = [];
            $saved_plate['guest_id'] = Session::get('random_id');
            $saved_plate['plate_id'] = $this->request->plate_id;
            $saved_plate['status'] = 'cart';

            $count_saved = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $this->request->plate_id, 'status' => 'cart'],'count',[],0);    
            if(empty($count_saved)){
                $plate = $this->savePlateRepository->createUpdateData(['id'=> $this->request->id],$saved_plate);
                $delete_saved_plate = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $this->request->plate_id, 'status' => 'like'],'delete',[],0);
                $message = "Item Added to Cart!";
                $btn_text = "REMOVE FROM CART";
                
            }else{
                $count_saved = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $this->request->plate_id, 'status' => 'cart'],'delete',[],0);
                $message = "Item Removed from Cart!";
                $btn_text = "ADD TO CART";
            }
            $plate_in_cart = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'status' => 'cart'],'count',[],0);
        }
        
        return response()->json(array(
            'saved_count' => $plate_in_cart,
            'msg' => $message,
            'btn_text' => $btn_text,
            'status' => 200,
        ), 200);
    }


    public static function header_counter()
    {
        $cart_count = "";
        $saved_count = "";
        $view_plate = "";
        if(Auth::user()){
            
            $cart_count = SavePlate::where(['user_id'=> Auth::user()->id, 'status' => 'cart'])->count();
            $saved_count = SavePlate::where(['user_id'=> Auth::user()->id, 'status' => 'like'])->count();
            // $view_plate = Plate::where(['user_id'=> Auth::user()->id, 'id' => '$this->request->plate_id']);
        }else{
            // dd(Session::get('random_id'));
            $cart_count = SavePlate::where(['guest_id'=> Session::get('random_id'), 'status' => 'cart'])->count();
            $saved_count = SavePlate::where(['guest_id'=> Session::get('random_id'), 'status' => 'like'])->count();
            // $view_plate = Plate::where(['guest_id'=> Session::get('random_id'), 'id' => '$this->request->plate_id']);
        } 
        session([ 'saved_count' => $saved_count,'cart_count' => $cart_count]);
    }

    public function items_cart(){
        $items_cart = [];
        $item_id = [];
        $user_info = [];
        $total_price = 0;
        $total_shipping = 0;
        if(Auth::user()){
            $user_info = $this->userRepository->getData(['id'=> Auth::user()->id],'first',[],0);
            $items_cart = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'status' => 'cart'],'get',['plate','plate.plateimage'],0);
        }else{
            $items_cart = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'status' => 'cart'],'get',['plate','plate.plateimage'],0);
        }

        if(count($items_cart)>0){
            foreach ($items_cart as $key => $value) {
                if($value->plate->plate_price>0){
                    $item_id[] = $value->plate->id;
                    // dd($item_id);
                    if (is_numeric($value->plate->plate_price)) {
                        $total_price = $total_price + $value->plate->plate_price;
                    }
                   
                }
            }
        }
       
        return view('frontend/cart', compact('items_cart','total_price', 'item_id', 'user_info'));
    }

    public function remove_from_cart($plate_id){
        $message = "";
        if(Auth::user()){
            $remove_item = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $plate_id, 'status' => 'cart'],'delete',[],0);    
        }else{
            $remove_item = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $plate_id, 'status' => 'cart'],'delete',[],0);    
        }
        return redirect('/cart');
    }

    public function remove_from_wishlist($plate_id){
        $message = "";
        if(Auth::user()){
            $remove_item = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $plate_id, 'status' => 'like'],'delete',[],0);    
        }else{
            $remove_item = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $plate_id, 'status' => 'like'],'delete',[],0);
        }
        return redirect('/saved-plate');
    } 


    public function save_plate(){
        if(Auth::user()){
            $saved_plate = [];
            $saved_plate['user_id'] = Auth::user()->id;
            $saved_plate['plate_id'] = $this->request->plate_id;
            $saved_plate['status'] = 'like';

            $count_saved = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $this->request->plate_id, 'status' => 'like'],'count',[],0);

            if(empty($count_saved)){
                $plate = $this->savePlateRepository->createUpdateData(['id'=> $this->request->id],$saved_plate);
                $img_source = url('/images/red_heart.jpeg');
            }else{
                $count_saved = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'plate_id' => $this->request->plate_id, 'status' => 'like'],'delete',[],0);
                $img_source = url('/images/like.png');
            }
            $plate_saved = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'status' => 'saved'],'count',[],0);
        }else{
            $saved_plate = [];
            $saved_plate['guest_id'] = Session::get('random_id');
            $saved_plate['plate_id'] = $this->request->plate_id;
            $saved_plate['status'] = 'like';

            $count_saved = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $this->request->plate_id, 'status' => 'like'],'count',[],0); 
            if(empty($count_saved)){
                $plate = $this->savePlateRepository->createUpdateData(['id'=> $this->request->id],$saved_plate);
                $img_source = url('/images/red_heart.jpeg');
            }else{
                $count_saved = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'plate_id' => $this->request->plate_id, 'status' => 'like'],'delete',[],0);
                $img_source = url('/images/like.png');
            }
            $plate_saved = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'status' => 'like'],'count',[],0);
        }
        
        return response()->json(array(
            'saved_count' => $plate_saved,
            'img_source' => $img_source,
            'status' => 200,
        ), 200);
    } 

    public function saved_plate(){
        $saved_plate = [];
        if(Auth::user()){
            $saved_plate = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'status' => 'like'],'get',['plate','users','plate.plateimage'],0);
            
        }else{
            $saved_plate = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'status' => 'like'],'get',['plate','users','plate.plateimage'],0);
            
        }
        // if(count($saved_plate) > 0){
        //     foreach ($saved_plate as $key => $plate_result) {
        //         if(Auth::user()){
        //             $plate_result['like_count'] = SavePlate::where(['user_id' => Auth::user()->id, 'status' => 'like'])->pluck('plate_id')->toArray();
        //             // $artwork_result['save_count'] = SavedArtwork::where(['user_id' => Auth::user()->id, 'status' => 'saved'])->pluck('user_id')->toArray();
        //         }else{
        //             $plate_result['like_count'] = SavePlate::where(['guest_id' => Session::get('random_id'), 'status' => 'like'])->pluck('plate_id')->toArray();
        //             // $artwork_result['save_count'] = SavedArtwork::where(['guest_id' => Session::get('random_id'), 'status' => 'saved'])->pluck('guest_id')->toArray();
        //         }
        //     }
        // }
        return view('frontend/saved_plate', compact('saved_plate'));
    } 

    public function view_plate(){
        

        $view_plate = [];
        // if(Auth::user()){
        //     $view_plate = $this->plateRepository->getData(['user_id'=> Auth::user()->id, 'id' => $this->request->plate_id],'first',[],0);
            
        // }else{
        //     $view_plate = $this->plateRepository->getData(['guest_id'=> Session::get('random_id'), 'id' => $this->request->plate_id],'first',[],0);
            
        // }
        $view_plate = $this->plateRepository->getData([ 'id' => $this->request->plate_id],'first',[],0);
        
        $html = view('frontend.number_plates_details_popup', compact('view_plate'))->render();
      
       return response()->json(array(
            'html' => $html,
            'status' => 200,
        ), 200);


    }

    public function about_us(){
        return view('frontend.about_us');
    } 

    public function privacy_policy(){
        return view('frontend.privacy_policy');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function contact_us(){
        return view('frontend.contact_us');
    }
    public function save_contact_form_details(){
		//dd($this->request->all());
       $contactForm = $this->contactFormRepository->createUpdateData(['id'=>  $this->request->id], $this->request->all());
        
         $toEmail = $this->request->email; 
         $comment =[];
       
         $comment['first_name'] = $this->request->first_name;
         if($toEmail){
            Mail::to($toEmail)->send(new ContactForm($comment));
         }
       return redirect()->to('contact-thanks')->with('message', 'Email has been send please check');
    }

    public function how_it_works(){
        return view('frontend.how_it_works');
    }

    public function terms_and_conditions(){
        return view('frontend.terms_and_conditions');
    } 

    public function checkout($plate_id){
        $plate_record = $this->plateRepository->getData(['is_deleted'=>'no','id' => $plate_id],'first',[],0); 
        // $validation = Validator::make($this->request->all(), [


        //     'first_name'         => trim('required|string'),
        //     'last_name'         => trim('required|string'),
        //     'email'         => trim('required|string|unique:shipping_addresses,email'),
        //     'country'         => trim('required|string'),
        //     'state'         => trim('required|string'),
        //     'city'         => trim('required|string'),
        //     'phone_no'         => trim('required|string'),
        //     'postal_code'         => trim('required|string'),
        //     'address'         => trim('required|string'),

        // ]);
        // if ($validation->fails()) {
        //         throw new ValidationException($validation);
        // }

        

        // $shipping_info = [];
        // $shipping_info['first_name'] = $this->request->first_name;
        // $shipping_info['last_name'] = $this->request->last_name;
        // $shipping_info['email'] = $this->request->email;
        // $shipping_info['country'] = $this->request->country;
        // $shipping_info['state'] = $this->request->state;
        // $shipping_info['city'] = $this->request->city;
        // $shipping_info['phone_no'] = $this->request->phone_no;
        // $shipping_info['postal_code'] = $this->request->postal_code;
        // $shipping_info['address'] = $this->request->address;
        // $shipping_info['user_id'] = Auth::user()->id;
        // $shipping_addresses = $this->shippingAddressRepository->createUpdateData(['id'=> $this->request->id],$shipping_info);
        //dd($plate);
        // if($shipping_addresses){
            
        //     Session::flash('success_message', 'Save shipping address  successfully updated.');
        //      return redirect('checkout');

        // }else{
        //     Session::flash('error_message', 'Something went wrong.');
        //     return back()->withInput();
        // }
        $items_cart = [];
        $item_id = [];
        $user_info = [];
        $total_price = 0;
        $total_shipping = 0;
        if(Auth::user()){
            // $shipping_info = $this->shippingAddressRepository->getData(['user_id'=> Auth::user()->id],'get',[],0);
            //dd($shipping_info);
            $items_cart = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'status' => 'cart'],'get',['plate','plate.plateimage'],0);
        }else{
            $items_cart = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'status' => 'cart'],'get',['plate','plate.plateimage'],0);
        }

        if(count($items_cart)>0){
            foreach ($items_cart as $key => $value) {
                if(count($value->plate->plate_price)>0){
                    $item_id[] = $value->plate->id;
                    if (is_numeric($value->plate->plate_price)) {
                        $total_price = $total_price + $value->plate->plate_price;
                    }
                   
                }
            }
        }
        return view('frontend/checkout', compact('items_cart','total_price', 'item_id','plate_record'));
    }


    public function shipping_address(){
         
        // $validation = Validator::make($this->request->all(), [


        //     'first_name'         => trim('required|string'),
        //     'last_name'         => trim('required|string'),
        //     'email'         => trim('required|string|unique:shipping_addresses,email'),
        //     'country'         => trim('required|string'),
        //     'state'         => trim('required|string'),
        //     'city'         => trim('required|string'),
        //     'phone_no'         => trim('required|string'),
        //     'postal_code'         => trim('required|string'),
        //     'address'         => trim('required|string'),

        // ]);
        // if ($validation->fails()) {
        //         throw new ValidationException($validation);
        // }

        

        $shipping_info = [];
        $shipping_info['first_name'] = $this->request->first_name;
        $shipping_info['last_name'] = $this->request->last_name;
        $shipping_info['email'] = $this->request->email;
        $shipping_info['country'] = $this->request->country;
        //$shipping_info['state'] = $this->request->state;
        $shipping_info['city'] = $this->request->city;
        $shipping_info['phone_no'] = $this->request->phone_no;
        $shipping_info['postal_code'] = $this->request->postal_code;
        $shipping_info['address1'] = $this->request->address;
        //$shipping_info['plate_id'] = $this->request->plate_id;
        $shipping_addresses = $this->shippingAddressRepository->createUpdateData(['id'=> $this->request->id],$shipping_info);
        if($shipping_addresses){
            
            Session::flash('success_message', 'Save shipping address  successfully updated.');
             return redirect('payment');
        }else{
            Session::flash('error_message', 'Something went wrong.');
            return back()->withInput();
        }
        // $items_cart = [];
        // $item_id = [];
        // $user_info = [];
        // $total_price = 0;
        // $total_shipping = 0;
        // if(Auth::user()){
        //     $shipping_info = $this->shippingAddressRepository->getData(['id'=> Auth::user()->id],'first',[],0);
        //     //dd($user_info);
        //     $items_cart = $this->savePlateRepository->getData(['user_id'=> Auth::user()->id, 'status' => 'cart'],'get',['plate','plate.plateimage'],0);
        // }else{
        //     $items_cart = $this->savePlateRepository->getData(['guest_id'=> Session::get('random_id'), 'status' => 'cart'],'get',['plate','plate.plateimage'],0);
        // }

        // if(count($items_cart)>0){
        //     foreach ($items_cart as $key => $value) {
        //         if(count($value->plate->plate_price)>0){
        //             $item_id[] = $value->plate->id;
        //             if (is_numeric($value->plate->plate_price)) {
        //                 $total_price = $total_price + $value->plate->plate_price;
        //             }
                   
        //         }
        //     }
        // }
        //return view('frontend/checkout', compact('items_cart','total_price', 'item_id', 'shipping_info'));
    }




    public function searching_plates(){
       $search_plates =  DB::table('plates')->where('plate_number', 'like', '%' .$this->request->search_filter . '%')->orderBy('id', 'desc')->paginate(12);
       return view('frontend.search_plates',compact('search_plates'));

    }


    public function sort_price(){
        $order = $this->request->price_sort;
        // $plates =  DB::table('plates')->where('is_deleted', 'no')->orderBy('plate_price', $order)->paginate(12);

        $plates = $this->plateRepository->getData(['is_deleted'=>'no','is_publised'=>'publish', 'order'=>$order ],'get',[],0);
        $html = view('frontend.number_plates_list_ajax', compact('plates'))->render();
      
       return response()->json(array(
            'html' => $html,
            'status' => 200,
        ), 200);

       
    } 

    public function blogs(){
        return view('frontend.blogs');
    }
    
    public function blog_details(){
        return view('frontend.blog_details');
    }

    public function payment(){
        $shipping_record = $this->shippingAddressRepository->getData(['is_deleted'=>'no'],'first',['plate'],0);
        return view('frontend.payment',compact('shipping_record'));
    } 

    public function enquiry(){
        return view('frontend.enquiry');
    } 

    public function contact_thanks(){
        return view('frontend.contact-thanks');
    }

    public function payments(){
        return view('frontend.payments');
    }

    public function price_fees(){
        return view('frontend.price_fees');
    }
	
	public function payment_details(){
		return view('frontend.payment_details');
		
	}

    

}
