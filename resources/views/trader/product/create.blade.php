@extends('trader.layouts.master')
@section('title','Add Products Page')

@section('content')
    <div id="breadcrumb"> <a href="{{url('/trader')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Add New Product</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New Products</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label for="productName" class="control-label">Name</label>
                        <div class="controls{{$errors->has('productName')?' has-error':''}}">
                            <input type="text" name="productName" id="productName" class="form-control" value="{{old('productName')}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('productName')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="categories_id">
                                @foreach($categories as $key=>$value)
                                    <option value="{{$value}}">{{$key}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="stockQuantity" class="control-label">Stock Quantity</label>
                        <div class="controls{{$errors->has('stockQuantity')?' has-error':''}}">
                            <input type="number" name="stockQuantity" id="stockQuantity" class="form-control" min="1" value="{{old('stockQuantity')}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('stockQuantity')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Price</label>
                        <div class="controls{{$errors->has('price')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="price" id="price" class="" value="{{old('price')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('price')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="discount" class="control-label">Discount</label>
                        <div class="controls{{$errors->has('discount')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">%</span>
                                <input type="number" name="discount" id="discount" class="" value="{{old('discount')}}" title="">
                                <span class="text-danger">{{$errors->first('discount')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="minOrder" class="control-label">Minimum Order</label>
                        <div class="controls{{$errors->has('minOrder')?' has-error':''}}">
                            <input type="number" name="minOrder" id="minOrder" class="form-control" min="1" value="{{old('minOrder')}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('minOrder')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="maxOrder" class="control-label">Maximum Order</label>
                        <div class="controls{{$errors->has('maxOrder')?' has-error':''}}">
                            <input type="number" name="maxOrder" id="maxOrder" class="form-control" min="1" value="{{old('minOrder')}}" title="" required="required" >
                            <span class="text-danger">{{$errors->first('maxOrder')}}</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('description')?' has-error':''}}">
                            <textarea class="textarea_editor span12 areaText" name="description" id="description" rows="6" placeholder="Product Description" >{{old('description')}}</textarea>
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="allergyInfo" class="control-label">Allergy Information</label>
                        <div class="controls{{$errors->has('allergyInfo')?' has-error':''}}">
                            <textarea class="textarea_editor2 span12" name="allergyInfo" id="allergyInfo" rows="6" placeholder="Allergy Information" >{{old('allergyInfo')}}</textarea>
                            <span class="text-danger">{{$errors->first('allergyInfo')}}</span>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Add New Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap2.min.js')}}"></script>
    {{-- <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script> --}}
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    {{-- <script src="{{asset('js/matrix.form_common.js')}}"></script> --}}
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
        $('.textarea_editor2').wysihtml5();
    </script>
@endsection