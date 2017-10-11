<style>

</style>

@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="flash flash-danger" id="error">
            {{ $error }}
        </div>
    @endforeach
@endif
