<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\SocialConnection;
use App\UserSocialConnection;
use App\ImageType;
use App\Image;
use App\Vendor;
use App\Service;
use App\Country;
use App\VendorService;
use Illuminate\Http\Request;
Use File;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    private $defaultExtension;
    private $defaultFileName;
    private $defaultFilePath;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'clearance']);
        $this->defaultExtension = 'png';
        $this->defaultFileName = 'no-image.png';
        $this->defaultFolder = env("MEDIA_UPLOAD_PATH", "user_files/");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('settings/account');
    }

    public function account()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Account',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName)
        );
        return view('settings.account')->with($data);
    }

    public function profile()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Profile',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName),
            'vendor'=>Vendor::where(['user_id'=>Auth::user()->id])->firstOrFail(),
            'services'=>array_column(Service::all('id','name')->toArray(), 'name', 'id'),
            'countries'=>array_column(Country::all('id','name')->toArray(), 'name', 'id')
        );
        return view('settings.profile')->with($data);
    }

    public function picture()
    {
        $imagesArray = array();
        foreach(ImageType::orderBy('name')->get() as $k => $v)
        {
            $imagesArray[$k] = $v;
            $imageLinkArray = Image::where(['user_id'=>Auth::user()->id,'image_type_id'=>$v->id])->get();
            if($imageLinkArray->count()>0) $imagesArray[$k] = array_merge($v->toArray(),array('link'=>$imageLinkArray->toArray()[0]));
        }
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Upload Picture',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName),
            'img_base_path'=>'/storage//'.$this->defaultFolder,
            'imagetypes'=>$imagesArray
        );
        return view('settings.picture')->with($data);
    }

    public function connection()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $socialArray = array();
        foreach(SocialConnection::orderBy('name')->get() as $k => $v)
        {
            $socialArray[$k] = $v;
            $socailLinkArray = UserSocialConnection::where(['user_id'=>Auth::user()->id,'social_connection_id'=>$v->id])->get();
            if($socailLinkArray->count()>0)  $socialArray[$k] = array_merge($v->toArray(),array('link'=>$socailLinkArray->toArray()[0]));
        }        
        $data = array(
            'title'=>'Social Connection',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName),
            'socialconnections'=>$socialArray
        );        
        return view('settings.connection')->with($data);
    }

    public function payment()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Payment History',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName)
        );
        return view('settings.payment')->with($data);
    }

    public function subscription()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Subscription',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName)
        );
        return view('settings.subscription')->with($data);
    }

    public function blocked()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Blocked Account',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName)
        );
        return view('settings.blocked')->with($data);
    }

    public function billing()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Billing',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName)
        );
        return view('settings.billing')->with($data);
    }

    public function notification()
    {
        $profile_image = Image::where(['image_type_id'=>1,'user_id'=>Auth::user()->id])->get();
        $data = array(
            'title'=>'Notification',
            'user'=>User::findOrFail(Auth::user()->id),
            'profile_image'=>'/storage//'.$this->defaultFolder.($profile_image->count()>0?$profile_image[0]->filename:$this->defaultFileName)
        );
        return view('settings.notification')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404, 'The resource you are looking for could not be found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        switch ($request['updatesetting'])
        {
            case 'account':
                return $this->updateAccount($request, $id);
            break;
            case 'connection':
                return $this->updateConnection($request, $id);
            break;
            case 'picture':
                return $this->updatePicture($request, $id);
            break;
            case 'profile':
                return $this->updateProfile($request, $id);
            break;
        }
    }

    private function updateAccount(Request $request, $id)
    {
        $user = User::findOrFail($id);  
        $this->validate($request, [
            'name'=>'required|max:120',
            // 'email'=>'required|email|unique:users,email,'.$id,
            // 'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name']);
        $user->fill($input)->save();
        return redirect()->route('settings.index')->with('flash_message', 'Account'. $user->name.' updated!');
    }

    private function updateConnection(Request $request, $id)
    {
        foreach($request->socialconnection as $k=>$v)
        {
            if(!is_null($v) && !is_null($request['socialconnection_hidden'][$k]))
            {
                $usersocialconnection = UserSocialConnection::findOrFail($request['socialconnection_hidden'][$k]);
                $usersocialconnection->link = $v;
                $usersocialconnection->save();                        
            }
            else
            {
                if(!is_null($v))
                {
                    UserSocialConnection::create([
                        'user_id' => Auth::user()->id,
                        'social_connection_id' => $k,
                        'link' => $v,
                    ]);
                }
            }
        }
        return redirect()->route('settings.index')->with('flash_message', 'Social Connection updated!');
    }

    private function updatePicture(Request $request, $id)
    {
        // $this->validate($request, [
        //     'picture_' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        // ]);
        
        foreach($request->picture_hidden as $k=>$v)
        {
            $image = Image::where(['image_type_id'=>$k,'user_id'=>Auth::user()->id])->get();
            if($request->hasFile('picture_'.$k))
            {
                $filenameWithExt = $request->file('picture_'.$k)->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('picture_'.$k)->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'_'.rand(99,999).'.'.$extension;
                $path = $request->file('picture_'.$k)->storeAs('public/user_files', $fileNameToStore);
            }
            else
            {
                $extension = $this->defaultExtension;
                $fileNameToStore = $this->defaultFileName;
            }
            if($image->count()>0)
            {
                if($request->hasFile('picture_'.$k))
                {                        
                    $image = Image::findOrFail($image[0]->id);
                    if($image->filename != $this->defaultFileName) Storage::delete('public/'.$this->defaultFolder.$image->filename);
                    $image->image_type_id = $k;
                    $image->image_type = $extension;
                    $image->filename = $fileNameToStore;
                    $image->save();
                }
            }
            else
            {
                Image::create([
                    'image_type_id' => $k,
                    'user_id' => Auth::user()->id,
                    'image_type' => $extension,
                    'filename' => $fileNameToStore
                ]);
            }
        }    
        return redirect()->route('settings.index')->with('flash_message', 'Picture updated!');   
    }

    private function updateProfile(Request $request, $id)
    {
        $vendor = Vendor::where(['user_id'=>Auth::user()->id])->firstOrFail();
        $vendorid = $vendor->id;
        $vendor->companyregno = $request->input('companyregno');
        $vendor->address = $request->input('address');
        $vendor->country_id = $request->input('country');
        $vendor->postalcode = $request->input('postalcode');
        $vendor->contactno = $request->input('contact');
        $vendor->website = $request->input('website');
        $vendor->save();
        #Update Services
        foreach($request->services as $k=>$v)
        {
            if(!is_null($v))
            {
                $vendorservice = VendorService::where(['vendor_id'=>$vendorid,'service_id'=>$v])->get();
                if($vendorservice->count()==0)
                {
                    VendorService::create([
                        'vendor_id' => $vendorid,
                        'service_id' => $v,
                    ]);
                }                
            }
        }
        #Remove Services
        $vendorservices = VendorService::where(['vendor_id'=>$vendorid])->get();
        foreach($vendorservices as $k=>$v)
        {
            if(!in_array($v['service_id'],$request->services))
            {
                $vendorservice = VendorService::where(['vendor_id'=>$vendorid,'service_id'=>$v['service_id']])->firstOrFail();
                $vendorservice->delete();
            }
        }
        return redirect()->route('settings.index')->with('flash_message', 'Profile updated!');
    }

    public function removePicture(Request $request)
    {
        if($request->ajax())
        {
            $image = Image::find($request->key);
            if($image->filename != $this->defaultFileName)
            {
                Storage::delete('public/'.$this->defaultFolder.$image->filename);
                $image->image_type = $this->defaultExtension;
                $image->filename = $this->defaultFileName;
                $image->save();
            }
        }
        return response()->json([]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404, 'The resource you are looking for could not be found');
    }
}
