@extends('layout.main')

@section('content')
    <style>
        .card-student-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header card-student-header">
            Data Students
            <button type="button" class="btn btn-primary" onclick="window.location='{{ url('students/add') }}'">Add
                Student</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Fullname</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>#</th>
                </thead>
                <tbody>
                    @foreach ($students as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->idstudent }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->gender == 'M' ? 'Male' : 'Female' }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->emailaddress }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning"
                                    onclick="window.location='{{ url('students/' . $item->idstudent) }}'">
                                    Update
                                </button>
                                <form style="display: inline;" action="{{ url('students/' . $item->idstudent) }}"
                                    method="POST" onsubmit="return validate(this);">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(fullname) {
            console.log('clicked')
            var pesan = confirm('yakin akan menghapus data  ?');
            if (pesan) {
                return false
            } else {
                return false
            }
        }

        function validate(form) {

            // validation code here ...
            let valid = true;
            if (!valid) {
                alert('Please correct the errors in the form!');
                return false;
            } else {
                return confirm('Do you really want to submit the form?');
            }
        }
    </script>
@endsection
