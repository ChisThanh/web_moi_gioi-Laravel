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
                    <div class="table">
                        <form action="{{ route('admin.posts.store') }}" method="POST" id="form-create">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="#" class="col-form-label">Company</label>
                                    <select class="form-control select2" data-toggle="select2"
                                        name="company"data-tags="true" id="select-company">

                                    </select>
                                </div>
                                <div class="form-group col-md">
                                    <label for="#" class="col-form-label">Language</label>
                                    <select class="form-control select2-multiple" data-toggle="select2" multiple="multiple"
                                        data-placeholder="Choose ..." name="languages[]">
                                        @foreach ($languages as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="#" class="col-form-label">City</label>
                                    <select class="form-control select2" data-toggle="select2" id="select-city"
                                        name="city">
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="#" class="col-form-label">Distinct</label>
                                    <select class="form-control select2" data-toggle="select2" id="select-distinct"
                                        name="distinct">
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="min_salary" class="col-form-label">Min Salary</label>
                                    <input type="text" class="form-control" id="min_salary" name="min_salary">
                                </div>

                                <div class="form-group col-md">
                                    <label for="max_salary" class="col-form-label">Max Salary</label>
                                    <input type="text" class="form-control" id="max_salary" name="max_salary">
                                </div>
                                <div class="form-group col-md">
                                    <label for="currency_salary" class="col-form-label">Currency Salary</label>
                                    <select id="currency_salary" class="form-control" name="currency_salary">
                                        @foreach ($currencySalary as $val => $index)
                                            <option value="{{ $index++ }}">{{ $val }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="requirement" class="col-form-label">Requirement</label>
                                    <textarea class="form-control" name="requirement" id="requirement">
                                </textarea>
                                </div>
                                <div class="form-group col-md">
                                    <label for="number_applicant" class="col-form-label">Number applicant</label>
                                    <input type="number" class="form-control" id="number_applicant"
                                        name="number_applicant">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="start_date" class="col-form-label">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date">
                                </div>
                                <div class="form-group col-md">
                                    <label for="end_date" class="col-form-label">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="form-group col-md">
                                    <label for="#" class="col-form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug">
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
    <div class="modal fade" id="model-company" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Add company</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.company.store') }}" method="POST" id="form-company"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="company-name" class="col-form-label">Company Name</label>
                                <input type="text" class="form-control" id="company-name" placeholder="Name"
                                    name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="select-city-company" class="col-form-label">City</label>
                                <select class="form-control select2" data-toggle="select2" id="select-city-company"
                                    name="city-company">
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="select-distinct-company" class="col-form-label">Distinct</label>
                                <select class="form-control select2" data-toggle="select2" id="select-distinct-company"
                                    name="distinct-company">
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="address" class="col-form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address"
                                    name="address">
                            </div>
                            <div class="form-group col-md">
                                <label for="address2" class="col-form-label">Address2</label>
                                <input type="text" class="form-control" id="address2" placeholder="Address2"
                                    name="address2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="address" class="col-form-label">Zipcode</label>
                                <input type="text" class="form-control" id="address" placeholder="Zipcode"
                                    name="zipcode">
                            </div>
                            <div class="form-group col-md">
                                <label for="address2" class="col-form-label">Phone</label>
                                <input type="text" class="form-control" id="address2" placeholder="Phone"
                                    name="phone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="address" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="address" placeholder="Email"
                                    name="email">
                            </div>
                            <div class="form-group col-md">
                                <label for="##" class="col-form-label">Logo</label>
                                <input type="file" id="file-logo" class="d-none" name="logo"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                <label for="file-logo" class="btn-success form-control">Upload Logo</label>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                            </div>
                            <div class="form-group col-md">
                                <img class="col-form-label" id="blah" alt="your image" width="100"
                                    height="100" />
                            </div>
                        </div>
                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary">Add Company</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@push('css')
    <link href="{{ asset('admin/assets/css/vendor/summernote-bs4.css') }}" rel="stylesheet" type="text/css"
        id="light-style" />
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="{{ asset('admin/assets/js/vendor/summernote-bs4.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#requirement').summernote();
            async function fetchData(url) {
                try {
                    const response = await fetch(url);
                    const data = await response.json();
                    return data;
                } catch (error) {
                    console.error('Error fetching data:', error);
                    throw error;
                }
            }

            async function loadCities() {
                const cityJs = await fetchData('{{ asset('location/city.json') }}');
                cityJs.forEach(each => {
                    $("#select-city")
                        .append(`<option
                        data-id="${each.code}"
                        value="${each.name}">${each.name}</option>`);
                    $("#select-city-company")
                        .append(`<option
                        data-id="${each.code}"
                        value="${each.name}">${each.name}</option>`);
                });
                var code = $('#select-city').find(':selected').data('id');
                loadDistinct(code);

            }

            async function loadDistinct(cityCode) {
                const distinctJs = await fetchData('{{ asset('location/distinct.json') }}');
                distinctJs.forEach(each => {
                    if (each.province_code === parseInt(cityCode)) {
                        $("#select-distinct")
                            .append(`<option
                            data-id="${each.code}"
                            value="${each.name}">${each.name}</option>`);
                        $("#select-distinct-company")
                            .append(`<option
                            data-id="${each.code}"
                            value="${each.name}">${each.name}</option>`);
                    }
                });
            }

            function actionSelect() {
                let changingSelectCity = false;
                let changingSelectDis = false;

                $('#select-city').on('change', function() {
                    $("#select-distinct").empty();
                    $("#select-distinct-company").empty();
                    var code = $('#select-city').find(':selected').data('id');
                    loadDistinct(code);
                    updateGenerateTitle();
                    if (!changingSelectCity) {
                        changingSelectCity = true;
                        const selectedValue = $(this).val();
                        $('#select-city-company').val(selectedValue).trigger('change');
                        changingSelectCity = false;
                    }
                });
                $('#select-city-company').on('change', function() {
                    $("#select-distinct").empty();
                    $("#select-distinct-company").empty();
                    if (!changingSelectCity) {
                        changingSelectCity = true;
                        const selectedValue = $(this).val();
                        $('#select-city').val(selectedValue).trigger('change');
                        changingSelectCity = false;
                    }
                });
                $('#select-distinct').on('change', function() {
                    if (!changingSelectDis) {
                        changingSelectDis = true;
                        const selectedValue = $(this).val();
                        $('#select-distinct-company').val(selectedValue).trigger('change');
                        changingSelectDis = false;
                    }
                });
                $('#select-distinct-company').on('change', function() {
                    var code = $('#select-city-company').find(':selected').data('id');
                    loadDistinct(code);
                    if (!changingSelectDis) {
                        changingSelectDis = true;
                        const selectedValue = $(this).val();
                        $('#select-distinct').val(selectedValue).trigger('change');
                        changingSelectDis = false;
                    }
                });

                $('select[name="company"]').change(function() {
                    updateGenerateTitle();
                });
                $('select[name="city"]').change(function() {

                });
                $('select[name="languages[]"]').change(function() {
                    updateGenerateTitle();
                });
            }
            loadCities();
            actionSelect();

            function removeDiacritics(str) {
                return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            }

            function updateGenerateTitle() {
                var city = $('select[name="city"] :selected').text();
                var company = $('select[name="company"] :selected').text();
                var languages = $('select[name="languages[]"] :selected').map(function() {
                    return $(this).text();
                }).get();
                var title = '(' + city + ') - ' + company.trim() + ': ' + (languages.length > 0 ? languages.join(
                        ', ') :
                    '');
                $('#title').val(title);
                GenerateSlug(title);
            }

            function GenerateSlug(title) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('api.posts.generateSlug') }}",
                    data: {
                        title: title
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#slug').val(response.data);
                    },
                    error: function(response) {
                        console.error('');
                    }
                });

            }

            $("#form-create").submit(function(e) {
                e.preventDefault();
                var $company = $('select[name="company"] :selected').text().trim();
                $.ajax({
                    type: "PUT",
                    url: `{{ route('api.company.check') }}/${$company}`,
                    dataType: "json",
                    success: function(response) {
                        if (response.data) {
                            var $form = $("#form-create");

                            submitForm($form);
                        } else {
                            $('#model-company').modal('show');
                            $('#company-name').val($('#select-company').val());
                        }
                    }
                });
            });

            function submitForm($form) {
                var formData = new FormData($form[0]);
                $.ajax({
                    type: "POST",
                    url: $form.attr('action'),
                    data: formData,
                    dataType: "json",
                    async: false,
                    cache: false,
                    processData: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    success: function(response) {
                        notifySuccess(response.message);
                    },
                    error: function(response) {
                        if (!response.success && response.success !== undefined) {
                            notifyError(response.message);
                        }
                        if (response.responseJSON && response.responseJSON.errors) {
                            var formattedErrors = {};
                            $.each(response.responseJSON.errors, function(key, value) {
                                formattedErrors[key] = value.join('<br>');
                            });
                            $form.validate().showErrors(formattedErrors);
                            $form.find(".error").siblings("label.error").addClass("text-danger");
                        }
                    }
                });
            }

            function loadCompanies() {
                $('#select-company').empty();
                $.ajax({
                    type: "GET",
                    url: "{{ route('api.company') }}",
                    success: function(response) {
                        $.each(response.data, function(index, value) {
                            $('#select-company')
                                .append(`<option value="${value.name}">${value.name}</option>`);
                        });
                    }
                });
            }
            loadCompanies();



            $('#form-company').submit(function(e) {
                e.preventDefault();
                var $form = $(this);
                submitForm($form);
                $('#model-company').modal('hide');
            });




            function notifySuccess(message = '') {
                $.toast({
                    heading: 'Success',
                    text: message,
                    showHideTransition: 'slide',
                    position: 'bottom-right',
                    icon: 'success'
                })
            }


            function notifyError(message = '') {
                $.toast({
                    heading: 'ERROR',
                    text: message,
                    showHideTransition: 'slide',
                    position: 'bottom-right',
                    icon: 'error'
                })
            }




















            // $("#form-create").validate({
            // // rules: {
            // // min_salary: {
            // // required: true,
            // // },
            // // max_salary: {
            // // required: true,
            // // },
            // // title: {
            // // required: true,
            // // },
            // // },
            // errorClass: "text-danger",
            // // messages: {
            // // min_salary: {
            // // required: "Vui lòng nhập mức lương tối thiểu."
            // // },
            // // max_salary: {
            // // required: "Vui lòng nhập mức lương tối đa."
            // // },
            // // title: {
            // // required: "Vui lòng nhập tiêu đề."
            // // }
            // // },
            // submitHandler: function(form) {
            // $.ajax({
            // type: "POST",
            // url: $(form).attr('action'),
            // data: $(form).serialize(),
            // dataType: "json",
            // success: function(response) {
            // },
            // error: function(response) {
            // if (response.responseJSON && response.responseJSON.errors) {
            // var formattedErrors = {};
            // $.each(response.responseJSON.errors, function(key, value) {
            // formattedErrors[key] = value.join('<br>');
            // });
            // $("#form-create").validate().showErrors(formattedErrors);
            // }
            // }
            // });
            // }
            // });

        });
    </script>
@endpush

{{--
@guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
