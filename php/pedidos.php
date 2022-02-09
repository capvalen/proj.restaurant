<?php $_F=__FILE__;$_X='Pz48P3BocA0KczVzczQybl9zdDFydCgpOw0KcjVxMzRyNSAncGhwL2w0YzVuYzUucGhwJzsNCjRmIChAISRfU0VTU0lPTlsnQXQ0NW5kNSddKXsvL3M0bjIgNXg0c3Q1IDVudjQxciAxIDRuZDV4DQoJaDUxZDVyKCJMMmMxdDQybjo0bmQ1eC5waHAiKTsNCn0NCj8+';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pedidos - Infocat Snack</title>
	<link rel="shortcut icon" href="images/peto.png?version=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosElementosv2.css?version=1.0.7">
	<link rel="stylesheet" href="css/snack.css?version=1.0.5">
	<link rel="stylesheet" href="css/icofont.css">
	<link rel="stylesheet" href="css/toastr.css?version=1.0.2"> <!-- extraído de: http://codeseven.github.io/toastr/demo.html-->
</head>
<body>
<style>
	.divUnSoloProducto, .divUnSoloProductoDisponible{padding-top: 5px; padding-bottom: 5px; margin-right: 0px; margin-left: 0px;}
	.divUnSoloProducto:hover,.divUnSoloProductoDisponible:hover{background-color: #f3f3f3; transition: all 0.4s ease-in-out;}
	/*.divUnSoloProducto:hover{background-color: transparent!important;}*/
	.divPrincipal{margin-top:0px!important;
		background: #e6e6e6;
    border-radius: 0;}
	.badge{background-color: #874cea;}
	#divMesas, #divPedido{
		margin-right: -15px;
    margin-left: -15px;
    background: white;
    border: 1px solid #bdbdbd;
    border-radius: 10px;
    margin: 10px 1px;
    padding-top: 30px;
    padding-bottom: 30px;
	}
	h2{color: #636363;}
	h3{color: #828282;}
	.btnMesa{border-radius: 3px;}
	
	.smallMozo{font-size: 51%;color: #afadad}
	footer{padding: 10px;
		color: white;
    background-color: #A35BB4;}
	footer a{color: white;}
	.btn-azul{color: #0078D7;}
</style>

<div class="container-fluid divPrincipal noselect" >
<!-- <button class="btn btn-block btn-success" onclick="mobileConsole.init();"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> open mobileConsole</button> -->
	<?php $_F=__FILE__;$_X='Pz48P3BocCANCgk0ZiAoJF9TRVNTSU9OWydsNGM1bmM0MSddPT0nT2snKXsgPz4NCgkJPCEtLSBDMm50NW40ZDIgcDFyMSBsNGM1bmM0MXIgLS0+DQoJCTxkNHYgY2wxc3M9InIydyIgNGQ9ImQ0dk01czFzIj4NCgkJPGQ0diBjbDFzcz0iYzJudDE0bjVyLWZsMzRkICB0NXh0LWM1bnQ1ciIgPjxoYSBzdHlsNT0iYzJsMnI6ICNlb2VvZW87IGQ0c3BsMXk6IDRubDRuNS1ibDJjazsiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtdzE0dDVyLTFsdCI+PC80PiBQNWQ0ZDJzIDVuIEMxczEgZDUgQjFycjIgNjxzbTFsbCBjbDFzcz0ibTF5M3NjM2wxIHNtMWxsTTJ6MiIgNGQ9J3NtMWxsQXQ0NW5kNSc+PGJyPjw/cGhwIDVjaDIgJF9TRVNTSU9OWydBdDQ1bmQ1J107ID8+PC9zbTFsbD48L2hhPg0KCQk8L2Q0dj4NCgkJPGQ0diBjbDFzcz0iIGMybnQxNG41ci1mbDM0ZCAiPg0KCQkJPGIzdHQybiBzdHlsNT0ibTFyZzRuLXQycDogYTBweDsgbTFyZzRuLXI0Z2h0OiA2MHB4OyIgY2wxc3M9ImJ0biBidG4tczNjYzVzcyBidG4tMjN0bDRuNSBwM2xsLWw1ZnQgYnRuLWxnIGJ0blM0bkIycmQ1IiA0ZD0iYnRuQWN0MzFsNHoxck01czFzYSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNWZyNXNoIj48LzQ+IEFjdDMxbDR6MXIgbTVzMXM8L2IzdHQybj4NCgkJCTxiM3R0Mm4gc3R5bDU9Im0xcmc0bi10MnA6IGEwcHg7IG0xcmc0bi1yNGdodDogNjBweDsiIGNsMXNzPSJidG4gYnRuLWQxbmc1ciBidG4tMjN0bDRuNSBwM2xsLXI0Z2h0IGJ0bi1sZyBidG5TNG5CMnJkNSIgNGQ9ImJ0bkM1cnIxclM1czQybiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC01eHQ1cm4xbC1sNG5rIj48LzQ+IEM1cnIxciBzNXM0JiNhdW87bjwvYjN0dDJuPg0KCQk8L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDY8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIGE8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIG88L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJ1Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIHU8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJpIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIGk8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJlIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIGU8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI3Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDc8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI4Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDg8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI5Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDk8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2MCI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSA2MDwvYjN0dDJuPjwvZDR2Pg0KCQkNCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2NiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSA2NjwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjZhIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDZhPC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNm8iPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgNm88L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2dSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSA2dTwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjZpIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDZpPC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNmUiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgNmU8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2NyI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSA2NzwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjY4Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIDY4PC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNjkiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgNjk8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhMCI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBhMDwvYjN0dDJuPjwvZDR2Pg0KDQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYTYiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgYTY8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhYSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBhYTwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9ImFvIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIGFvPC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYXUiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgYXU8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhaSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBhaTwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9ImFlIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIGFlPC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYTciPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgYTc8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhOCI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBhODwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9ImE5Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIGE5PC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ibzAiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgbzA8L2IzdHQybj48L2Q0dj4NCg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im82Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIG82PC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ib2EiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgb2E8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvbyI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBvbzwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im91Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIG91PC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ib2kiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgb2k8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvZSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBvZTwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im83Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIG83PC9iM3R0Mm4+PC9kNHY+DQoJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ibzgiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgbzg8L2IzdHQybj48L2Q0dj4NCgkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvOSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1mMjJkLWMxcnQiPjwvND4gTTVzMSBvOTwvYjN0dDJuPjwvZDR2Pg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9InUwIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWYyMmQtYzFydCI+PC80PiBNNXMxIHUwPC9iM3R0Mm4+PC9kNHY+DQoNCgk8L2Q0dj4NCgk8ZDR2IGNsMXNzPSJyMncgc3ItMm5seSBuMnM1bDVjdCIgNGQ9ImQ0dlA1ZDRkMiI+DQoJCTxoYSBjbDFzcz0idDV4dC1jNW50NXIiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtYmJxIj48LzQ+PHNwMW4gNGQ9InNwMW5QNWQ0ZDJNVDR0M2wyIj4gUDVkNGQyIGQ1IG01czEgPC9zcDFuPiA8c20xbGwgY2wxc3M9Im0xeTNzYzNsMSI+IyA8c3AxbiA0ZD0ic3Axbk4zbU01czEiPjwvc3Axbj48YnI+IDxzcDFuIGNsMXNzPSdzbTFsbE0yejInIHN0eWw1PSJmMm50LXM0ejU6IDc2JTsiPjw/cGhwIDVjaDIgJF9TRVNTSU9OWydBdDQ1bmQ1J107ID8+PC9zcDFuPjwvc20xbGw+PC9oYT4gPHNwMW4gY2wxc3M9Img0ZGQ1biIgNGQ9InNwMW5JZFA1ZDRkMkFjdCI+PC9zcDFuPg0KCQk8ZDR2IGNsMXNzPSJjMmwteHMtNmEgYzJsLXNtLWUiPg0KCQkJPGhvIGNsMXNzPSJ0NXh0LWM1bnQ1ciI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC0zczVycyI+PC80PiBQNWQ0ZDIgZDVsIGNsNDVudDU8L2hvPg0KCQkJPGQ0diBjbDFzcz0icDFuNWwtYjJkeSI+DQoJCQkJPGQ0diBjbDFzcz0icDFuNWwtZ3IyM3AiIDRkPSJsNHN0TTVzMUNsNDVudDUiID4NCgkJCQkJPGQ0diBjbDFzcz0icDFuNWwgYnMtYzFsbDIzdCBicy1jMWxsMjN0LWo1bGx5ICIgc3R5bDU9Im0xcmc0bi1iMnR0Mm06IDYwcHg7Ij4NCgkJCQkJCTxkNHYgY2wxc3M9InAxbjVsLWg1MWQ0bmcgIiByMmw1PSJiM3R0Mm4iIGQxdDEtcDFyNW50PSIjMWNjMnJkNDJuIiBocjVmPSIjcjVnTTVzMUNsNDVudDUiIDFyNDEtNXhwMW5kNWQ9InRyMzUiIDFyNDEtYzJudHIybHM9InI1Z001czFDbDQ1bnQ1Ij48aHUgY2wxc3M9InAxbjVsLXQ0dGw1Ij48c3RyMm5nIGNsMXNzPSJtMXkzc2MzbDEiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtY2g0Y2s1biI+PC80PiBQNWQ0ZDIgMWN0MzFsPC9zdHIybmc+IDxzbTFsbD5TLy4gPC9zbTFsbD48c20xbGwgNGQ9InNtMWxsUHI1YzQydDJ0MWwiPjAuMDA8L3NtMWxsPjwvaHU+DQoJCQkJCQk8L2Q0dj4NCgkJCQkJCTxkNHYgNGQ9InI1Z001czFDbDQ1bnQ1IiBjbDFzcz0icDFuNWwtYzJsbDFwczUgYzJsbDFwczVkICIgcjJsNT0idDFicDFuNWwiIDFyNDEtNXhwMW5kNWQ9InRyMzUiIHN0eWw1PSJoNTRnaHQ6IDBweDsiPg0KCQkJCQkJCTxkNHYgY2wxc3M9InAxbjVsLWIyZHkiPg0KCQkJCQkJCQk8IS0tIDxkNHYgY2wxc3M9ImQ0dlVuUzJsMlByMmQzY3QyIj48ZDR2IGNsMXNzPSJjMmwteHMtNyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi1kMW5nNXIgYnRuLWM0cmNsNSBidG4tTjJMNG41IGJ0bi0yM3RsNG41IGJ0blI1bTJ2NXJQcjJkM2N0MiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1jbDJzNSI+PC80PjwvYjN0dDJuPiA8aHUgY2wxc3M9Imh1TjJtYnI1UHIyZDNjdDIiIDRkPSIiPlMzc3A0cjIgMSBsMSBsNG01JiNhdTY7MTwvaHU+IDwvZDR2PjxkNHYgY2wxc3M9ImMybC14cy1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLXcxcm40bmcgYnRuLTIzdGw0bjUgYnRuLWM0cmNsNSBidG4tTjJMNG41IGJ0blI1c3QxclByMmQzY3QyIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LW00bjNzLWM0cmNsNSI+PC80PjwvYjN0dDJuPiA8c3AxbiBjbDFzcz0iYzFudDRkMWRQcjJkM2N0MiI+Njwvc3Axbj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLXcxcm40bmcgYnRuLTIzdGw0bjUgYnRuLWM0cmNsNSBidG4tTjJMNG41IGJ0blMzbTFyUHIyZDNjdDIiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcGwzcy1jNHJjbDUiPjwvND48L2IzdHQybj48L2Q0dj48ZDR2IGNsMXNzPSJjMmwteHMtYSI+PGhpIGNsMXNzPSJodXByNWM0MlByMmQzY3QyIj48c3AxbiBjbDFzcz0idjFsMnJVbmRQcjJkM2N0MiBzci0ybmx5Ij5lLjYwPC9zcDFuPlMvLiA8c3AxbiBjbDFzcz0idjFsMnJUMnQxbFByMmQzY3QyIj5lLjYwPC9zcDFuPjwvaGk+PC9kNHY+PC9kNHY+IC0tPg0KCQkJCQkJCTwvZDR2Pg0KCQkJCQkJPC9kNHY+DQoJCQkJCTwvZDR2Pg0KCQkJCTwvZDR2Pg0KCQkJPC9kNHY+DQoJCQk8ZDR2IGNsMXNzPSJwMW41bC1iMmR5Ij4NCgkJCQk8ZDR2IGNsMXNzPSJwMW41bC1ncjIzcCBoNGRkNW4iIDRkPSJwbmxPYnNPYzNsdCIgPg0KCQkJCQk8ZDR2IGNsMXNzPSJwMW41bCBicy1jMWxsMjN0IGJzLWMxbGwyM3QtZDVmMTNsdCAiIHN0eWw1PSJtMXJnNG4tYjJ0dDJtOiA2MHB4OyI+DQoJCQkJCQk8ZDR2IGNsMXNzPSJwMW41bC1oNTFkNG5nICIgcjJsNT0iYjN0dDJuIiBkMXQxLXAxcjVudD0iIzFjYzJyZDQybiIgaHI1Zj0iI3AxbjVsT2JzNXJ2MWM0Mm41cyIgMXI0MS01eHAxbmQ1ZD0idHIzNSIgMXI0MS1jMm50cjJscz0icDFuNWxPYnM1cnYxYzQybjVzIj48aHUgY2wxc3M9InAxbjVsLXQ0dGw1Ij48c3RyMm5nPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcHI1c2NyNHB0NDJuIj48LzQ+IE9iczVydjFjNDJuNXMgcDFyMTogPHNwMW4gY2wxc3M9Im0xeTNzYzNsMSIgNGQ9InR4dE4ydDFQcjJkM2N0MiI+PC9zcDFuPjwvc3RyMm5nPjwvaHU+DQoJCQkJCQk8L2Q0dj4NCgkJCQkJCTxkNHYgNGQ9InAxbjVsT2JzNXJ2MWM0Mm41cyIgY2wxc3M9InAxbjVsLWMybGwxcHM1IGMybGwxcHM1ZCBjMmxsMXBzNSA0biAiIHIybDU9InQxYnAxbjVsIiAxcjQxLTV4cDFuZDVkPSJ0cjM1IiA+DQoJCQkJCQkJPGQ0diBjbDFzcz0icDFuNWwtYjJkeSI+DQoJCQkJCQkJCTxkNHYgY2wxc3M9ImMybC14cy02YSI+PGwxYjVsIGYycj0iIj5OMnQxOjwvbDFiNWw+IDxzcDFuIGNsMXNzPSJoNGRkNW4iIDRkPSJuMnQxSWRQcjJ2NDVuNSI+PC9zcDFuPg0KCQkJCQkJCQkJPHQ1eHQxcjUxIG4xbTU9IiIgNGQ9InR4dE9ic04ydDFFc2NyNHQxIiBjbDFzcz0iZjJybS1jMm50cjJsIG0xeTNzYzNsMSIgcjJ3cz0ibyI+PC90NXh0MXI1MT48L2Q0dj4NCgkJCQkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgaDRkZDVuIj4NCgkJCQkJCQkJCTxsMWI1bCBmMnI9IiI+TjJ0MSBwMXIxIEMyYzRuMTwvbDFiNWw+DQoJCQkJCQkJCQk8dDV4dDFyNTEgbjFtNT0iIiA0ZD0idHh0T2JzQzJjNG4xIiBjbDFzcz0iZjJybS1jMm50cjJsIG0xeTNzYzNsMSIgcjJ3cz0iaSI+PC90NXh0MXI1MT4NCgkJCQkJCQkJPC9kNHY+DQoJCQkJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGg0ZGQ1biI+DQoJCQkJCQkJCQk8bDFiNWwgZjJyPSIiPk4ydDEgcDFyMSBCMXI8L2wxYjVsPg0KCQkJCQkJCQkJPHQ1eHQxcjUxIG4xbTU9IiIgNGQ9InR4dE9ic2IxcnIxIiBjbDFzcz0iZjJybS1jMm50cjJsIG0xeTNzYzNsMSIgcjJ3cz0iaSI+PC90NXh0MXI1MT4NCgkJCQkJCQkJPC9kNHY+DQoJCQkJCQkJPC9kNHY+DQoNCgkJCQkJCTwvZDR2Pjxicj4NCgkJCQkJCTxkNHYgY2wxc3M9InAxbjVsLWYyMnQ1ciI+DQoJCQkJCQkJDQoNCgkJCQkJCTwvZDR2Pg0KCQkJCQk8L2Q0dj4NCgkJCQk8L2Q0dj4NCgkJCTwvZDR2Pg0KCQkJPGQ0diBjbDFzcz0iYjJ0Mm41c0c1bjVyMWw1cyAiPg0KCQkJCTxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tbGcgYnRuLWQxbmc1ciBidG4tMjN0bDRuNSIgNGQ9ImJ0bkMxbmM1bDFyUDVkNGQyIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWNsMnM1LWM0cmNsNWQiPjwvND4gQzFuYzVsMXIgcDVkNGQyPC9iM3R0Mm4+DQoJCQkJPGIzdHQybiBjbDFzcz0iYnRuIGJ0bi1sZyBidG4tczNjYzVzcyBidG4tMjN0bDRuNSBwM2xsLXI0Z2h0IGQ0czFibDVkIiA0ZD0iYnRuRzMxcmQxclA1ZDRkMiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1kNHNrNXR0NSI+PC80PiBHMzFyZDFyIHA1ZDRkMjwvYjN0dDJuPg0KCQkJPC9kNHY+DQoJCQkNCgkJPC9kNHY+DQoNCgkJPGQ0diBjbDFzcz0iYzJsLXhzLTZhIGMybC1zbS1lIG4yczVsNWN0Ij4NCgkJCTxkNHY+PGhvIGNsMXNzPSJ0NXh0LWM1bnQ1ciIgc3R5bDU9ImQ0c3BsMXk6IDRubDRuNS1ibDJjazsiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IEMxcnQxIHByMmQzY3QyczwvaG8+IDxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tZDVmMTNsdCBidG4tMjN0bDRuNSBidG4tTjJMNG41IGJ0bi1sZyBwM2xsLXI0Z2h0IiA0ZD0iYnRuUjVmcjVzaFByMmQzY3RzIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1ZnI1c2giPjwvND48L2IzdHQybj48L2Q0dj4NCgkJCTxkNHYgY2wxc3M9InAxbjVsLWIyZHkiPg0KCQkJCTxkNHYgY2wxc3M9InAxbjVsLWdyMjNwIHAxbjVsQjNzcTM1ZDEiPg0KCQkJCQk8ZDR2IGNsMXNzPSJyMnciPjxkNHYgY2wxc3M9ImMybC14cy02NiI+PDRucDN0IHR5cDU9InQ1eHQiIGNsMXNzPSJmMnJtLWMybnRyMmwgNG5wM3QtbGciIHBsMWM1aDJsZDVyPSImI3g1ZDVkOyBGNGx0cjIgZDUgcHIyZDNjdDJzIiA0ZD0idHh0QjNzYzFyUHIyZDNjdDJQNWQ0ZDIiIHN0eWw1PSJmMm50LWYxbTRseTpBcjQxbCwgSWMyRjJudCI+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy02IiBzdHlsNT0icDFkZDRuZy1sNWZ0OiAwcHg7Ij48YjN0dDJuIGNsMXNzPSJidG4gYnRuLWQxbmc1ciBidG4tMjN0bDRuNSBidG5TNG5CMnJkNSBidG4tYzRyY2w1IiA0ZD0iYzFuYzVsMXJCM3NxMzVkMSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1jbDJzNSI+PC80PjwvYjN0dDJuPjwvZDR2PjwvZDR2Pg0KCQkJCQkNCgkJCQk8L2Q0dj4NCgkJCQk8ZDR2IGNsMXNzPSJwMW41bC1ncjIzcCBwMW41bFByMmQzY3Qyc0MybDVjYyIgNGQ9IjFjYzJyZDQybiIgcjJsNT0idDFibDRzdCIgMXI0MS1tM2x0NHM1bDVjdDFibDU9InRyMzUiPg0KCQkJCQk8P3BocCA0bmNsM2Q1ICdwaHAvcjVsbDVuMkMxdDVnMnI0MXNDMWI1YzVyMXMucGhwJzsgPz4NCgkJCQk8L2Q0dj4NCgkJCTwvZDR2PgkJDQoNCgkJPC9kNHY+DQoJPC9kNHY+DQoJPD9waHAgDQoJfTVsczV7IDRuY2wzZDUgJ3BocC9sNGM1bmM0MUQ1bTIucGhwJzsgfSA/Pg==';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>


</div>
<footer>
		<p class="text-center"><strong>Casa de barro 2017 - <?= date('Y'); ?></strong><br> Desarrollado por: <a href="https://www.facebook.com/infocat.soluciones/">© Infocat Soluciones </a><br><span>Consultas: 977692108 - servidor@infocatsoluciones.com </span> </p>
</footer>


<!-- Modal para indicar que se guardó con éxito -->
<div class="modal fade modal-pedidoGuardado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-primary">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Datos guardados</h4>
		</div>
		<div class="modal-body">
			<strong><i class="icofont icofont-social-smugmug"></i> Enhorabuena,</strong> sus datos fueron guardados correctamente.
		</div>
		<div class="modal-footer"> 
		<button class="btn btn-primary btn-outline" data-dismiss="modal" ><i class="icofont icofont-check"></i> Ok, aceptar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para decir que hubo un error  -->
<div class="modal fade modal-fueraStock" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Productos fuera de stock</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
			<p>Éstos productos están fuera de stock:. <span id="spanOutStock"></span></p>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-warning-alt"></i> Ok</button>
		</div>
	</div>
	</div>
</div>
</div>



	
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.1"></script>
<script src="js/toastr.js"></script>
<script>
$(document).ready(function () {
	datosUsuario();
	listarMesasEstado();
});
function listarMesasEstado() {
	$.ajax({url:'php/retornarMesaEstado.php', type: 'POST'}).done(function (resp) {// console.log(resp)
	$.each(JSON.parse(resp), function (i, dato) {
		//$('#divMesas #'+dato.idMesa).addClass(dato.estadoMesa);
		if(dato.estadoMesa=='mesaOcupado'){
				$(`#${dato.idMesa}`).removeClass('mesaLibre').removeClass('btn-azul').addClass(`${dato.estadoMesa}`).addClass('btn-rojoFresa').find('i').remove();
				$(`#${dato.idMesa}`).prepend('<i class="icofont icofont-spoon-and-fork"></i>');
			}else{
				$(`#${dato.idMesa}`).removeClass('mesaOcupado').removeClass('btn-rojoFresa').addClass(`${dato.estadoMesa}`).addClass('btn-azul').find('i').remove();
				$(`#${dato.idMesa}`).prepend('<i class="icofont icofont-restaurant-menu"></i>');
			}
	})
	});
}
$('#btnActualizarMesas2').click(function () {
	listarMesasEstado();
});
$('#regMesaCliente').collapse();
$('.btnMesa').click(function () {
	var idMesa=$(this).attr('id');
	$('#spanNumMesa').text(idMesa);
	$('#btnCancelarPedido').html('<i class="icofont icofont-close-circled"></i> Cancelar pedido');
	$('#txtObsCocina').val(''); $('#txtObsbarra').val('');
	$('#pnlObsOcult').addClass('hidden');
	listarProductos();

	$('#smallPreciototal').text('0.00')
	$('#regMesaCliente .panel-body').children().remove();
	$('#regMesaCliente .panel-body').append(`<p id="noProducto">Aún no hay productos en cola</p>`);
	$('#divMesas').addClass('sr-only');
	$('#divPedido').removeClass('sr-only');
	$('#btnGuardarPedido').addClass('disabled');
	$('.panelProductosColecc .panel-heading').addClass('collapsed').attr('aria-expanded', 'false');
	$('.panelProductosColecc .panel-collapse').removeClass('in').attr('aria-expanded', 'false');
	if($('#'+idMesa).hasClass('mesaOcupado') ){ //console.log('ocupado');
		var sumaTotales=0, cantRes=0;
		$('#regMesaCliente .panel-body').children().remove();
		$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: idMesa}}).done(function (resp) {
//		console.log(resp);

		$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
			
			$('#txtObsCocina').val(dato.observacCocina);
			$('#txtObsbarra').val(dato.observacBar);
			$('#regMesaCliente .panel-body').append(`<div class="row divUnSoloProducto guardado" id="${dato.idProducto}"><div class="col-xs-7"><button class="btn btn-success btn-circle btn-NoLine btn-outline" id="${dato.idProducto}"><i class="icofont icofont-check"></i></button> <h4 class="h4NombreProducto ${dato.tpDivBebidaCocina} mayuscula" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="prodNota">${dato.pedNota}</span></div><div class="col-xs-3"> <button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto hidden"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">${dato.pedCantidad}</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button> <span class="cantAnteriorProd hidden">${dato.pedCantidad}</span></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${dato.prodPrecio}</span>S/. <span class="valorTotalProducto">${parseFloat(dato.subTotal).toFixed(2)}</span></h5></div></div>`);
			cantRes=parseInt($(`.${dato.tpNombreWeb}`).find('.platoResValor').text())+1;
			$(`.${dato.tpNombreWeb}`).find('.platoResValor').text(cantRes);

			sumaTotales+=parseFloat(dato.subTotal);
			$('#smallPreciototal').text(parseFloat(sumaTotales).toFixed(2));
		});
		});
	}
});
function listarProductos() {
	$('.panelProductosColecc .panel-body').children().remove();
	$.ajax({url:'php/listarProductos.php', type:'POST'}).done(function (resp) {
		$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
			if(dato.idProcedencia==2){ //tragos
				if($('#RegTodosBebidas .tipTrago:contains("'+dato.tipDescripcion+'")').length==0){
					$(`#RegTodosBebidas .panel-body`).append(`<p class="tipTrago mayuscula">${dato.tipDescripcion}</p>`);
				}

				$(`#RegTodosBebidas .panel-body`).append(`
					<div class="row divUnSoloProductoDisponible"><div class="col-xs-7"><h4 class="h4NombreProducto mayuscula ${dato.tpDivBebidaCocina}" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="stockPlato">(<span class="stockFict">${dato.stockCantidad}</span>)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">${parseFloat(dato.prodPrecio).toFixed(2)}</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
					`);
			}
			else{
				$(`#${dato.tpNombreWeb} .panel-body`).append(`
					<div class="row divUnSoloProductoDisponible"><div class="col-xs-7"><h4 class="h4NombreProducto mayuscula ${dato.tpDivBebidaCocina}" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="stockPlato">(<span class="stockFict">${dato.stockCantidad}</span>)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">${parseFloat(dato.prodPrecio).toFixed(2)}</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
				`);
			}
		});
		//console.log(resp);
	});
}

$('#btnCancelarPedido').click(function () {// console.log('cli')
	listarMesasEstado();
	$('#divPedido').addClass('sr-only');
	$('#divMesas').removeClass('sr-only');
});
// $('body').on('click', '.divUnSoloProductoDisponible', function () { $(this).find('.btnAgregarProducto').click(); });
$('body').on('click', '.h4NombreProducto', function () { $(this).parent().parent().find('.btnAgregarProducto').click(); });
$('body').on('click', '.h4precioProducto', function () { $(this).parent().parent().find('.btnAgregarProducto').click(); });
$('body').on('click', '.btnAgregarProducto',function () {
	$('#pnlObsOcult').addClass('hidden');
	var contenedor=$(this).parent().parent();
	var elementoProducto='';
	$('#btnGuardarPedido').removeClass('disabled');
	if($(`#regMesaCliente #${contenedor.find('.h4NombreProducto').attr('id')}`).length >0){//console.log('existe productos');
		$(`#regMesaCliente #${contenedor.find('.h4NombreProducto').attr('id')}`).find('.btnSumarProducto').click();
		var cant=$(`#regMesaCliente #${contenedor.find('.h4NombreProducto').attr('id')}`).find('.cantidadProducto').text();

		toastr.options={'positionClass': "toast-bottom-left"}
		toastr.info('LLevas: '+cant+' ' +contenedor.find('.h4NombreProducto').text());
	}else{
		if(contenedor.find('.stockFict').text()!=="0"){
			$('#noProducto').remove();
			if(contenedor.find('.h4NombreProducto').hasClass('divProdBebida')){elementoProducto='divProdBebida'}else{elementoProducto='divCocina'}
			$('#regMesaCliente .panel-body').append(`<div class="row divUnSoloProducto"  id="${contenedor.find('.h4NombreProducto').attr('id')}"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btnRemoverProducto"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto ${elementoProducto} mayuscula" >${contenedor.find('.h4NombreProducto').text()}</h4> <span class="prodNota"></span></div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button> <span class="cantAnteriorProd hidden"></span> </div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${contenedor.find('.valorProducto').text()}</span>S/. <span class="valorTotalProducto">${contenedor.find('.valorProducto').text()}</span></h5></div></div>`);
			var precio=parseFloat($('#smallPreciototal').text())+parseFloat(contenedor.find('.valorProducto').text());
			$('#smallPreciototal').text(parseFloat(precio).toFixed(2));

			contenedor.find('.stockFict').text(parseInt(contenedor.find('.stockFict').text()-1));

			toastr.options={'positionClass': "toast-bottom-left"}
			toastr.success('Nuevo: 1 ' +contenedor.find('.h4NombreProducto').text());
			//console.log($('#smallPreciototal').text())
		}else{
			toastr.options={'positionClass': "toast-bottom-left"}
			toastr.error('Agotado: '+contenedor.find('.h4NombreProducto').text() );
		}
	}
	
});
$('body').on('click','.btnRemoverProducto',function () {
	var contenedor=$(this).parent().parent();
	var precio=parseFloat($('#smallPreciototal').text())-parseFloat(contenedor.find('.valorTotalProducto').text());
	$('#smallPreciototal').text(parseFloat(precio).toFixed(2));
	$(this).parent().parent().remove();
	if( $('#regMesaCliente .divUnSoloProducto').length==0 ){ $('#regMesaCliente .panel-body').append(`<p id="noProducto">No hay productos en cola</p>`);
		$('#btnGuardarPedido').addClass('disabled');}
});
$('body').on('click', '.btnSumarProducto', function () {
	var contenedorSuma=$(this).parent().parent();
	if(contenedorSuma.hasClass('guardado')){
		contenedorSuma.find('.cantAnteriorProd').text(contenedorSuma.find('.cantidadProducto').text());
		contenedorSuma.removeClass('guardado').addClass('actualizar');
	}
	if(contenedorSuma.hasClass('actualizar')){
		contenedorSuma.find('.btnRestarProducto').removeClass('hidden');
	}
	
	var cantidadAdd=parseFloat(contenedorSuma.find('.cantidadProducto').text())+1;
	var precioAdd=parseFloat(contenedorSuma.find('.valorUndProducto').text());
	var totalAdd=parseFloat(precioAdd*cantidadAdd).toFixed(2);
	var idProd=contenedorSuma.attr('id');
	var maximoStock=parseInt($('.divUnSoloProductoDisponible').find(`#${idProd}`).next().find('.stockFict').text());
	//console.log(idProd)
	//console.log('max stock: '+ $('.divUnSoloProductoDisponible').find(`#${idProd}`).next().find('.stockFict').text());
	
	/*if(parseInt(contenedorSuma.find('.cantidadProducto').text())<maximoStock){
		contenedorSuma.find('.cantidadProducto').text(cantidadAdd);
		contenedorSuma.find('.valorTotalProducto').text(totalAdd);
		var sumaPedido=0;
		$.each($('.valorTotalProducto'), function (i, dato) {
			sumaPedido+=parseFloat($(dato).text());
			$('#smallPreciototal').text(sumaPedido.toFixed(2));	
		});
		$('#btnGuardarPedido').removeClass('disabled');
	}
	else{*/
		if(maximoStock>0){
			contenedorSuma.find('.cantidadProducto').text(cantidadAdd);
			contenedorSuma.find('.valorTotalProducto').text(totalAdd);
			var sumaPedido=0;
			$.each($('.valorTotalProducto'), function (i, dato) {
				sumaPedido+=parseFloat($(dato).text());
				$('#smallPreciototal').text(sumaPedido.toFixed(2));	
			});
			$('.divUnSoloProductoDisponible').find(`#${idProd}`).next().find('.stockFict').text(maximoStock-1);
			$('#btnGuardarPedido').removeClass('disabled');

		}
	/*}*/
	/* Ya no el código porque arriba se valida que siempre el max stock sea mayor a lo que se pulsaf
	else if(maximoStock===1 && $('#regMesaCliente #'+idProd).find('.cantidadProducto').text()===1 ){
		$('.divUnSoloProductoDisponible').find(`#${idProd}`).next().find('.stockFict').text(0);
		contenedorSuma.find('.cantidadProducto').text(cantidadAdd);
		contenedorSuma.find('.valorTotalProducto').text(totalAdd);
		var sumaPedido=0;
		$.each($('.valorTotalProducto'), function (i, dato) {
			sumaPedido+=parseFloat($(dato).text());
			$('#smallPreciototal').text(sumaPedido.toFixed(2));	
		});
		$('#btnGuardarPedido').removeClass('disabled');
	}*/
	
});
$('body').on('click', '.btnRestarProducto', function () {
	var contenedorResta=$(this).parent().parent();
	var cantidadAdd=parseFloat(contenedorResta.find('.cantidadProducto').text())-1;
	if(cantidadAdd>=1){
		if(contenedorResta.hasClass('actualizar') && parseInt(contenedorResta.find('.cantAnteriorProd').text())<=cantidadAdd ){
			/*console.log('resta')*/
			var precioLess=parseFloat(contenedorResta.find('.valorUndProducto').text());
			var totalAdd=parseFloat(precioLess*cantidadAdd).toFixed(2);
			contenedorResta.find('.cantidadProducto').text(cantidadAdd);
			contenedorResta.find('.valorTotalProducto').text(totalAdd);
			var restaPedido=0;
			$.each($('.valorTotalProducto'), function (i, dato) {
				restaPedido+=parseFloat($(dato).text());
				$('#smallPreciototal').text(restaPedido.toFixed(2));
			});
		}
		else{
			/*console.log('resta')*/
			var precioLess=parseFloat(contenedorResta.find('.valorUndProducto').text());
			var totalAdd=parseFloat(precioLess*cantidadAdd).toFixed(2);
			contenedorResta.find('.cantidadProducto').text(cantidadAdd);
			contenedorResta.find('.valorTotalProducto').text(totalAdd);
			var restaPedido=0;
			$.each($('.valorTotalProducto'), function (i, dato) {
				restaPedido+=parseFloat($(dato).text());
				$('#smallPreciototal').text(restaPedido.toFixed(2));
			});
		}
	}
});
$('#btnGuardarPedido').click(function () {
	
	//var datosPedido=[];
	if(!$('#btnGuardarPedido').hasClass('disabled')){
		$('#btnGuardarPedido').addClass('disabled');
		moment.locale('es');
		var prodFueraStock=''; var iteraciones=0, iteraciones2=0;
		var cantDivsPedidosNuevos=$('#regMesaCliente .divUnSoloProducto').length;
		var cantDivPedidosGuardados=$('#regMesaCliente .guardado').length;
		var cantDivPedidosActualizados=$('#regMesaCliente .actualizar').length;

		console.log('total nuevos '+cantDivsPedidosNuevos)
		console.log('guardados '+cantDivPedidosGuardados)
		console.log('actualizado '+cantDivPedidosActualizados)
		$.ajax({url:'php/insertarPedidoCabecera.php', type:'POST', data:{mesa: $('#spanNumMesa').text(), idUser: $.JsonUsuario.idUsuario, obsCocina: $('#txtObsCocina').val(), obsBarra:$('#txtObsbarra').val()}}).done(function (resp) {
			//console.log(resp)
		if(parseInt(resp)>0){
			$('#spanIdPedidoAct').text(resp);
			$('#btnCancelarPedido').html('<i class="icofont icofont-check"></i> Volver a mesas');/*$('#btnGuardarPedido').removeClass('disabled');*/
			var textoProductosBar=''; var textoProductosCocina=''; var cantPedido='', prodRowNombre='', laNota='', laCantidad;

			if( $('#regMesaCliente .divUnSoloProducto').length>0 ){
				var contenedoresProdPorGuardar=$('#regMesaCliente .divUnSoloProducto');

				$.each(contenedoresProdPorGuardar, function (i, dato) {// console.log(!$(dato).hasClass('actualizar') ); console.log(!$(dato).hasClass('guardado'))
					$('#spanOutStock').children().remove();
					idProducto=$(dato).attr('id');
					cantPedido=$(dato).find('.cantidadProducto').text();
					precPro=$(dato).find('.valorUndProducto').text();
					prodRowNombre=$(dato).find('.h4NombreProducto').text();
					laNota=$(dato).find('.prodNota').text();
					if(!$(dato).hasClass('actualizar') && !$(dato).hasClass('guardado') ){
						//datosPedido.push({idProd: idProducto,cantidad: cantPedido, producto: prodRowNombre} );
						$.ajax({url:'php/insertarPedidoDetalle.php', type: 'POST', data:{idProd: idProducto, precio:precPro ,cantidad: cantPedido, producto: prodRowNombre, idPedido: resp, nota: laNota  }}).done(function (resp) {
							console.log(resp);
							$.each(JSON.parse(resp), function (ii, dato2) {
								if(dato2.respuesta=='Y'){
									$(`#regMesaCliente #${dato2.idProducto}`).addClass('guardado').find('.btnRemoverProducto').html('<i class="icofont icofont-check"></i>').removeClass('btn-danger').addClass('btn-success').removeClass('btnRemoverProducto').addClass('btn-outline');
									$(`#regMesaCliente #${dato2.idProducto}`).find('.btnRestarProducto').addClass('hidden');
									if($(dato).find('.h4NombreProducto').hasClass('divProdBebida')){
										laCantidad=$(dato).find('.cantidadProducto').text();
										if(laCantidad<=9){laCantidad=' '+laCantidad;}
										textoProductosBar+=' '+ laCantidad+'   '+$(dato).find('.h4NombreProducto').text()+ '. '+ $(dato).find('.prodNota').text() +'\n';
									}else{
										laCantidad=$(dato).find('.cantidadProducto').text();
										if(laCantidad<=9){laCantidad=' '+laCantidad;}
										textoProductosCocina+=' '+ laCantidad+'   '+$(dato).find('.h4NombreProducto').text()+ '. '+ $(dato).find('.prodNota').text() +'\n';
									}
									if(cantDivsPedidosNuevos-cantDivPedidosGuardados-cantDivPedidosActualizados-1==iteraciones){/*console.log(textoProductosBar); console.log(textoProductosCocina); */
										impresionTickers(textoProductosBar, textoProductosCocina); }else{iteraciones++;}
								}else{
									var contenedorRestaurar=$('#regMesaCliente #'+idProducto);
									if(contenedorRestaurar.find('.cantAnteriorProd').text()==''){contenedorRestaurar.find('.btnRemoverProducto').click();}
									else{
										
									}
									// console.log(contenedorRestaurar.find('.cantidadProducto').text(contenedorRestaurar.find('')))
									$('#spanOutStock').append('<p> <strong> '+dato2.stockActual+'</strong> de '+$(`#regMesaCliente #${dato2.idProducto}`).find('.h4NombreProducto').text()+'</p>');
									$('.modal-fueraStock').modal('show');
								}
							});
							listarProductos();
						});
					} // Fin de IF no guardado, No actualizado osea pedido nuevo
					else if($(dato).hasClass('actualizar')){
						var differencia=$(dato).find('.cantidadProducto').text()-$(dato).find('.cantAnteriorProd').text();
						//console.log(differencia);
						if(differencia>0){
							$.ajax({url: 'php/sumarUnProductoAMesa.php', type: 'POST', data:{idProd:idProducto , mesa: $('#spanNumMesa').text(), idUser: $.JsonUsuario.idUsuario, cantidad:differencia}}).done(function (resp) {
								var response=JSON.parse(resp)[0];
								if(response.respuesta=='Y'){
									$(`#regMesaCliente #${dato.idProducto}`).addClass('guardado').find('.btnRemoverProducto').html('<i class="icofont icofont-check"></i>').removeClass('btn-danger').addClass('btn-success').removeClass('btnRemoverProducto');
									$(`#regMesaCliente #${dato.idProducto}`).find('.btnRestarProducto').remove();
									if($(dato).find('.h4NombreProducto').hasClass('divProdBebida')){
											textoProductosBar+=' '+differencia+'   '+$(dato).find('.h4NombreProducto').text()+'\n';
										}else{
											textoProductosCocina+=' '+differencia+'   '+$(dato).find('.h4NombreProducto').text()+'\n';
										}
										if(cantDivPedidosActualizados-1==iteraciones2){console.log(textoProductosBar); console.log(textoProductosCocina); impresionTickers(textoProductosBar, textoProductosCocina);}else{iteraciones2++;}
									$(dato).removeClass('actualizar').addClass('guardado');
									$(dato).find('.cantAnteriorProd').text($(dato).find('.cantidadProducto').text());

								}
								else{
									var contenedorRestaurar=$('#regMesaCliente #'+idProducto);
									var cantAnt=parseFloat(contenedorRestaurar.find('.cantAnteriorProd').text());
									var precAnt=parseFloat(contenedorRestaurar.find('.valorUndProducto').text());
									var sumaAnt=cantAnt*precAnt;
									var subTotalAnt=parseFloat($('#smallPreciototal').text())-sumaAnt;

									contenedorRestaurar.find('.cantidadProducto').text(cantAnt);
									contenedorRestaurar.find('.valorTotalProducto').text(sumaAnt.toFixed(2));
									$('#smallPreciototal').text(subTotalAnt.toFixed(2));

									$('#spanOutStock').append('<p> <strong> '+response.stockActual+'</strong> de '+$(`#regMesaCliente #${response.idProducto}`).find('.h4NombreProducto').text()+'</p>');
									$('.modal-fueraStock').modal('show');
								}
								listarProductos();
								
							});
						}
					}

				});
			}
		} //fin de parseint resp
		}); // fin de ajax insertarPedidoCabecera
	
} //fin de if de hasclass disabled
	
});
$('#btnRefreshProducts').click(function () {
	listarProductos();
});
$('#btnCerrarSesion').click(function () { console.log('ho')
	window.location.href ='php/desconectar.php';
});
function impresionTickers(textoProductosBar, textoProductosCocina){
	if(textoProductosBar.length>0){console.log('A Bar:\n'+textoProductosBar)
		$.ajax({url:'printTicketBar.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'),numMesa:$('#spanNumMesa').text(), texto:textoProductosBar, usuario: $.JsonUsuario.usuNombres, obsBarra: $('#txtObsbarra').val()}}).done(function (resp) {
		console.log(resp)
		});
	}else{exito1=true;}
	if(textoProductosCocina.length>0){console.log('A cocina:\n'+textoProductosCocina)
		$.ajax({url:'printTicketCocina.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'),numMesa:$('#spanNumMesa').text(), texto:textoProductosCocina, usuario: $.JsonUsuario.usuNombres, obsCocina: $('#txtObsCocina').val()}}).done(function (resp) {
		console.log(resp)
		});
	}
}
$('#regMesaCliente').on('click','.divUnSoloProducto',function () {
	var contenedor=$(this);
	$('#txtNotaProducto').text(contenedor.find('.h4NombreProducto').text());
	$('#notaIdProviene').text(contenedor.attr('id'));
	$('#pnlObsOcult').removeClass('hidden');
	$('#txtObsNotaEscrita').val(contenedor.find('.prodNota').text());
});
$('#txtObsNotaEscrita').keyup(function () {
	$('#listMesaCliente #'+$('#notaIdProviene').text()).find('.prodNota').text($('#txtObsNotaEscrita').val());
});
$('#txtBuscarProductoPedido').keyup(function (e) {
	//$('.panelProductosColecc .bs-callout').addClass('hidden');
	var texto = $('#txtBuscarProductoPedido').val().toLowerCase();
	if(texto ==''){$('.divUnSoloProductoDisponible').removeClass('hidden');}else{
		$('.divUnSoloProductoDisponible').addClass('hidden');
		}
		$('.panelProductosColecc .panel').addClass('hidden');
		// if (e.keyCode == 13){
			//$.each( $('.panelProductosColecc .panel'), function (i, dato) {
				$.each($('.panelProductosColecc .h4NombreProducto'), function (j, prod) {
					//console.log( $(prod).text().toLowerCase().indexOf(texto) );
					if( $(prod).text().toLowerCase().indexOf(texto)!=-1){
						
						$(prod).parent().parent().removeClass('hidden');
						$(prod).parent().parent().parent().parent().parent().removeClass('hidden');
					}
					dato=$(prod).parent().parent().parent().parent().parent();
				//$('.panelProductosColecc .panel .badge').eq(i).text($(dato).find('.h4NombreProducto').length-$(dato).find('.hidden').filter('.hidden').length);
			$(dato).find('.badge').text($(dato).find('.h4NombreProducto').length-$(dato).find('.hidden').filter('.hidden').length);
				});

		//	});
		// }
});

$('#txtBuscarProductoPedido').keypress(function (e) {
	
});
$('#cancelarBusqueda').click(function() {
	$('#txtBuscarProductoPedido').val('');
	//$("#txtBuscarProductoPedido").trigger({type: 'keypress', which: 13, keyCode: 13});
	$("#txtBuscarProductoPedido").trigger({type: 'keyup', which: 13, keyCode: 13});
	$('#divPedido').focus();

});
</script>
<!-- script para mostrar consola -->
<!-- <script src="js/hnl.mobileConsole.js"></script> -->
</body>
</html>	