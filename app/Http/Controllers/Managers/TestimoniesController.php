<?php

namespace App\Http\Controllers\Managers;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Models\Mediable;

use App\Models\Utilities;
use App\Models\Testimonie;


class TestimoniesController extends Controller
{

    public function index(){

        $testimonies = Testimonie::latest()->get();

        return view('managers.views.testimonies.index')->with([
          'testimonies' => $testimonies,
        ]);
    }


    public function create(){


        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');
        return view('managers.views.testimonies.create')->with([
            'availables' => $availables,
        ]);

    }

    public function storage(Request $request){

            $testimonie = new Testimonie;
            $testimonie->slack = $this->generate_slack("testimonies");
            $testimonie->firstname = $request->firstname;
            $testimonie->lastname = $request->lastname;
            $testimonie->charger = $request->charger;
            $testimonie->description = $request->description;
            $testimonie->save();

            return redirect()->route('manager.testimonies');


    }

    public function edit($slack){

        $testimonie = Testimonie::slack($slack);

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');


        return view('managers.views.testimonies.edit')->with([
            'testimonie' => $testimonie,
            'availables' => $availables,



        ]);

    }

    public function update(Request $request,$slack){

        $testimonie = Testimonie::slack($slack);
        $testimonie->firstname = $request->firstname;
        $testimonie->lastname = $request->lastname;
        $testimonie->charger = $request->charger;
        $testimonie->description = $request->description;
        $testimonie->available = $request->available;
        $testimonie->updated_at = new \DateTime();
        $testimonie->save();

        return redirect()->route('manager.testimonies');

    }


    public function destroy($slack){


        $testimonie = Testimonie::slack($slack);
        $testimonie->delete();

        return redirect()->route('manager.testimonies');
    }





}
