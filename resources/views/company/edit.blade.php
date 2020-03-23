@extends('layout.admin')

@section('content')

<div class="row formAlign">
    <div class="col-lg-12">
     <div class="card" >
        <div class="card-body">    
            <form action="{{ route('company.update', $companys->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Destination" >Destination</label>
                    <input type="text" name="Destination" class="form-control" value="{{ $companys->Destination }}">
                </div>
                <div class="form-group">
                    <label for="Days" >Days</label>
                    <input type="number" name="Days" class="form-control" value="{{ $companys->Days }}">
                </div>
                <div class="form-group">
                    <label for="Date"> Date</label>
                    <input type="date" name="Date" class="form-control" value="{{ $companys->Date }}">
                </div>
                <div class="form-group">
                    <label for="Pickup_time" >Pickup Time</label>
                    <input type="time" name="Pickup_time" class="form-control" id="Pickup_time" value="{{ $companys->Pickup_time }}">
                </div>
                <div class="form-group">
                    <label for="Price" > Price</label>
                    <input type="text" name="Price" class="form-control" id="Price" value="{{ $companys->Price }}">
                </div>
             
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="Description" class="form-control" id="Description" value="{{ $companys->Description }}">
                </div>
                <button type="submit" class="btn btn-gradient-primary" >Update</button>
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
            </div><!--end card-body-->
                        </div><!--end card-->
                            </div><!--end col-->
                                 </div><!--end row-->
@endsection
