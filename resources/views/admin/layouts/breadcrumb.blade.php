{{-- <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach ($breadcrumbs as $key => $breadcrumb)
                        <li class="breadcrumb-item">
                            @if ($breadcrumb->url && $key !== count($breadcrumbs) - 1)
                                <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                            @else
                                {{ $breadcrumb->title }}
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>
            <h4 class="page-title">{{ $title ?? 'Chưa tuyền kìa' }}</h4>
        </div>
    </div>
</div> --}}
