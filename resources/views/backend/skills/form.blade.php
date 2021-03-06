
@CSRF
<div class="row">
    <div class="col-md-12">
    @php $input = "name"; @endphp
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">name</label>
        <input type="text" name="{{$input}}" value="{{ $row->$input ?? old($input) }}" class="form-control @error($input) is-invalid @enderror">
        @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
</div>
