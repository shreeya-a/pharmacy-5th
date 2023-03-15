@extends('admin.layouts.app')

@section('content')
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
    }

    label {
        font-weight: light;
    }



    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        /* position: absolute; */
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>

<div class="content-wrapper bg-white "  style="min-height: 2646.8px;">
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Prescription Order Placement</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Prescription</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <div class="container my-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card">
                        <!-- <img id="myImg" src="img_snow.jpg" alt="Snow" style="width:100%;max-width:300px"> -->

                        <img id="myImg" src="{{asset('/storage/'.$prescription->image)}}" class="product-image" alt="Prescription Image" style="max-height: 400px;">

                    </div>
                    <!-- The Modal for opening prescription imahe -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                    <hr>
                    @if($prescription->status == '0')
                    <form action="{{url('add-prescription-item')}}" method="post" class=" p-2">
                        @csrf
                        <!-- <div class="col-md-6"> -->
                        <p>Add items from prescription</p>
                        <table>
                            <tr>
                                <td class=" col-4 p-1">
                                    <input type="hidden" name="pres_id" value="{{$prescription->id}}">
                                    <label for="medicine" class="form-label   ">Medicine:</label>
                                    <select class=" form-control" name="prod_id" id="product">
                                        @foreach($product as $product)
                                        <option value="{{$product ->id }}">{{$product ->product }}</option>
                                        <!-- {{$itemprice = $product->price}} -->
                                        @endforeach
                                    </select>
                                </td>
                                <!-- </div> -->
                                <td class="col-2">
                                    <div>
                                        <label for="prod_qty">Qty:</label>
                                        <input type="number" class="form-control text-center qty-input  @error('prod_qty') is-invalid @enderror" name="prod_qty" id="prod_qty" value="1" min="1" max="10">

                                    </div>
                                </td>

                                <td class=" col-8 p-1">
                                    <label for="message" class="form-label">Message:</label>
                                    <textarea name="message" id="message" class="form-control col-md-12  @error('message') is-invalid @enderror" cols="30" rows="1" placeholder="How to use?"></textarea>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                                </td>

                </div>
                </tr>

                </table>
                @endif


                </form>

            </div>
            <!-- row class end -->
        </div>

        <div class="col-md-6">
            <div class="card">


                <div class="p-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                        <div class="me-auto">
                            <h5>Prescription Items</h5>
                        </div>
                            <a href="{{url('prescription')}}" class="btn btn-success m-2">Back</a>
                        </div>
                    </div>
                    @if ($presItem->count()>0)
                    @php
                    $total =0;
                    @endphp


                    <table class="table table-bordered table-responsive">


                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Message</th>
                                <th>Qty</th>
                                <th>Rate</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($presItem as $item)
                            <tr>
                                <td>{{$item->product->product}}</td>
                                <td class="col-10 " style="word-break: break-all">{{$item->message}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->product->price}}</td>
                                <td>
                                    <a href="{{url('edit-prescription-item/'.$item->id)}}" class=""><i class="fas fa-pen" aria-hidden="true"></i> </a>
                                    <a href="{{url('/delete-prescription-item/'.$item->id .'/'.$prescription->id)}}"><i class="fas fa-archive" style="color:red" aria-hidden="true"></i></a>

                                </td>
                            </tr>
                            @php
                            $total += $item->qty *$item->product->price;
                            @endphp

                            @endforeach
                        </tbody>


                    </table>
                    <div class="row ml-3">
                    {{$presItem->links()}}
                </div>
                </div>
                

                <div class="d-flex justify-content-between p-2">
                    <h4>Total: </h4>
                    <h5 class="mr-4 pr-2 ">Rs {{$total}}</h5>
                </div>
            </div>
           
            <div class="card ">
                <div class="p-3">
                    <form action="{{url('update-prescription-order/'.$prescription->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <table>
                            <tr>


                                <td class="col-12">
                                    <label for="" class="form-label">Order Status: </label>
                                    <select class="form-control" name="order_status">
                                        <option {{$prescription->status == '0'? 'selected': ''}} value="0">Pending</option>
                                        <option {{$prescription->status == '1'? 'selected': ''}} value="1">Completed</option>
                                        <option {{$prescription->status == '2'? 'selected': ''}} value="2">Cancelled</option>
                                    </select>
                                </td>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary  mt-4 col-20">Update</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    @if($prescription->status == 1)
                    <table class="mt-2">
                        <form action="{{url('invoice/'.$prescription->id)}}" method="post">
                            @csrf
                            <tr>
                                <td class="col-sm-5">
                                    <label for="dis" class="form-label">Discount: </label>
                                    <input type="number" name="discount" class="form-control" id="dis" value="{{$prescription->discount}}" min="1" max="100">
                                </td>
                                <td class="col-sm-5"><label for="tax" class="form-label">Tax: </label>
                                    <input type="number" name="tax" class="form-control" id="dis" value="{{$prescription->tax}}" min="1" max="13">
                                </td>
                                <input type="hidden" name="final_price" value="{{($prescription->total_price) - ( ($prescription->discount/100) * $prescription->total_price) + (($prescription->tax/100) * $prescription->total_price)}}">
                                <td class="col-sm-12 ">
                                    <button type="submit" class="btn btn-success mt-3">Generate Invoice</button>
                                </td>
                            </tr>
                    </table>
                    @endif
                </div>
            </div>
            @else

            <div class="p-3 mt-4">
                <p>Prescription is yet to be processed.</p>
            </div>

        </div>

    </div>


</div>
@endif


<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    
</script>
</div>




</div>
</div>

</div>
</div>





@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

@endsection