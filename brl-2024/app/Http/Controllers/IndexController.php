<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\ProjectIdeaRequest;
use App\Models\ProjectIdea;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projectIdeaStore(ProjectIdeaRequest $request)
    {
        $projectIdea = ProjectIdea::create([
            'project_tags' => json_encode($request->project_tags),
            'project_details' => $request->project_details,
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->code.$request->number,
        ]);

        $notification = array(
            'message' => 'Project Idea Shared Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
