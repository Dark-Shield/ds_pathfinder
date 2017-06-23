@extends('templates.master')
@section('title','Database Test')
@section('content')
<div class="content">
    <div class="title m-b-md">
        DatabaseTest
    </div>
    <div class="links">
      @foreach($tables as $table)
              <a href="dbdump/{{$table->Tables_in_wyste_ds }}">{{$table->Tables_in_wyste_ds}}</a>
      @endforeach
    </div>
</div>
@endsection
