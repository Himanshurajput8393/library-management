<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="icon/x-image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity=sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous"referrerpolicy="no-referrer" />
	<title>Notification</title>
</head>
<!-- <link rel="stylesheet" href="noti.css"> -->
<style>

/*body{
	height: 100vh;
     display: grid;
     place-items: center;
     background-color: rgb(0, 0, 20);
}
*/
.Notification_bell{
     position:relative;
     color: #fff;
     animation: bell 1s linear infinite alternate-reverse;
     transform-origin: top;
}
.fa-bell{
     font-size: 30px;
	}

.Notification_bell::after {
	content: attr(current_count);
	width: 20px;
	height: 20px;
	border-radius: 50%;
	background-color: red;
	border: 2px solid rgb(0,0,20);
	position: absolute;
	top: 0px;
	right: -8px;
	color: #fff;
     font-size: 10px;
     text-align: center;
     display: flex;
     justify-content: center;
     align-items: center;

}

@keyframes bell {
	0% {
		transform: rotate(-10deg);
	}
	100% {
		transform: rotate(10deg);
	}
}

</style>

<body>

</body>

</html>