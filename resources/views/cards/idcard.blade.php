<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="{{ $remove_bg ? '' : "background-image: url('https://res.cloudinary.com/nba/image/upload/v1659642754/NBA-Tags-Delegates_1_uaeyad.png'); background-repeat: no-repeat;"  }}">


@foreach( $users as $u)
    <div style="  text-align: center; position: absolute;  width: 1800px; top:700px; ">
        <h1 style="font-family: sans-serif; font-size: 174px; color: #27245f; text-wrap: normal "><b>{{ strtoupper($u[0])  }}</b>
        </h1>

    </div>
    <div style=" text-align: center; position: absolute;  width: 1800px; top: 850px; ">
        <h1 style="font-family: sans-serif; font-size: 174px; color: #27245f ; text-wrap: normal "><b>{{strtoupper($u[1])}}
            </b></h1>
        <h3 style="color:#27245f; font-family: sans-serif; font-weight: normal; font-size: 70px; text-wrap: normal ">
            {{ strtoupper($u[5]) }}
        </h3>
        <p style="color:#27245f; font-family: sans-serif; font-size: 68px; font-weight: bold; text-align: center"> {{ strtoupper($u[2]) }}</p>
    </div>

    <div style="font-family: sans-serif; position:absolute;top:1580px; left: 250px; width: 900px; text-align: center; font-size: 71px" >
        <span style="color:#281754 ">{{ strtoupper($u[3]) }}</span>
    </div>
    <div style="font-family: sans-serif; position:absolute;right:190px;top:1580px; width: 900px; text-align: center;; font-size: 71px; ">
        <span style="color: #281754">
            {{ strtoupper($u[4]) }}
            </span>
    </div>



    <pagebreak />

@endforeach




</body>
</html>
