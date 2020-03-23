
@extends('layout.admin')

@section('content')

<div class="container">
  <div class="row formAlign">
    <div class="col-lg-12">
      <div class="card" >
       <div class="card-body"> 
       <div class="col-1">
         <a href="/company/create" class="btn btn-primary">Create</a>
        </div>
  
          <table class="table">
          <thead> 
          <tr>
          <th scope="col">#</th>
            <th scope="col">Destination</th>
            <th scope="col">Days</th>
            <th scope="col">Date</th>
            <th scope="col">Pickup_time</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
           </tr>
           </thead>
             <tbody>
               {{$no=1}}
                   @foreach ($companys ?? '' as $company)
                    <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>{{ $company->Destination }}</td>
                    <td>{{ $company->Days }}</td>
                    <td>{{ $company->Date }}</td>
                    <td>{{ $company->Pickup_time }}</td>
                    <td>{{ $company->Price }}</td>
                    <td>{{ $company->Description }}</td>
                          
                    <td class="row">
                        <a href="company/{{ $company->id }}/edit" class="btn btn-warning">Edit</a>
                    </td>
                     <td>
                        <form action="{{ route('company.destroy',$company->id) }}" method="POST" style="margin-left: auto">
                        @csrf
                        @method('delete')
                            <button type="submit"  class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                   </tr>
                       {{$no++}}   
                       @endforeach
                    </tbody>
                </table>
        </div><!--end card-body-->
          </div><!--end card-->
              </div><!--end col-->
                </div><!--end row-->

                </div>

@endsection

