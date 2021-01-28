@extends('layouts.app')

@section('content')
<div class="container " style="height:700px; padding-top: 156px;">

    <h2 class="text-center"><i class="fa fa-shopping-cart" ></i> New Product</h2>
   <div class="row justify-content-center">
       <div class="col-12 col-md-8 col-lg-6 pb-5">
                   <!--Form with header-->

                   <form action="/add_product" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                       <div class="card border-success rounded-0">
                           <div class="card-header p-0">
                               <div class="bg-success text-white text-center py-2">
                                   <p class="m-0">Add new product</p>
                               </div>
                           </div>
                           <div class="card-body p-3">

                               <!--Body-->
                               <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-image text-info"></i></div>
                                    </div>
                                    <input type="file" class="form-control" name="image" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                   <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="prodname" name="prod_name" placeholder="Product Name" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-money-bill-wave text-info"></i></div>
                                    </div>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                   <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="email" name="ref_code" placeholder="ref code" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-star text-info"></i></div>
                                    </div>
                                    <input type="number" class="form-control" id="email" name="prod_rating" placeholder="rate" required>
                                </div>
                            </div>

                               <div class="form-group">
                                   <div class="input-group mb-2">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                       </div>
                                       <textarea class="form-control" placeholder="Product Description" name="prod_description" required></textarea>
                                   </div>
                               </div>

                               <div class="text-center">
                                   <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                               </div>
                           </div>

                       </div>
                   </form>
                   <!--Form with header-->


       </div>
   </div>
</div>
@endsection
