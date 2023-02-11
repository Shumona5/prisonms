@extends('backend.master')
@section('content')
<h1>Update Inmate</h1>
<form action="{{route('inmate.update',$inma->id)}}" method="post" enctype="multipart/form-data">

@method('put')
@if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif

@csrf

<div class="mb-2">
  <label > Name</label>
  <input type="text" class="form-control" name="name" placeholder="Enter Inmate Name">
</div>
<div>
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
<div class="mb-2">
  <label > Dob</label>
  <input type="date" class="form-control" name="dob" placeholder="Enter Inmate Date of Birth">
</div>
<div class="mb-2">
  <label > Address</label>
  <input type="text" class="form-control" name="address" placeholder="Enter Inmate Address">
</div>
<div class="mb-2">
  <label > Phone</label>
  <input type="tel" class="form-control" name="phone" placeholder="Enter Inmate phone number">
</div>
<div class="form-group" name="gender">
            <label >Gender</label>
            <select name="gender" id="" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
         
            </select>
<div class="mb-2">
  <label > Case</label>
  <input type="text" class="form-control" name="case" placeholder="Enter Case">
</div>
<div class="mb-2">
  <label > Ecd</label>
  <input type="text" class="form-control" name="ecd" placeholder="Enter Inmate Emmergency contact">
</div>
<div class="mb-2">
  <label > Punishment</label>
  <input type="text" class="form-control" name="punishment" placeholder="Enter Inmate Name">
</div>

<input type="submit" name="submit" class="mt-3 btn btn-info" value="update">


</form>

@endsection