<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Classroom;
use App\Models\Group_time;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;



class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Groups= Group::simplePaginate();
        return view('Groups.index',compact('Groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teacher::All();
        $subjects = Subject::all();
        $classroom = Classroom::all();
        $groupTime = Group_time::all();
        return view('Groups.create', compact('teacher','subjects','classroom','groupTime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groups= new Group();
        $groups->anio = $request->anio;
        $groups->periodo = $request->periodo;
        $groups->teacher_id = $request->teacher_id;
        $groups->subject_id = $request->subject_id;
        $groups->classrooms_id = $request->classrooms_id;
        $groups->group_time = $request->group_time;

        $groups->save();

        // return 'Nuevo grupo agregado con exito';
        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $teacher, $id)
    //Request es el que trae los datos del formulario
    {
        // $group = Groups
        // return view('')

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $group->delete();
        // return redirect()->route('groups.index');

        Group::destroy($id);
        // return redirect()->route('groups.index');
        return 'Se elimino el registro';
    }
}
