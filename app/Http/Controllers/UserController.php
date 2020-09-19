<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function show($id)
    {
        $user = User::findorFail($id);
        $userCount = $user->count();
        $from_user_id = Auth::id();
        
        
        //  dd($user);
        //  dd($userCount);
        //  dd($from_user_id);

        return view('users.profile', compact('user', 'userCount', 'from_user_id'));
    }

    
    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('users.edit', compact('user')); 
    }


    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);
       
        if(!is_null($request['img_name'])){
            $imageFile = $request['img_name'];

            $list = FileUploadServices::fileUpload($imageFile);
            list($extension, $fileNameToStore, $fileData) = $list;
            
            $data_url = CheckExtensionServices::checkExtension($fileData, $extension);
            $image = Image::make($data_url);        
            $image->resize(400,400)->save(storage_path() . '/app/public/images/' . $fileNameToStore );

            $user->img_name = $fileNameToStore;
        }
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->self_introduction = $request->self_introduction;
        $user->age = $request->age;
        $user->adress = $request->adress;
        // $user->hobbies = $request->hobbies;
        
        if(!empty($request->get('hobbies'))){

            $str_hobbies = implode(" | ", $request->hobbies);
            $user->hobbies = $str_hobbies;
        }else{
            $user->hobbies = '特になし';
        }

        $user->save();

        return redirect('myprofile'); 
    }
}
