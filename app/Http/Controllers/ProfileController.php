<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Validator;
use DB;
use App\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    private $users_files;

    public function __construct(Request $request,UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

        $this->request = $request;
        $this->users_files = '/images/users_files/';
       
    }

    public function edit()
    {
        $user = $this->userRepository->getData(['id'=> auth()->user()->id],'first',[],0);

        return view('profile.edit',compact('user'));
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    { 
        $validation = Validator::make($this->request->all(), [
       
            'email'         => trim('required|string|email|max:255|unique:users,email,'.$this->request->id),
            'first_name'         => trim('required|string'),
            'last_name'         => trim('required|string'),
            'address'         => trim('required|string'),
            'postal_code'         => trim('required|string'),
            'state'         => trim('required|string'),
            'country'         => trim('required|string'),
            'phone_no'         => trim('required|string'),
        ]);
        if ($validation->fails()) {
                throw new ValidationException($validation);
        }

        
        if($this->request->hasFile('media_urls')){
            $media_url = $this->request->file('media_urls');
            $parts = pathinfo($media_url->getClientOriginalName());
            $extension = strtolower($parts['extension']);
            $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
            $imageName = uniqid() . mt_rand(999, 9999) . '.' . $extension;
            $media_url->move(public_path() . $this->users_files, $imageName);  
            $image_name = url($this->users_files . $imageName);
            $this->request['media_url'] = $image_name;
        }
        $user = $this->userRepository->createUpdateData(['id'=> $this->request->id],$this->request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(Request $request)
    {
        $this->validate($request, [
            'old_password'     => 'required',
            'password'     => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $data = $request->all();
     
        $user = User::find(auth()->user()->id);
        if(!Hash::check($data['old_password'], $user->password)){
            \Session::flash('error_message', 'The old password does not match.');
            return back()->withInput();
        }else{
           auth()->user()->update(['password' => Hash::make($this->request->get('password'))]);
           \Session::flash('success_message', 'Password successfully updated.');
           return back();
        }

        
    }

}
