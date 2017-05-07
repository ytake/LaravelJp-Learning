@extends('layouts.default')
@section('content')
    <div class="col-xs-12 col-sm-9">
        {!! $content->content() !!}
    </div>
@stop
