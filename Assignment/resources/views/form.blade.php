<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div <?php if ($page!='cpu'){?>style="display:none"<?php }?>>
    <form action="/admin/update/cpu/{{$cpu->id}}" class="form-container" method="post">
     @csrf
    <div class="mb-3">
        <!-- <input type="hidden" name="Id" value="{{$cpu->id}}"> -->
        <label for="cpu_name" class="form-label">CPU name</label>
        <input type="text" class="form-control" name="cpu_name" value='{{$cpu->name}}'>
    </div>
    <div class="mb-3">
    <label for="cpu_details" class="form-label">CPU details</label>
    <input type="text" class="form-control" name="cpu_details" value='{{$cpu->spec_detail}}'>
    <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    </form>
</div>
<div <?php if ($page!='motherboard'){?>style="display:none"<?php }?>>
    <form action="/admin/update/motherboard/{{$motherboard->id}}" class="form-container" method="post">
     @csrf
    <div class="mb-3">
        <input type="hidden" name="Id" value="{{$motherboard->id}}">
        <label for="motherboard_name" class="form-label">Motherboard name</label>
        <input type="text" class="form-control" name="motherboard_name" value='{{$motherboard->name}}'>
    </div>
    <div class="mb-3">
    <label for="motherboard_details" class="form-label">Motherboard details</label>
    <input type="text" class="form-control" name="motherboard_details" value='{{$motherboard->spec_detail}}'>
    <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    </form>
</div>
<!-- <div <?php if ($page!='compatibility'){?>style="display:none"<?php }?>>
    <form action="'.route('motherboard.update',['id'=>$id]).' " class="form-container" method="post">
     @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">CPU name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value='{{$compatibility->name}}'>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">CPU details</label>
    <input type="text" class="form-control" id="exampleFormControlInput2" value='{{$compatibility->spec_detail}}'>
    <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    </form>
</div> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
