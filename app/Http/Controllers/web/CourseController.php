<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Teacher;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses'] = Course::orderBy('id','desc')->get();
        return view('web/course/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['teacher'] = Teacher::find($id);
        return view('web/course/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if( Course::create($data) ){
            return redirect('courses/');
        }
        else{
            return 'Error en el registro';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['course'] = Course::with('teacher','weeks')->find($id);
        return view('web/course/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['course'] = Course::find($id);
        $data['teachers'] = Teacher::all();
        return view('web/course/edit', $data);
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
        $data = Course::find($id);
        $data->fill($request->all());
        if( $data->save() ){
            return redirect('courses/');
        }
        else{
            return 'Error en la actualización';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * [showSilabo description]
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showSilabo($id)
    {
        $data['course'] = Course::with('teacher','weeks','bibliographies')->find($id);
        return view('web/course/silabo', $data);
    }
}
