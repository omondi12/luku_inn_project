<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        @include('admin.css')

        <style type="text/css">
            .center
            {
                margin: auto;
                width: 50%; 
                border: 2px solid white;
                text-align: center;
                margin-top: 40px;

            }
            .font_size
            {
                text-align: center;
                font-size: 40px;
                padding-top: 20px
            }
            .th_color
            {
              background-color: darkslategrey;
            }
            .th_des
            {
              padding: 30px;
            } 
            .img_size
            {
              width:150px;
              height:150px;
            }
        </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
            @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    
                    {{session()->get('message')}}
                </div>
            @endif


            <h2 class="font_size">All Products</h2>

                <table class="center">
                    <tr class="th_color">
                        <th class="th_des">Product Title</th>
                        <th class="th_des">Desccription</th>
                        <th class="th_des">Quantity</th>
                        <th class="th_des">Category</th>
                        <th class="th_des">Price</th>
                        <th class="th_des">Discount Price</th>
                        <th class="th_des">Product Image</th>
                        <th class="th_des">Delete</th>
                        <th class="th_des">Edit</th>
                    </tr>

                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                          <img class="img_size" src="/product/{{$product->image}}" alt="">
                        </td>
                        <td>
                          <a class="btn btn-danger" onclick="return confirm('Confirm Delete')" href="{{url('delete_product', $product->id)}}">Delete</a>
                        </td>
                        <td>
                          <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
            @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>