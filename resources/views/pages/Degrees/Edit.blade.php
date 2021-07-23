@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
{{ trans('Degree_trans.Edite_Degrees') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{ trans('Degree_trans.Edite_Degrees') }}
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
                            <form action="{{route('Degrees.update','test')}}" method="post">
                             {{method_field('patch')}}
                             @csrf
                            <div class="form-row">
                                <div class="col">
                                    <input type="hidden" value="{{$Degree->id}}" name="id">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('Degree_trans.Edite_Degrees')}}</label>
                                    <input type="text" name="Name" value="{{ $Degree->Name }}" class="form-control">
                                    @error('Name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <br><br>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <label for="title">{{trans('Degree_trans.Edite_Degrees_Notes')}}</label>
                                    <input type="text" name="Notes" value="{{ $Degree->Notes }}" class="form-control">
                                    @error('Name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                            </div>
                         <br>
                    
                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('message_trans.submit')}}</button>
                    </form>
                    </div>
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
