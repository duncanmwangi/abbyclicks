<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\Section;
use App\Http\Requests\admin\SectionRequest;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::where('id','>',0)->paginate(10);
        return view('admin.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionRequest $request)
    {
        Section::create([
            'name' => request('name'),
            'description' => request('description'),
            'width' => request('width'),
            'height' => request('height'),
            'performance' => request('performance'),
            'display' => request('display'),
            'created_by' => auth()->id()
        ]);
        return redirect()->route('admin.sections.index')->with('success','A new section was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //return view('admin.sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('admin.sections.edit',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionRequest $request, Section $section)
    {
        $section->name = request('name');
        $section->description = request('description');
        $section->width = request('width');
        $section->height = request('height');
        $section->display = request('display');
        $section->performance = request('performance');
        $section->save();

        return redirect()->route('admin.sections.edit',$section->id)->with('success','Section has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('admin.sections.index')->with('success','Section has been deleted successfully');
    }
}
