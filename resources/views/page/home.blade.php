@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
@endsection

@section('content')
<div class="container mt-5">
    <div class="col">
        <h1>Ella Marija Lani Yelich-O'Connor</h1>
        <h2>LORDE</h2>
        <p id="today">NZ time</p>
        <img src="{{ asset('images/home/lorde_at_dior.jpg') }}" class="headline rounded mt-5" alt="Lorde at Dior exhibit opening">
        <p class="figure-caption text-end">Lorde at the Dior exhibit opening, with Brittany O’Grady & Interview Magazine’s editor-in-chief Mel Ottenberg [Quentin Belt]</p>
    </div>
</div>
@endsection

@section('custom-js')
<script>
    function getDateTime() {
        var now = new Date();
        year    = now.getFullYear();
        month   = now.getMonth()+1;
        day     = now.getDate();
        hour    = now.getHours()+5;
        minute  = now.getMinutes();
        second  = now.getSeconds(); 
        if(month.toString().length == 1) {
             month = '0'+month;
        }
        if(day.toString().length == 1) {
             day = '0'+day;
        }   
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }   
        var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;   
         return dateTime;
    }

    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("today").innerHTML = currentTime + " NZST";
    }, 1000);
</script>
@endsection