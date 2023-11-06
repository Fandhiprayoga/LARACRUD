@extends('layout.main')

@section('content')
    <style>
        .card-student-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
    <div class="card">
        <div class="card-header card-student-header">
            Form Add Data Students
            <a type="button" class="btn btn-warning" href="{{ url('students') }}">Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('students') }}">
                @csrf
                <div class="mb-3">
                    <label for="txtnim" class="form-label">NIM</label>
                    <input type="text" class="form-control @error('txtnim') is-invalid @enderror" name="txtnim"
                        id ="txtnim" aria-describedby="txtnim" value="{{ old('txtnim') }}">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @error('txtnim')
                        <div id="" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="txtfullname" class="form-label">Fullname</label>
                    <input type="text" class="form-control @error('txtfullname') is-invalid @enderror" name="txtfullname" id ="txtfullname" value="{{ old('txtfullname') }}"
                        aria-describedby="txtfullname">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @error('txtfullname')
                        <div id="" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="txtgender" class="form-label">gender</label>
                    <select name="txtgender" id="txtgender" aria-describedby="txtgender" class="form-select form-select-sm @error('txtgender')
                        is-invalid
                    @enderror">
                        <option value="" selected>--select gender--</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>

                    @error('txtgender')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="txtaddress" class="form-label">Address</label>
                    <textarea class="form-control @error('txtaddress')
                        is-invalid                        
                    @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10"
                        aria-describedby="txtaddress">{{ old('txtaddress') }}</textarea>
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @error('txtaddress')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="txtemail" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('txtemail')
                        is-invalid
                    @enderror" id="txtemail" name="txtemail" aria-describedby="txtemail" value="{{ old('txtemail') }}">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @error('txtemail')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="txtphone" class="form-label">Phone</label>
                    <input type="text" class="form-control @error('txtphone')
                        is-invalid
                    @enderror" id="txtphone" name="txtphone" aria-describedby="txtphone" value="{{ old('txtphone') }}">
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    @error('txtphone')
                    <div id="" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
