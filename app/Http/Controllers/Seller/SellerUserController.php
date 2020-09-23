<?php
namespace App\Http\Controllers\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\UserRepository;
use App\Repository\PlateRepository;
use App\Repository\PlateImageRepository;

use Exeception;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\VehicleType;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Session;
use Mail;
use DB;
use Hash;
use Cookie;
use Segment;
use DateTime;

class SellerUserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, UserRepository $userRepository,PlateRepository $plateRepository,PlateImageRepository $plateImageRepository)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->userRepository = $userRepository;
        $this->plateRepository = $plateRepository;
        $this->plateImageRepository = $plateImageRepository;
        $this->number_plate_files = '/images/number_plate_files/';
    }
    public function index(){

    	return view('seller.seller_dashboard');
    }

    public function add_plate(){
        // $vehicle_types = VehicleType::where('is_active',"yes")->get();
        // $plate_frames = \App\PlateFrame::where('is_active',"yes")->get();
        return view('seller.add_plate');
    }

    public function upload_platenumber11(){
        // $validation = Validator::make($this->request->all(), [


        //     'plate_number'         => trim('required|string|max:7|regex:/(^([a-zA-Z0-9\s]+)(\d+)?$)/u'),
        //     'palte_title'         => trim('required|string'),
        //     'plate_price'         => trim('required|string'),

        // ]);
        // if ($validation->fails()) {
        //         throw new ValidationException($validation);
        // }

        $plate_info = [];
        parse_str($this->request->formdata, $plate_info);
        //$plate_info['media_url'] = $this->request->media_url;
        $plate_info['user_id'] = Auth::user()->id;

        $plate = $this->plateRepository->createUpdateData(['id'=> $this->request->id],$plate_info);
        if(!empty($plate)){
            $uploads['media_url'] = $this->request->media_url;
            $uploads['plate_id'] = $plate['id'];
            //dd($uploads);
            $plate_info['media_url'] = $this->request->media_url;
            $upload_file = $this->plateImageRepository->createUpdateData(['id'=> $this->request->id],$uploads);
            return back()->withStatus(__('Plate number create successfully updated.'));
        }

        else{
            Session::flash('error_message', 'Something went wrong.');
            return back()->withInput();
        }
    }
    public function upload_platenumber()
    {
       

        $validation = Validator::make($this->request->all(), [


            'plate_number'         => trim('required|string|max:7|regex:/(^([a-zA-Z0-9\s]+)(\d+)?$)/u'),
            'plate_title'         => trim('required|string'),
            'plate_price'         => trim('required|string'),

        ]);
        if ($validation->fails()) {
                throw new ValidationException($validation);
        }
        //unique:plates,plate_number|
        //$this->request['user_id'] = Auth::user()->id;
        //dd($this->request->all());
        // if($this->request->hasFile('media_urls')){
        //     $media_url = $this->request->file('media_urls');
        //     $parts = pathinfo($media_url->getClientOriginalName());
        //     $extension = strtolower($parts['extension']);
        //     $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
        //     $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
        //     $media_url->move(public_path() . $this->users_files, $imageName);
        //     $image_name = url($this->users_files . $imageName);
        //     $this->request['media_url'] = $image_name;
        // }
        // $plate = $this->plateRepository->createUpdateData(['id'=> $this->request->id],$this->request->all());
        // if(!empty($plate)){
        //     $parts = pathinfo($media_url->getClientOriginalName());
        //     $extension = strtolower($parts['extension']);
        //     $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
        //     $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
        //     $media_url->move(public_path() . $this->number_plate_files, $imageName);
        //     $image_name = url($this->number_plate_files . $imageName);
        //     $uploads['media_url'] = $image_name;
        //     $uploads['plate_id'] = $plate['id'];
        //     dd($uploads);
        //     $upload_file = $this->plateImageRepository->createUpdateData(['id'=> $this->request->id],$uploads);
        // }

        // return back()->withStatus(__('Plate number create successfully updated.'));

        $plate_info = [];
        $plate_info['plate_number'] = $this->request->plate_number;
        $plate_info['plate_title'] = $this->request->plate_title;
        $plate_info['plate_price'] = $this->request->plate_price;
        $plate_info['description'] = $this->request->description;
        $plate_info['is_featured'] = $this->request->is_featured;
        $plate_info['user_id'] = Auth::user()->id;
        $plate = $this->plateRepository->createUpdateData(['id'=> $this->request->id],$plate_info);
        if(!empty($plate)){
            // $main_image = $this->request->file('media_url');
            // dd($main_image);
            // $parts = pathinfo($main_image->getClientOriginalName());
            // $extension = strtolower($parts['extension']);
            // $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
            // $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
            // $main_image->move(public_path() . $this->number_plate_files, $imageName);
            // $image_name = url($this->number_plate_files . $imageName);
            // $uploads['media_url'] = $image_name;
            // $uploads['plate_id'] = $plate['id'];
            // $upload_file = $this->plateImageRepository->createUpdateData(['id'=> $this->request->id],$uploads);
            //return back()->withStatus(__('Plate number create successfully updated.'));
            Session::flash('success_message', 'Plate number create successfully updated.');
             return redirect('/seller/plate_list');

        }else{
            Session::flash('error_message', 'Something went wrong.');
            return back()->withInput();
        }
    }


    // public function makeimage()  
    // {  
    //     $image_link_raw =urldecode($this->request->image_url);
    //     $p=parse_url($image_link_raw);
    //     $img_url = $p['path'];

    //     $img = Image::make(public_path($img_url));  
    //    $img->text($this->request->plate_number, 1400, 800, function($font) {  
    //       $font->file(public_path('assets/fonts/LicensePlate-j9eO.ttf'));  
    //       $font->size(400);  
    //       $font->color('#2b281b');  
    //       $font->align('center');  
    //       $font->valign('top');  
    //       $font->angle(0);  
    //   });  
    //    $img->save(public_path('images/temp_plates/'.$this->request->plate_number.'.jpg')); 
    //    return response()->json([
    //     "img" => 'images/temp_plates/'.$this->request->plate_number.'.jpg',
    //    ]);
    // } 

    public function plate_list(){
         $plate_list= $this->plateRepository->getData(['is_deleted'=>'no','user_id'=>Auth::user()->id],'get',[],0);

        return view('seller.plate_list',compact('plate_list'));
    }

    public function delete_plate($id){
    
        $plate = $this->plateRepository->getData(['id'=>$id],'delete',[],0);
        \Session::flash('success_message', 'plate Deleted Succssfully!.'); 
            return redirect('/seller/plate_list');
    } 

    public function edit_plate($id){
        $plate = $this->plateRepository->getData(['id'=>$id],'first',[],0);
        return view('seller.edit_plate',compact('plate'));

    }

    public function change_plate_status($id, $status)
    {

        if($status == 'publish'){
            $data['is_publised'] = 'unpublish';
            $new_status = "Un-Published";
        }else{
            $data['is_publised'] = 'publish';
            $new_status = "Published";
        }
        $artist = $this->plateRepository->createUpdateData(['id'=> $id],$data);
        \Session::flash('success_message', 'Plate Status Changed to '.$new_status.' Succssfully!.');
        return redirect('/seller/plate_list'); 
        
    }

   



}
