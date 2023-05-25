<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;

  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;

  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="row">
  <div class="col-md-4 text-center">
  <div>
    <table class="table">
      <thead>
          <tr>
              <th>cpu_name</th>
              <th>spec_detail</th>
              <th>Action</th>
          </tr>
      </thead>
      @foreach($cpu as $c)
      <tbody>
          <tr>
            <th>{{$c->name}}</th>
            <th>{{$c->spec_detail}}</th>
            <th>
              <a href="{{route('cpu.delete',['id'=>$c->id])}}">
                <button class="btn btn-danger">Delete</button>
              </a>
              <a href="{{route('cpu.form',['id'=>$c->id])}}">
                <button class="btn btn-primary">Edit</button>
              </a>
            </th>
          </tr>
      </tbody>
      @endforeach
    </table>

    <button class="open-button" onclick="openForm1()">Open Form</button>

<div class="form-popup" id="myForm1">
  <form action="/admin/add/cpu" class="form-container" method="post">
  @csrf
    <h1>CPU</h1>

    <label for="cpu_name"><b>cpu_name</b></label>
    <input type="text" placeholder="Enter cpu_name" name="cpu_name" required>

    <label for="spec_detail"><b>spec_detail</b></label>
    <input type="text" placeholder="Enter spec_detail" name="spec_detail" required>

    <button type="submit" class="btn btn-success">Add</button>
    <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
  </form>
</div>


  </div>
  </div>

  <div class="col-md-4 text-center">
  <div>
    <table class="table">
      <thead>
          <tr>
              <th>motherboard_name</th>
              <th>spec_detail</th>
              <th>Action</th>
          </tr>
      </thead>
      @foreach($motherboard as $m)
      <tbody>
          <tr>
            <th>{{$m->name}}</th>
            <th>{{$m->spec_detail}}</th>
            <th>
              <a href="{{route('motherboard.delete',['id'=>$m->id])}}">
                <button class="btn btn-danger">Delete</button>
              </a>
              <a href="{{route('motherboard.form',['id'=>$m->id])}}">
                <button class="btn btn-primary">Edit</button>
              </a>
            </th>
          </tr>
      </tbody>
      @endforeach
    </table>

    <button class="open-button" onclick="openForm2()">Open Form</button>

<div class="form-popup" id="myForm2">
  <form action="/admin/add/motherboard" class="form-container" method="post">
  @csrf
    <h1>MotherBoard</h1>

    <label for="motherboard_name"><b>motherboard_name</b></label>
    <input type="text" placeholder="Enter motherboard_name" name="motherboard_name" required>

    <label for="spec_detail"><b>spec_detail</b></label>
    <input type="text" placeholder="Enter spec_detail" name="spec_detail" required>

    <button type="submit" class="btn btn-success">Add</button>
    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
  </form>
</div>


  </div>
  </div>
  <div class="col-md-4 text-center">
  <div>
    <table class="table">
      <thead>
          <tr>
              <th>cpu_name</th>
              <th>motherboard_name</th>
              <th>Action</th>
          </tr>
      </thead>
      @foreach($compatibility as $c)
      <tbody>
          <tr>
            <th>{{$cpu[$c->cpu_id-1]->name}}</th>
            <th>{{$motherboard[$c->motherboard_id-1]->name}}</th>
            <th>
              <a href="{{route('compatibility.delete',['id'=>$c->id])}}">
                <button class="btn btn-danger">Delete</button>
              </a>
              <!-- <a href="{{route('compatibility.form',['id'=>$c->id])}}">
                <button class="btn btn-primary">Edit</button>
              </a> -->
            </th>
          </tr>
      </tbody>
      @endforeach
    </table>

    <button class="open-button" onclick="openForm3()">Open Form</button>

<div class="form-popup" id="myForm3">
  <form action="/admin/add/compatibility" class="form-container" method="post">
    @csrf
    <h1>Compatibility</h1>

    <label for="cpu_name"><b>cpu_name</b></label>
    <input type="text" placeholder="Enter cpu_name" name="cpu_name" required>

    <label for="motherboard_name"><b>motherboard_name</b></label>
    <input type="text" placeholder="Enter motherboard_name" name="motherboard_name" required>

    <button type="submit" class="btn btn-success">Add</button>
    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
  </form>
</div>

  </div>
  </div>
<div>
<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}
function openForm3() {
  document.getElementById("myForm3").style.display = "block";
}
function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
function closeForm3() {
  document.getElementById("myForm3").style.display = "none";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
