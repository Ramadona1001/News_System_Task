@extends('layouts.master')

@section('title','Update News')

@section('content')

<div class="row">
    <div class="col-lg-12" style="background: #2c3e50;color: white;padding: 10px;text-align: center;">
        <h1>NEWS SYSTEM - <a href="{{ url('/add') }}"><i class="fa fa-plus" style="background: white; color: #2c3e50; padding: 10px; border-radius: 50%; font-size: 27px;"></i></a></h1>
    </div>
</div>

<hr>


<div class="row" >


<div class="col-lg-12" style="background: #e8e6e642; padding: 20px; margin-top: 20px; margin-bottom: 20px; box-shadow: 0 0 1px 2px #0000001c;">


<form action="{{ route('updateNews',$news->id) }}" method="post">

@method('PUT')
@csrf

<input type="hidden" name="id" id="" class="form-control" placeholder="Enter News Title" value="{{ $news->id }}">
<input type="text" name="title" id="" class="form-control" placeholder="Enter News Title" value="{{ $news->title }}"><br>
<input type="text" name="short_desc" id="" class="form-control" placeholder="Enter News Short Description" value="{{ $news->short_desc }}"><br>
<textarea name="content" id="" cols="30" rows="10" placeholder="Enter News Content" class="form-control">{{ $news->content }}</textarea>

<hr>

<input type="submit" value="Update News" class="btn btn-warning">

</form>


</div>


</div>

@endsection