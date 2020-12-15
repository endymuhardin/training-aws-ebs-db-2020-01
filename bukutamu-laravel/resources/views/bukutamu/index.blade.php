@extends('layout')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Aplikasi Bukutamu</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('bukutamu.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Website</th>
            <th width="280px"class="text-center">Komentar</th>
        </tr>
        @foreach ($bukutamu as $bt)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $bt->nama }}</td>
            <td>{{ $bt->email }}</td>
            <td>{{ $bt->website }}</td>
            <td>{{ $bt->komentar }}</td>
        </tr>
        @endforeach
    </table>
 
    {!! $bukutamu->links() !!}
 
@endsection