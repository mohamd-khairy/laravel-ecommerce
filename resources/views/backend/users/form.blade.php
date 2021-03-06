
@CSRF
<div class="row">
    <div class="col-md-6">
    @php $input = "name"; @endphp
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Username</label>
        <input type="text" name="{{$input}}" value="{{ $row->$input ?? old($input) }}" class="form-control @error($input) is-invalid @enderror">
        @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="col-md-6">
    @php $input = "email"; @endphp
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Email Address</label>
        <input type="email" name="{{$input}}" value="{{ $row->$input ?? old($input) }}" class="form-control @error($input) is-invalid @enderror">
        @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
    <div class="col-md-6">
    @php $input = "password"; @endphp
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Password</label>
        <input type="password" name="{{$input}}"  class="form-control @error($input) is-invalid @enderror">
        @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>

</div>
