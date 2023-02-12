<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Utilities;
use App\Models\Project;
use App\Models\Customer;
use App\Models\CategoriesProject;



class ProjectsController extends Controller
{


    public function index(){

        $projects = Project::latest()->get();

        return view('managers.views.projects.index')->with([
            'projects' => $projects,
        ]);
    }

    public function create(){

        $categories = CategoriesProject::latest()->get();
        $categories->prepend('' , '');
        $categories = $categories->pluck('label','id');

        $customers = Customer::latest()->get();
        $customers->prepend('' , '');
        $customers = $customers->pluck('label','id');

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');

        return view('managers.views.projects.create')->with([
            'categories' => $categories,
            'customers' => $customers,
            'availables' => $availables,


        ]);

    }

    public function storage(Request $request){

        $project = new Project;
        $project->label = $request->label;
        $project->slack = $this->generate_slack("projects");
        $project->description =$request->description;
        $project->content =$request->content;
        $project->categorie_id = $request->categorie;
        $project->customer_id = $request->customer;
        $project->available = $request->available;
        $project->created_at = Utilities::validateDates($request->date);
        $project->updated_at = new \DateTime();
        $project->save();

        return redirect()->route('manager.projects');


    }
    public function edit($slack){

        $project = Project::slack($slack);

        $categories = CategoriesProject::latest()->get();
        $categories->prepend('' , '');
        $categories = $categories->pluck('label','id');

        $customers = Customer::latest()->get();
        $customers->prepend('' , '');
        $customers = $customers->pluck('label','id');

        $availables = collect([
            ['id' => '1', 'title' => 'Activo'],
            ['id' => '0', 'title' => 'Inactivo'],
        ]);

        $availables = $availables->pluck('title','id');

        return view('managers.views.projects.edit')->with([
            'project' => $project,
            'categories' => $categories,
            'customers' => $customers,
            'availables' => $availables,


        ]);
    }

    public function update(Request $request, $slack){

        $project = Project::slack($slack);
        $project->label = $request->label;
        $project->description = $request->description;
        $project->content = $request->content;
        $project->categorie_id = $request->categorie;
        $project->customer_id = $request->customer;
        $project->available = $request->available;
        $project->updated_at = new \DateTime();
        $project->save();

        return redirect()->route('manager.projects');
    }


    public function destroy($slack){

        $project = Project::slack($slack);
        $project->delete();

        return redirect()->route('manager.projects');
    }








}
