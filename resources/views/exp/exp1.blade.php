@extends('layouts.master')
@section('title', 'iGear')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center"><b/>Add Person</h2>
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped" style="background-color: #8FBCBB">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Submit</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form class="insert-form" id="insert-form" method="post" action="{{route('exp.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <tr>
                                            <td width="10%"><input type='text' class="form-control" id="name" name="name" placeholder="Name" required></td>
                                            <td width="15%"><input type="text" class="form-control" id="age" name="age" placeholder="Age" required></td>
                                            <td width="60%"><input type="text" class="form-control" id="address" name="address" placeholder="Address" required></td>
                                            <td width="10%"><button name="submit" class="btn btn-info btn-sm" id="submit"><i class="mdi mdi-send"></i></button></td>
                                        </tr>
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                <h2 class="text-center"><b/>Registered Person</h2>
                <div class="row table-responsive">
                    <div class="col-lg-12">
                            <table class="table table-striped" id="table_sub_cateogry">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name </th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($exps as $exp)
                                <tr>

                                    <td>{{$exp->id}}</td>
                                    <td>{{$exp->name}}</td>
                                    <td>{{$exp->age}}</td>
                                    <td>{{$exp->address}}</td>
                                    <td width="10%"><a href="{{route('exp.edit', $exp->id )}}" class="btn btn-dark btn-block"><i class="mdi mdi-pencil"></i></a></td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="post" action="{{route('exp.destroy', $exp->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button name="submit" class="btn btn-danger btn-block" id="submit"><i class="mdi mdi-trash-can"></i></button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br/>


                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
    </div>
@stop
