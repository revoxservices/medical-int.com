<?php


namespace App\Http\Controllers\Managers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Faq;
use App\Models\CategoriesFaq;

class FaqsController extends Controller
{

    public function index()
    {
        $faqs = Faq::get();

        return view('managers.views.faqs.index')->with([
            'faqs' => $faqs
        ]);
    }

    /**a
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $availables = collect([
            ['id' => '0', 'title' => 'Inactivo'],
            ['id' => '1', 'title' => 'Activo'],
        ]);

        $availables = $availables->pluck('title','id');


        return view('managers.views.faqs.create')->with([
            'availables' => $availables,
        ]);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($slack)
    {

        $faq = Faq::slack($slack);

        return view('managers.views.faqs.view')->with([
            'faq' => $faq,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slack)
    {
        $faq = Faq::slack($slack);

        $availables = collect([
            ['id' => '0', 'title' => 'Inactivo'],
            ['id' => '1', 'title' => 'Activo'],
        ]);

        $availables = $availables->pluck('title','id');

        return view('managers.views.faqs.edit')->with([
            'faq' => $faq,
            'availables' => $availables,
        ]);
    }



    public function storage(Request $request)
    {

        $faq = new Faq;
        $faq->slack = $this->generate_slack("faqs");
        $faq->label = $request->label;
        $faq->description = $request->description;

        if($request->available != null){
            $faq->available = 1;
        }else{
            $faq->available = 0;
        }

        $faq->position = $request->position;
        $faq->save();

        return response()->json(['status' => "success", 'faq' => $faq->slack]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $faq = Faq::slack($request->slack);

        $faq->label = $request->label;

        if($request->available != null){
            $faq->available = 1;
        }else{
            $faq->available = 0;
        }
        
        $faq->position = $request->position;
        $faq->description = $request->description;
        $faq->save();

        return response()->json(['status' => "success", 'faq' => $faq->slack]);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slack)
    {
        $faq = Faq::slack($slack);
        $faq->delete();
        return redirect()->route('manager.faqs');
    }
}
