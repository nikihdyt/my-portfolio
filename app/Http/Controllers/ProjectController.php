<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "projects",
            'projects' => Project::all()
        );
        // melempar data ke view
        return view('projects.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.add-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating data
        $validateData = $request->validate([
            'title'=> 'required', //alpha numerik tidak menerima spasi sehingga tidak menerima input lebih dari 1 kata
            'description' => 'required'
        ]);

        //req input
        $project = new Project;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save();

        return redirect('projects')-> with('success','data succesfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "projects",
            'projects' => Project::find($id)
        );
        return view('projects.project-detail')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "projects",
            'projects' => Project::find($id)
        );
        return view('projects.edit-project')->with($data);
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
        //validating data
        $validateData = $request->validate([
            'title'=> 'required|AlphaNum', //alpha numerik tidak menerima spasi sehingga tidak menerima input dengan 1 kata
            'description' => 'required'
        ]);

        Project::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('projects')-> with('success','data succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $project = Project::find($id)->delete();
        
        return redirect('projects')->with(['success' => 'data has succesfully removed']);
    }
    
    public function hapus($id)
    {
        $projects = Project::find($id);
        $projects->delete();
        return redirect('/projects')->with(['success' => 'data has succesfully removed']);
    }
}
