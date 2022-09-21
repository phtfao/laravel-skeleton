@if ($errors->any())
    <div class="alert alert-warning" role="alert">
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('includes.flash-message')