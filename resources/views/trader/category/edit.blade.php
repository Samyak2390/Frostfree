@extends('trader.layouts.master')
@section('title','Edit Category')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/trader')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Edit Category</a> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Edit Category</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{route('category.update',$edit_category->id)}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @method('PUT')
                            <div class="control-group{{$errors->has('name')?' has-error':''}}">
                                <label class="control-label">Category Name :</label>
                                <div class="controls">
                                    <input type="text" name="category_name" id="name" value="{{$edit_category->category_name}}" required>
                                    <span class="text-danger" style="color: red;">{{$errors->first('category_name')}}</span>
                                </div>
                            </div>
    
                            <div class="control-group">
                                <label class="control-label">Enable :</label>
                                <div class="controls">
                                    <input type="checkbox" name="status" id="status" value="1" {{($edit_category->status==0)?'':'checked'}}>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="control-label"></label>
                                <div class="controls">
                                    <input type="submit" value="Update" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.validate.js') }}"></script> --}}
    <script src="{{ asset('js/matrix.js') }}"></script>
    {{-- <script src="{{ asset('js/matrix.form_validation.js') }}"></script> --}}
    <script src="{{ asset('js/matrix.tables.js') }}"></script>
    {{-- <script src="{{ asset('js/matrix.popover.js') }}"></script> --}}
@endsection