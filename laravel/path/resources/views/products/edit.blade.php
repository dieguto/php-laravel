<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>XPTO Vendas</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link"
				href="vendas.jsp">XPTO Vendas</a></li>
			
	</div>
	</nav>
	<div class="container">
		<h3>Editando o Produto {{ $product->title}}</h3>
        <br>
			
			<br>
			<hr/>
			<form action="{{ route('products.update',['id'=>$product->id])}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT"/>
				
				<hr/>
				<input class="form-control" type="text" name="title" placeholder="Title" value="{{ $product->title }}">
				<br>
				<textarea class="form-control" name="body" placeholder="Title">{{ $product->body }}</textarea>
				<br>
				<input class="form-control" type="text" name="value" placeholder="Value" value="{{ $product->value }}">
				<br>
				<input class="form-control" type="number" name="qtd" placeholder="Quantity" value="{{ $product->qtd }}">
				<br>
				<input class="form-control" type="text" name="url" placeholder="Url Image" value="{{ $product->url }}">

				<hr/>
				<input  type="submit" href="#" class="btn btn-warning" value="Editar">
			</form>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script>

	</script>
</body>
</html>