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
</style>

<div class="content-wrapper bg-white">
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Edit Prescription Item</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Prescription</li>
                        <li class="breadcrumb-item active">Edit Prescription</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- {{url('updatePresItem/'.$pitem)}} -->
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h6>Update Prescription Item</h6>
            </div>
            <form action="{{url('save-prescription-item/'.$pitem->id .'/'.$pitem->pres_id)}}" method="post" class=" p-5">
            @csrf
                        @method('PUT')
                <table>
                    <tr>
                        <td class="col-8">
                            <input type="hidden" name="id" value="{{$pitem->id}}">
                            <label for="medicine" class="form-label   ">Medicine:</label>
                            <select class=" form-control" name="prod_id" id="product" readonly>
                                <option value="{{$pitem->prod_id}}">{{$pitem->product->product}}</option>
                            </select>
                        </td>
                        <td class="col-4">


                            <label for="prod_qty">Qty:</label>
                            <input type="number" class="form-control text-center  qty-input" name="qty" id="prod_qty" value="{{$pitem->qty}}" min="1" max="10">

                        </td>
                    </tr>
                </table>




                <div class="p-2">
                    <label for="message" class="form-label mt-3">Message:</label>
                    <textarea name="message" id="message" class="form-control col-md-12" cols="30" rows="5" required>{{$pitem->message}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3 align-center">Save Changes</button>
     

            </form>
        </div>

    </div>
</div>
</div>

@endsection