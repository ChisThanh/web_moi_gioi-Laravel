@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route("admin.$table.create") }}" class="btn btn-danger mb-2"><i
                                    class="mdi mdi-plus-circle mr-2"></i>
                                Add {{ $title }}</a>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <div class="d-inline-block">
                                    <label for="csv" class="btn btn-success mb-2 mr-1">Import CSV</label>
                                    <input type="file" id="csv" class="d-none"
                                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                        name="csv">
                                </div>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-striped dt-responsive nowrap w-100"
                            id="products-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>job title</th>
                                    <th>city</th>
                                    <th>currency salary</th>
                                    <th>created_at</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                            </tbody>
                        </table>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="dataTables_info" id="products-datatable_info" role="status" aria-live="polite"></div>
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="dataTables_paginate paging_simple_numbers" id="products-datatable_paginate">
                <ul class="pagination pagination-rounded" id="pagination">

                </ul>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            const $table = $('#table');
            const paginationContainer = $('#pagination');
            let currentPage = 1;

            function fetchData(page) {
                $.ajax({
                    url: `/api/posts?page=${page}`,
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        updateUI(data.data);
                        updatePagination(data);
                    },
                    error: function(error) {
                        alert(error);
                    }
                });
                const newUrl = window.location.pathname + `?page=${page}`;
                history.pushState({
                    page: page
                }, null, newUrl);
            }

            function updateUI(posts) {
                $table.empty();
                $.each(posts, function(index, value) {
                    $table.append($('<tr>')
                        .append($('<td>').append(value.id))
                        .append($('<td>').append(value.job_title))
                        .append($('<td>').append(value.city))
                        .append($('<td>').append(value.currency_salary))
                        .append($('<td>').append(convertDateToDateTime(value
                            .created_at)))
                        .append($(` <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                        <form action="" method="POST" class="d-inline-block action-icon">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn"><i class="mdi mdi-delete"></i></button>
                                        </form>
                                    </td>`))
                    )
                });
            }

            function updatePagination(data) {
                paginationContainer.empty();
                for (let i = 1; i <= data.last_page; i++) {
                    const pageLink = $('<li class="page-item">').append($('<a class="page-link" href="##">').text(
                        i));
                    if (i === currentPage) {
                        pageLink.addClass('active');
                    }
                    pageLink.click(function() {
                        currentPage = i;
                        fetchData(currentPage);
                    });
                    pageLink.on('click', function(e) {
                        e.preventDefault();
                        currentPage = i;
                        fetchData(currentPage);
                    });
                    paginationContainer.append(pageLink);
                }
            }
            const urlParams = new URLSearchParams(window.location.search);
            const pageParam = urlParams.get('page');
            if (pageParam) {
                currentPage = parseInt(pageParam);
            }
            fetchData(currentPage);

            function convertDateToDateTime(date) {
                let m = new Date(date);
                return ("0" + m.getUTCDate()).slice(-2) + "/" +
                    ("0" + (m.getUTCMonth() + 1)).slice(-2) + "/" +
                    m.getUTCFullYear() + " " +
                    ("0" + m.getUTCHours()).slice(-2) + ":" +
                    ("0" + m.getUTCMinutes()).slice(-2);
            }

            $('#csv').change(function(e) {
                var formData = new FormData();
                formData.append('file', $(this)[0].files[0]);
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                $.ajax({
                    url: '{{ route('admin.posts.importCSV') }}',
                    type: "POST",
                    dataType: "json",
                    enctype: 'multipart/form-data',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endpush
