<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="row mt-5">
    <div class="dropdown col-md-6 text-center">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      CPU
      </button>
      <ul class="dropdown-menu dropdown-menu-dark">
        @foreach($cpu as $c)
        <li><a class="dropdown-item" href="{{route('cpu.search',['id'=>$c->id])}}">{{$c->name}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="dropdown col-md-6 text-center">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Motherboard
      </button>
      <ul class="dropdown-menu dropdown-menu-dark">
        @foreach($motherboard as $m)
        <li><a class="dropdown-item" href="{{route('motherboard.search',['id'=>$m->id])}}">{{$m->name}}</a></li>
        @endforeach
      </ul>
    </div>
</div>
<div class="container text-center">
@if($compatibility != "NULL")
<h2>{{$data->name}}</h2>
<p>
{{$data->spec_detail}}
</p>
<table class="table">
        <thead>
            <tr>
                <th>cpu_name</th>
                <th>motherboard_name</th>
            </tr>
        </thead>
        @foreach($compatibility as $c)
        <tbody>
            <tr>
              <th>
                @foreach($cpu as $cp)
                <?php
                if ($cp->id == $c->cpu_id) {
                  echo $cp->name;
                }
                ?>
                @endforeach
              </th>
              <th>
                @foreach($motherboard as $m)
                <?php
                if ($m->id == $c->cpu_id) {
                  echo $m->name;
                }
                ?>
                @endforeach
              </th>
            </tr>
        </tbody>
        @endforeach
    </table>
@endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>