@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('rank_trans.Add_Rank') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('rank_trans.Add_Rank') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('Rank.store')}}" method="post"  autocomplete="off">
                             @csrf
                            
                            <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('rank_trans.Rank')}}</label>
                                    <input type="text" name="Name" class="form-control">
                                    @error('Name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            <br>
                         
                            <br>

                           
                            <br>

                           

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('message_trans.submit')}}</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
