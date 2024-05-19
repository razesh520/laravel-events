@auth
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>

            @foreach (Request::segments() as $segment)
                <li class="breadcrumb-item"><a href="#">{{ Str::title($segment) }}</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Data</li> --}}
            @endforeach
        </ol>
    </nav>
@endauth
