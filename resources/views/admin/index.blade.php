@extends('templates.admin.layout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header text-center" style="margin-top: 20px;">Welcome {{auth()->user()->name}}</h1>
  </div>
</div><!--/.row-->



</div><!--/.main-->
@endsection
