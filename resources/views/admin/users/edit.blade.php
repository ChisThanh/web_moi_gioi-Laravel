@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <p class="btn btn-danger mb-2">
                                {{ $title }}
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <button type="button" class="btn btn-success mb-2 mr-1"><i
                                        class="mdi mdi-settings"></i></button>
                                <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <hr>
                    <div>
                        <form method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="start_date" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group col-md">
                                    <label for="end_date" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </center>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
