




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#333641">
    <title>En desarrollo..</title>

    <style>
        
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");
:root,
body {
  color: #fff;
  height: 100%;
  overflow: hidden;
  background: #333666;
}

body {
  display: -webkit-box;
  display: flex;
  background: #333666;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
}

h6 {
  background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #99ff, transparent, transparent);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-size: 4vw;
  font-family: "Source Sans Pro", sans-serif;
  -webkit-animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
          animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
}
a{
    background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #2ff, transparent, transparent);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-size: 2vw;
  font-family: "Source Sans Pro", sans-serif;
  -webkit-animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
          animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
}

@-webkit-keyframes reveal {
  80% {
    letter-spacing: 8px;
  }
  100% {
    background-size: 300% 300%;
  }
}
@keyframes reveal {
  80% {
    letter-spacing: 8px;
  }
  100% {
    background-size: 300% 300%;
  }
}
@-webkit-keyframes glow {
  40% {
    text-shadow: 0 0 8px #fff;
  }
}
@keyframes glow {
  40% {
    text-shadow: 0 0 8px #fff;
  }
}




span {
display: block;
font-family: monospace;
white-space: nowrap;
border-right: 4px solid;
width: 42ch;
font-size:50px;

animation: typing 4s steps(12), blink .1s infinite step-end alternate;
overflow:hidden;
}

@keyFrames typing {

from { width: 0}
}

@keyFrames blink {
 50% { border-color: transparent}
}
    </style>
</head>

<body>
  <!--
    <div>
        <h1>Espérelo pronto</h1>
    <h6>Plataforma en desarrollo ...</h6>  
    <a href="{{ url('/') }} ">Regresar</a>  
    

    </div>-->


<h2>
    <span>¡Plataforma en desarrollo! espérelo pronto</span>

    </h2>
</body>

</html>