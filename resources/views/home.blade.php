@extends('layouts.master')

@section('content')
    <div class="cards" id="morphing">
        <div class="section">
            <div class="container">
                <h2 class="section-title">{{ __('frontpage.title') }}</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-refine card-plain">
                            <div class="card-content">
                                <h4 class="card-title">
                                    Refine
                                    <button class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right"
                                        rel="tooltip" title="Reset Filter">
                                        <i class="material-icons">cached</i>
                                    </button>
                                </h4>
                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <h4 class="panel-title">Price Range</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body panel-refine">
                                            <span id="price-left" class="price-left pull-left"
                                                data-currency="&euro;">100</span>
                                            <span id="price-right" class="price-right pull-right"
                                                data-currency="&euro;">850</span>
                                            <div class="clearfix"></div>
                                            <div id="sliderRefine" class="slider slider-rose"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title">Clothing</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox"
                                                        checked="">
                                                    Blazers
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Casual Shirts
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Formal Shirts
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Jeans
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Polos
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Pyjamas
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Shorts
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Trousers
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">Designer</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox"
                                                        checked="">
                                                    All
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Polo Ralph Lauren
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <h4 class="panel-title">Colour</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox"
                                                        checked="">
                                                    All
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Black
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Blue
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="col-md-9">
                        <div class="row">
                            @foreach ($data as $each)
                                <x-post :post="$each" />
                            @endforeach







                            <div class="col-md-7 col-md-offset-3">
                                <ul class="pagination pagination-info">
                                    {{ $data->links() }}
                                </ul>
                                {{-- <button rel="tooltip" class="btn btn-rose btn-round">Load more...</button> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- section -->


    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            var slider2 = document.getElementById('sliderRefine');

            noUiSlider.create(slider2, {
                start: [42, 880],
                connect: true,
                range: {
                    'min': [30],
                    'max': [900]
                }
            });

            var limitFieldMin = document.getElementById('price-left');
            var limitFieldMax = document.getElementById('price-right');

            slider2.noUiSlider.on('update', function(values, handle) {
                if (handle) {
                    limitFieldMax.innerHTML = $('#price-right').data('currency') + Math.round(values[
                        handle]);
                } else {
                    limitFieldMin.innerHTML = $('#price-left').data('currency') + Math.round(values[
                        handle]);
                }
            });
        });
    </script>
@endpush
