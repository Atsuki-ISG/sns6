@extends('layouts.admin')
@section('title','ホーム')
@section('content')
    <div class="cantainer">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ホーム</h2>
                <form action="{{ url('admin/sns/create') }}" method="post" enctype=="multipart/for-data">


                    @if (count($errors > 0))
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                </form>
            </div>
        </div>
    </div>
@endsection