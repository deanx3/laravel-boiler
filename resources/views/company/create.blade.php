@extends('layout.admin')

@section('content')


 <div class="row formAlign">
    <div class="col-lg-12">
     <div class="card" >
        <div class="card-body">        
            <h4 class="mt-0 header-title ">UPLOAD DATA</h4>
             <div class="row">
                <div class="col-lg-10">
                 <form action="{{ route('company.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Destination">Destination</label>
                    <input type="text" name="Destination" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Days" >Days</label>
                    <input type="number" name="Days" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Price" >Date</label>
                    <input type="date" name="Price" class="form-control" id="Date">
                </div>

                <div class="form-group">
                    <label for="Pickup_time">Pickup Time</label>
                    <input type="time" name="Pickup_time" class="form-control">
                </div>
               
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="text" name="Price" class="form-control" id="Price">  
                </div>
                <div class="form-group">
             
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="Description" class="form-control" id="Description">
                </div>
                <button type="submit"  class="btn btn-gradient-primary">Upload</button>
            </form>
            @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
           </div>
                 </div>                                                                      
                    </div><!--end card-body-->
                        </div><!--end card-->
                            </div><!--end col-->
                                 </div><!--end row-->


@endsection

