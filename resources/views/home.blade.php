@extends('layouts.app') 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">


        <div class="col-12">
            <div class="card ">

                <div class="card-body">
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example2 smsMisTable" class="table table-bordered table-striped" >
                                    <thead style="background: lightskyblue;">
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Updated</th>
                                            <th>Agent</th>                                        
                                            <th>Priority</th>                                        
                                            <th>Owner</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>

                                    @if(!empty($user) && count($user)>0)
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->usertype}}</td>
                                            <td>{{$user->campaign_id}}</td>
                                            <td>{{$user->created_at }}</td>
                                            <td>{{$user->updated_at }}</td>
                                            <td> 
                                                <a class="btn btn-primary" href=""><i class="fa fa-key"></i></a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @else
                                    <tbody>
                                        No Data to Display
                                    </tbody>
                                    @endif



                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
