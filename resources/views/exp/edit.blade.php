@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center"><b/> Edit Employee</h2>
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped" style="background-color: #8FBCBB">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Update</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form class="insert-form" id="insert-form" method="GET" action="{{route('exp.expupdate')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('GET')
                                        <tr>
                                            <td width="10%">
                                                <input type="hidden" class="form-control" id="id" name="id" value="{{$exp->id}}">
                                                <input type='text' class="form-control" id="name" name="name" value="{{$exp->name}}" required>
                                            </td>
                                            <td width="15%"><input type="text" class="form-control" id="age" name="age" value="{{$exp->age}}" required></td>
                                            <td width="60%"><input type="text" class="form-control" id="address" name="address" value="{{$exp->address}}"  required></td>
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
@stop
