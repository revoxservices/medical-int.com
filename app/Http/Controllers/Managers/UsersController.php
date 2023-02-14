<?php


namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Models\Mediable;
use App\Http\Requests;

use App\Models\User;
use App\Models\Utilities;

use App\Models\Citie;
use App\Models\Countrie;
use App\Exports\UsersExport;

class UsersController extends Controller
{

    public function index()
    {
        return view('managers.views.users.index')->with([
            'users' => User::latest()->get()
        ]);
    }

    public function create()
    {

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');

        return view('managers.views.users.create')->with([
            'availables' => $availables,

        ]);
    }

    public function storage(Request $request)
    {

        $user = new User;
        $user->slack = $this->generate_slack("users");
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->cellphone = $request->cellphone;
        $user->email = $request->email;
        $user->password = $request->password;
        
        if($request->available != null){
            $user->available = 1;
        }else{
            $user->available = 0;
        }

        $user->role_id = 1;
        $user->updated_at = new \DateTime();
        $user->save();

        return response()->json(['status' => "success", 'user' => $user->slack]);

    }

    public function view($slack){

        $user = User::slack($slack);

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');

        return view('managers.views.users.view')->with([
            'user' => $user,
            'availables' => $availables,


        ]);

    }


    public function edit($slack){

        $user = User::slack($slack);

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');

        return view('managers.views.users.edit')->with([
            'user' => $user,
            'availables' => $availables,


        ]);

    }

    public function update(Request $request)
    {

        $user = User::slack($request->slack);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->cellphone = $request->cellphone;
        $user->email = $request->email;

        if($request->available != null){
            $user->available = 1;
        }else{
            $user->available = 0;
        }


        if ($request->password != null) {
            $user->password = $request->password;
        }

        $user->updated_at = new \DateTime();
        $user->save();

        return response()->json(['status' => "success", 'user' => $user->slack]);
    }


    public function destroy($slack)
    {
        $user = User::slack($slack);
        $user->delete();
        return redirect()->route('manager.users')->withSuccess(__('users.deleted'));
    }


}
