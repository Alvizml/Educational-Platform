@extends('layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 text-center">
                <h1 style="font-weight: bold;">Student List</h1>
            </div>
        </div>
        <div class="row mb-6">
            <div class="col-md-6">
                <form action="{{url('admin/student/search')}}" method="GET" class="form-inline">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{url('admin/student/add')}}" class="btn btn-primary">Add New Student</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col -->
                <div class="col-md-12">

                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-weight: bold; text-align: Center;">All Students</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Roll Number</th>
                                        <th>Admission Number</th>
                                       <!-- <th>Class</th>  -->
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getRecord as $key)
                                    <tr>
                                        <td>{{ $key->id }}</td>
                                        <td>{{ $key->name }}</td>
                                        <td>{{ $key->last_name }}</td>
                                        <td>{{ $key->roll_number }}</td>
                                        <td>{{ $key->admission_number }}</td>
                                        <!-- <td>{{ $key->class_id }}</td>  -->
                                        <td>{{ $key->email }}</td>
                                        <td>{{ $key->number }}</td>
                                        <td>
                                          <a href="{{url('admin/student/edit/'.$key->id)}}"class="btn btn-primary">Edit</a>
                                          <a href="{{url('admin/student/delete/'.$key->id)}}"class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

