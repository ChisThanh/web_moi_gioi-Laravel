@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-danger mb-2"><i
                                    class="mdi mdi-plus-circle mr-2"></i>
                                Add Customers</a>
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
                    <form id="form-filter-role">
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="role" class="col-form-label">Role</label>
                                <select id="role" class="form-control select-filter" name="role">
                                    <option value="">ALL</option>
                                    @foreach ($roles as $value => $key)
                                        <option value="{{ $key }}"
                                            @if ((string) $key === $selectRole) selected @endif>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="city" class="col-form-label">City</label>
                                <select id="city" class="form-control select-filter" name="city">
                                    <option value="">ALL</option>
                                    @foreach ($cities as $key => $value)
                                        <option value="{{ $value }}"
                                            @if ((string) $value === $selectCity) selected @endif>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="inputState" class="col-form-label">State</label>
                                <select id="inputState" class="form-control">
                                    <option>Choose</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                            id="products-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Create Date</th>
                                    <th>Status</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $each)
                                    <tr>
                                        <td>
                                            {{ $each->id }}
                                        </td>
                                        <td class="table-user">
                                            <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);"
                                                class="text-body font-weight-semibold">{{ $each->name }}</a>
                                        </td>
                                        <td>
                                            {{ $each->RoleName }}
                                        </td>
                                        <td>
                                            {{ $each->email }}
                                        </td>
                                        <td>
                                            New York
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>
                                        <td>
                                            <span class="badge badge-success-lighten">Active</span>
                                        </td>

                                        <td>

                                            <a href="{{ route('admin.users.edit', $each) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>

                                            <form action="{{ route('admin.users.destroy', ['user' => $each]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn"><i class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="products-datatable_info" role="status" aria-live="polite"></div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="products-datatable_paginate">
                <ul class="pagination pagination-rounded">
                    {{ $users->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('.select-filter').change(function(e) {
                e.preventDefault();
                var $role = $('#form-filter-role');
                $role.submit();
            });
        });
    </script>
@endpush
