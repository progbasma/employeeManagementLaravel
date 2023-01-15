<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Document::orderBy('id','desc')->get();
        return view('document.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Employee::orderBy('id','desc')->get();
        return view('document.create',['employees'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required|image|mimes:jpg,png,gif',
            'type'=>'required',

        ]);

        $photo=$request->file('photo');
        $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
        $dest=public_path('/images');
        $photo->move($dest,$renamePhoto);

        $data=new Document();
        $data->employee_id=$request->employee;

        $data->title=$request->title;
        $data->description=$request->description;
        $data->photo=$renamePhoto;
        $data->type=$request->type;

        $data->save();

        return redirect('document/create')->with('msg','Data has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Document::find($id);
        return view('document.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees=Employee::orderBy('id','desc')->get();
        $data=Employee::find($id);
        return view('document.edit',['employees'=>$employees,'data'=>$data]);
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
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required|image|mimes:jpg,png,gif',
            'type'=>'required',
        ]);


        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
            $dest=public_path('/images');
            $photo->move($dest,$renamePhoto);
        }else{
            $renamePhoto=$request->prev_photo;
        }

        $data=Department::find($id);
        $data->employee_id=$request->employee;
        $data->title=$request->title;
        $data->photo=$renamePhoto;
        $data->description=$request->description;
        $data->type=$request->type;

        $data->save();

        return redirect('document/'.$id.'/edit')->with('msg','Data has been submitted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Document::where('id',$id)->delete();
        return redirect('document');
    }
}
