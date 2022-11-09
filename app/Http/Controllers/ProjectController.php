<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            'projects' => Project::orderBy('created_at', 'desc')->paginate(3)
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
            'title'=> 'required|max:255',
            'description' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);
        
        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/projects_image', $filenameSimpan);
        } else {
            $filenameSimpan = 'noimage.png';
        }

        //req input
        $project = new Project;
        $project->picture = $filenameSimpan;
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
            'title'=> 'required', //alpha numerik tidak menerima spasi sehingga tidak menerima input dengan 1 kata
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
        File::delete(public_path() . '/public/projects_image/' . $project->picture);
        $project = Project::find($id)->delete();
        
        return redirect('projects')->with(['success' => 'data has succesfully removed']);
    }
    
    public function hapus($id)
    {
        $projects = Project::find($id);
        $projects->delete();
        return redirect('/projects')->with(['success' => 'data has succesfully removed']);
    }

    // membatasi akses
    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index", "show"]]);
    }
}
