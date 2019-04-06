@if(!$errors->isEmpty())
    <div>
        <strong>Ooops !! something went wrong</strong>
    </div>

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif