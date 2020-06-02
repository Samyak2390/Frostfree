@extends('trader.layouts.master')
@section('title','Edit Products Page')

@section('content')
    <div id="breadcrumb"> <a href="{{url('/trader')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Edit Product</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Edit Product</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('product.update', $product->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data" id="updateForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <input type="hidden" name="shop_id" value="{{old('shop_id') ?? $product->shop_id}}">
                    <div class="control-group">
                        <label for="product_name" class="control-label">Name</label>
                        <div class="controls{{$errors->has('product_name')?' has-error':''}}">
                            <input type="text" name="product_name" id="product_name" class="form-control" value="{{old('product_name') ?? $product->product_name}}" title="" required="required">
                            <span style="color:red">{{$errors->first('product_name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="category_id">
                                @foreach($categories as $key=>$value)
                                    <option value="{{$value}}" {{$product->category_id == $value ? 'selected' : ''}}>{{$key}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="stock_quantity" class="control-label">Stock Quantity</label>
                        <div class="controls{{$errors->has('stock_quantity')?' has-error':''}}">
                            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" min="1" value="{{old('stock_quantity') ?? $product->stock_quantity}}" title="" required="required">
                            <span style="color:red">{{$errors->first('stock_quantity')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="price" class="control-label">Price(&pound;)</label>
                        <div class="controls{{$errors->has('price')?' has-error':''}}">
                            <input type="number" name="price" id="price" class="" value="{{old('price') ?? $product->price}}" title="" required="required" min="0" step=".01">
                            <span style="color:red">{{$errors->first('price')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="discount" class="control-label">Discount(%)</label>
                        <div class="controls{{$errors->has('discount')?' has-error':''}}">
                            <input type="number" name="discount" id="discount" class="" value="{{old('discount') ?? $product->discount->discount ?? 0}}" title="" min="0" max="100">
                            <span style="color: red">{{$errors->first('discount')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="min_order" class="control-label">Minimum Order</label>
                        <div class="controls{{$errors->has('min_order')?' has-error':''}}">
                            <input type="number" name="min_order" id="min_order" class="form-control" min="1" value="{{old('min_order') ?? $product->min_order}}" title="" required="required">
                            <div style="color:red">{{$errors->first('min_order')}}</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="max_order" class="control-label">Maximum Order</label>
                        <div class="controls{{$errors->has('max_order')?' has-error':''}}">
                            <input type="number" name="max_order" id="max_order" class="form-control" min="1" value="{{old('max_order') ?? $product->max_order}}" title="" required="required" >
                            <span style="color:red">{{$errors->first('max_order')}}</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('description')?' has-error':''}}">
                            <textarea style="max-width: 300px" class="textarea_editor span12 areaText" name="description" id="description" rows="6" placeholder="Product Description" >{{old('description') ?? $product->description}}</textarea>
                            <span style="color:red">{{$errors->first('description')}}</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="allergy_info" class="control-label">Allergy Information</label>
                        <div class="controls{{$errors->has('allergy_info')?' has-error':''}}">
                            <textarea style="max-width: 300px" class="textarea_editor2 span12" name="allergy_info" id="allergy_info" rows="6" placeholder="Allergy Information" >{{old('allergy_info') ?? $product->allergy_info}}</textarea>
                            <span style="color:red">{{$errors->first('allergy_info')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="product_image" id="product_image"/>
                            <span style="color:red">{{$errors->first('product_image')}}</span>
                            @if($product->product_image != '')
                                <span>
                                    <img src="{{url('uploads/products/',$product->product_image)}}" width="50" alt="" style="margin-right: 20px">
                                    <a href="javascript:" rel="{{$product->product_image}}" rel1="delete-image" class="btn btn-danger" id="deleteRecord">Delete Old Image</a>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-success" id="updateProduct">Update Product</button>
                        </div>
                    </div>
                </form>
                <form id="delete-image" action="{{ route('product.image.destroy', $product->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  
    <script>
        //  $("#updateProduct").click(function(){
        //     document.getElementById('updateForm').submit();
        // })
        $("#deleteRecord").click(function () {
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                document.getElementById('delete-image').submit();
            });
        });
    </script>
@endsection