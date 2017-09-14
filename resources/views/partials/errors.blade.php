@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <span class="glyphicon glyphycon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{ $error }}
                    <br/>
                @endforeach
            </ul>
        </div>
    </div>
@endif
