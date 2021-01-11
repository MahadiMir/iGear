<?php

namespace App\Http\Controllers;

use App\Exp;
use App\Person;
use App\Product;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;

class ExpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $exps = Exp::all();
        return view('exp.exp1',compact('exps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Exp::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
        ]);
//        $persons = Exp::all();
        $exps = Exp::all();
        return view('exp.exp1',compact('exps'));
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
    public function edit($id)
    {
        $exp = Exp::find($id);
        return view('exp.edit',compact('exp'));
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
//        $exp = Exp::find($id);
//        $exp->update([
//            'name' => $request->name,
//            'age' => $request->age,
//            'address' => $request->address,
//        ]);
//        $exps = Exp::all();
//        return view('exp.exp1',compact('exps'));
       return $id;
    }
    public function expupdate(Request $request){
        $id = $request->id;
        $exp = Exp::find($id);
        $exp->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
        ]);
        $exps = Exp::all();
        return view('exp.exp1',compact('exps'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exp::find($id)->delete();
        return redirect()->back();
    }
}
