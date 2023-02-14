<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Requests;

use Analytics;
use Carbon\Carbon;
use App\Models\Media;
use App\Models\Utilities;
use App\Models\Team;


class TeamsController extends Controller
{


    public function index()
    {

        $teams = Team::get();

        return view('managers.views.teams.index')->with([
            'teams' => $teams,
        ]);
    }


    public function create()
    {

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title', 'id');

        return view('managers.views.teams.create')->with([
            'availables' => $availables,

        ]);
    }

    public function storage(Request $request)
    {


        $team = new Team;
        $team->slack = $this->generate_slack("teams");;
        $team->firstname = $request->firstname;
        $team->lastname = $request->lastname;
        $team->charger = $request->charger; 
        
        if($request->available != null){
            $team->available = 1;
        }else{
            $team->available = 0;
        }

        $team->save();

        return response()->json($team->slack);
    }

    public function edit($slack)
    {

        $team = Team::slack($slack);

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title', 'id');

        if ($team->thumbnail() != null) {
            $thumbnail = true;
        } else {
            $thumbnail = null;
        }


        return view('managers.views.teams.edit')->with([
            'team' => $team,
            'thumbnail' => $thumbnail,
            'availables' => $availables,
        ]);
    }

    public function update(Request $request, $slack)
    {
        $team = Team::slack($slack);
        $team->firstname = $request->firstname;
        $team->lastname = $request->lastname;
        $team->charger = $request->charger;
        
        if($request->available != null){
            $team->available = 1;
        }else{
            $team->available = 0;
        }

        $team->updated_at = new \DateTime();
        $team->save();

        return response()->json($team->slack);
    }

    public function destroy($slack)
    {

        $team = Team::slack($slack);
        $team->delete();

        return redirect()->route('manager.teams');
    }



    public function getThumbnail($slack)
    {

        $team = Team::slack($slack);

        if ($team->thumbnail() != null) {
            $thumbnail = $team->thumbnail();

            $images[] = [
                'name' => $thumbnail->original_filename,
                'id' => $thumbnail->id,
                'file' => $thumbnail->filename,
                'size' =>  $thumbnail->file_size
            ];

            return response()->json($images);
        } else {

            $thumbnail = null;
            $images = [];

            return response()->json($images);
        }
    }

    public function storeThumbnail(Request $request)
    {

        if ($request->file('file')) {

            $team = Team::slack($request->team);
            $thumbnail = $request->file('file');

            $thumbnail_names = $thumbnail->getClientOriginalName();
            $thumbnail_ext = $thumbnail->getClientOriginalExtension();
            $thumbnail_size = $thumbnail->getSize();
            $blend = Utilities::random();
            $hash = hash('ripemd160', $blend);
            $thumbnail_dir = '/teams' . '/';
            $new_thumbnail = $hash . "." . $thumbnail_ext;
            $thumbnail_name = $hash;
            $uploaded = Storage::disk('pages')->putFileAs($thumbnail_dir, new File($thumbnail), $new_thumbnail, 'public');
            $team->storeAndSetThumbnail($new_thumbnail, $thumbnail_name, $thumbnail_size);

            return response()->json(['status' => "success", 'team' => $team->slack]);
        }
    }


    public function deleteThumbnail($name)
    {

        $media = Media::hasName($name);

        if ($media != null) {
            $string = $media->filename;
            $exists = Storage::disk('pages')->exists('/teams' . '/' . $string);
            $elemnt = Storage::disk('pages')->delete('/teams' . '/' . $string);
            $media->delete();
        }

        return response()->json(['status' => "success"]);
    }
}