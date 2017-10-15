
@if(count($errors))
        <div class="flash flash-danger" id="error">
            @foreach($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        </div>

@endif
