@extends('base')
@section('content')

<style>
    .container {
      position: relative;
      text-align: left;
      color: white;
    }
    
    .bottom-left {
      position: absolute;
      bottom: 8px;
      left: 16px;
      -webkit-text-stroke: 2px black; 
    }
    </style>
    </head>
    <body>
    
    <div class="container mt-5">
      <img src="img/home.png" alt="Snow" style="width:100%;">
      <div class="bottom-left" style="color:white; letter-spacing:1px; font-size:59px; margin-right:3cm; margin-left:0.5cm;"><b> Intergration System in Smart Home Security for Door Access Monitoring</b></div>
    </div>
    
    </body> 

<div class="card-group mt-5" style="color: black">
    <div class="card border-light" style="width: 18rem; padding: 0.15cm">
        <img src="img/home1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center"><b>Selenoid Door</b></h5>
      </div>
    </div>

    <div class="card border-light" style="width: 18rem; padding: 0.15cm">
        <img src="img/home2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center"><b>RFID</b></h5>
      </div>
    </div>

    <div class="card border-light" style="width: 18rem; padding: 0.15cm">
        <img src="img/home3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center"><b>Sensor Pir</b></h5>
      </div>
    </div>
</div>

<div class="card-group mt-5" style="color: black">
    <div class="card border-light" style="width: 18rem; padding: 0.15cm">
        <img src="img/home4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center"><b>Buzzer</b></h5>
      </div>
    </div>

    <div class="card border-light" style="width: 18rem; padding: 0.15cm">
        <img src="img/home5.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center"><b>Ultrasonic</b></h5>
      </div>
    </div>

    <div class="card border-light" style="width: 18rem; padding: 0.15cm">
        <img src="img/home6.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center"><b>Arduino Uno</b></h5>
      </div>
    </div>
</div> --}}



@endsection