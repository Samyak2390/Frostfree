@extends('trader.layouts.master')
@section('title','List Products')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/trader')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="" class="current">Products</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Products</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Stock Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Minimum Order</th>
                        <th>Maximum Order</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($products as $product)
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td style="vertical-align: middle; text-align: center;">{{$i}}</td>
                            <td style="text-align: center;"><img src="{{url('uploads/products',$product->product_image)}}" alt="" width="50"></td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->product_name}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->category->category_name}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->stock_quantity}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->price}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->discount}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->min_order}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$product->max_order}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{-- {{route('product.edit',$product->id)}} --}}
                                <a href="#" class="btn btn-primary btn-mini">Edit</a>
                                <a href="#" rel="{{$product->id}}" rel1="delete-product" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                        </tr>
                    @empty 
                        <tr class="gradeC">
                            <td style="text-align: center;" colspan="10">No Products Found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap2.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
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
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection