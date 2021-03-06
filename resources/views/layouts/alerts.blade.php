@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show text-center"
         role="alert">
        <ul style="list-style: none">
            @foreach ($errors->all() as $error)
                <li>
                    <span>{{ $error }}</span>
                </li>
            @endforeach
        </ul>
        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show text-center"
         role="alert">
        {{ session('message') }}
        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif

@if (session('alert'))
    <div class="alert alert-warning alert-dismissible fade show text-center"
         role="alert">
        {{ session('alert') }}
        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif
