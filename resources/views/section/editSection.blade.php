@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
<section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Section</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Section</li>
                        <li class="breadcrumb-item active">Edit Section</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
 
    
    <div class="container d-flex justify-content-center">
        <div class="card " style=" width: 40rem;height: 17rem;">
            <div class="card-header bg-light">
                <h3 class="text-center">Edit Section</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-0 mt-0">
                    <a href="{{route('section')}}" class="btn btn-primary me-md-2">Back</a>
                </div>

            </div>

            <div class="card-body p-2">
                <form action="{{route('editSection')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value={{$section->id}}>
                    <div>
                        <label for="section">Section:</label>
                    </div>

                    <input type="text" name="section" class="form-control text-capitalize" id="section" placeholder="{{$section->section}}" required>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3 mb-3 ">Save Changes</button>
</div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->

@endsection