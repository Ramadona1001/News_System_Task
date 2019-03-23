@extends('layouts.master')

@section('title','Home')

@section('content')

<div class="row">
    <div class="col-lg-12" style="background: #2c3e50;color: white;padding: 10px;text-align: center;">
        <h1>NEWS SYSTEM - <a href="{{ url('/add') }}"><i class="fa fa-plus" style="background: white; color: #2c3e50; padding: 10px; border-radius: 50%; font-size: 27px;"></i></a></h1>
    </div>
</div>

<hr>


<div class="row" >
@foreach($news as $new)

<div class="col-lg-12" style="background: #e8e6e642; padding: 20px; margin-top: 20px; margin-bottom: 20px; box-shadow: 0 0 1px 2px #0000001c;">



<h3 style="color:#2c3e50;font-weight:bold;">{{ $new->title }} <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('deleteNews', $new->id)}}" style="float: right;border-radius: 50%;"><i class="fa fa-trash"></i></a></h3>
      <h6 style="color:#3498db;font-weight:bold">{{ $new->short_desc }} <span style="color: white; font-weight: bold; background: green; padding: 8px; border-radius: 20px;"><i class="fa fa-calendar-week"></i>&nbsp;{{ $new->add_date }}</span></h6>
      <hr>
  <!-- Blog entry -->
  <p style="color:#c0392b;font-weight:bold;">{!! $new->content !!}</p>
  </div>
  <hr>

@endforeach

{{ $news->links() }}



</div>


</div>

@endsection