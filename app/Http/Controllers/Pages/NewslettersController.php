<?php


namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class NewslettersController extends Controller
{

    public function store(Request $request)
    {

        $validate = Newsletter::validate($request->email);

        if (count($validate) == 0) {
            $newsletter = new Newsletter;
            $newsletter->email = $request->email;
            $newsletter->save();

            return response()->json("success");
        } else {
            return response()->json("failed");
        }
    }
}
