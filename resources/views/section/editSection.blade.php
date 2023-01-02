@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header bg-white">
        <h1 class="mt-8 text-center">Section</h1>
    </div>
    
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

                    <input type="text" name="section" class="form-control text-capitalize" id="section" placeholder="{{$section->section}}">
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