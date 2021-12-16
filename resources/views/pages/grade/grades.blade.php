@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{trans('main_trans.Grade_list')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{trans('main_trans.Grade_list')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!--=================================
 Main content -->

 <!--=================================
wrapper -->

    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered p-0">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>{{trans('grades_trans.grade_name')}}</th>
                      <th>{{trans('grades_trans.grade_note')}}</th>
                      <th>{{trans('grades_trans.grade_action')}}</th>
                  </tr>
              </thead>
              <tbody>
                  <? $i=0;?>
                  @foreach($grades as $grade)
                  <? $i++;?>
                  <tr>
                      <td>{{$i}}</td>
                      <td>{{$grade->id}}</td>
                      <td>{{$grade->id}}</td>
                      <td>61</td>
                  </tr>
                @endforeach
    
               
              </tbody>              
           </table>
          </div>
          </div>
        </div>   
      </div>
 <!--=================================
 wrapper -->
@endsection
@section('js')

@endsection
