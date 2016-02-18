@extends('admin')

@section('page_title', 'Dashboard')

@section('content')

@if( ! Auth::user()->admin)
  @include('partials.info')
@endif

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{ $count['users'] }}</h3>
      <p>Total Pendaftar</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

@endsection

@section('script')
	$(function () {
        $(".textarea").wysihtml5();
    });
@endsection
