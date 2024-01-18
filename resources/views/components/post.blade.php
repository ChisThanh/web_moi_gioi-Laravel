<div class="col-md-4">
    <div class="rotating-card-container manual-flip" style="height: 328.844px; margin-bottom: 30px;">
        <div class="card card-rotate">
            <div class="front" style="height: 328.844px; width: 360px;">
                <div class="card-content">
                    <h5 class="category-social text-success">
                        <i class="fa fa-newspaper-o"></i>
                        {{ $title }}

                    </h5>
                    <h4 class="card-title">
                        <a href="#pablo">{{ __('frontpage.company') }} - {{ $company->name ?? '' }}</a>
                    </h4>
                    <p class="card-description">
                        {{ __('frontpage.language') }} - {{ $languages }}
                    </p>
                    <div class="footer text-center">
                        <button type="button" name="button" class="btn btn-success btn-fill btn-round btn-rotate">
                            <i class="material-icons">refresh</i> Rotate...
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="back" style="height: 328.844px; width: 360px;">
                <div class="card-content">
                    <br>
                    <h5 class="card-title">
                        {{ $title }}
                    </h5>
                    <p class="card-description">
                        {{ __('frontpage.location') }} : {{ $post->city }} -{{ $post->district }}
                    </p>
                    <div class="footer text-center">
                        <a href="#pablo" class="btn btn-just-icon btn-round btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#pablo" class="btn btn-just-icon btn-round btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <br>
                    <button type="button" name="button" class="btn btn-simple btn-round btn-rotate">
                        <i class="material-icons">refresh</i> Back..
                        <div class="ripple-container"></div>
                    </button>


                </div>
            </div>

        </div>
    </div>
</div>
