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
                <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="shop_id" value="{{$shop_id}}">
                    <div class="control-group">
                        <label for="product_name" class="control-label">Name</label>
                        <div class="controls{{$errors->has('product_name')?' has-error':''}}">
                            <input type="text" name="product_name" id="product_name" class="form-control" value="{{old('product_name')}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('product_name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="category_id">
                                @foreach($categories as $key=>$value)
                                    <option value="{{$value}}">{{$key}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="stock_quantity" class="control-label">Stock Quantity</label>
                        <div class="controls{{$errors->has('stock_quantity')?' has-error':''}}">
                            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" min="1" value="{{old('stock_quantity')}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('stock_quantity')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Price</label>
                        <div class="controls{{$errors->has('price')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="price" id="price" class="" value="{{old('price')}}" title="" required="required" min="0" step=".01">
                                
                            </div>
                            <span class="text-danger">{{$errors->first('price')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="discount" class="control-label">Discount</label>
                        <div class="controls{{$errors->has('discount')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">%</span>
                                <input type="number" name="discount" id="discount" class="" value="{{old('discount')}}" title="" min="0" max="100">
                            </div>
                            <span style="color: red">{{$errors->first('discount')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="min_order" class="control-label">Minimum Order</label>
                        <div class="controls{{$errors->has('min_order')?' has-error':''}}">
                            <input type="number" name="min_order" id="min_order" class="form-control" min="1" value="{{old('min_order')}}" title="" required="required">
                            <div class="text-danger">{{$errors->first('min_order')}}</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="max_order" class="control-label">Maximum Order</label>
                        <div class="controls{{$errors->has('max_order')?' has-error':''}}">
                            <input type="number" name="max_order" id="max_order" class="form-control" min="1" value="{{old('max_order')}}" title="" required="required" >
                            <span class="text-danger">{{$errors->first('max_order')}}</span>
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
                        <label for="allergy_info" class="control-label">Allergy Information</label>
                        <div class="controls{{$errors->has('allergy_info')?' has-error':''}}">
                            <textarea class="textarea_editor2 span12" name="allergy_info" id="allergy_info" rows="6" placeholder="Allergy Information" >{{old('allergy_info')}}</textarea>
                            <span class="text-danger">{{$errors->first('allergy_info')}}</span>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="product_image" id="product_image"/>
                            <span class="text-danger">{{$errors->first('product_image')}}</span>
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
    {{-- <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
        $('.textarea_editor2').wysihtml5();
    </script> --}}
@endsection