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
		<h3>Produtos</h3>
        <br>
			<a href="{{ route('products.create')}}" class="btn btn-success">Novo</a>
			<br>
			<hr/>
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col" width="15%">Title</th>
						<th scope="col" width="15%">Qtd</th>
						<th scope="col" width="15%">Value</th>
						<th scope="col" width="15%">Imagem</th>
						<th scope="col" width="20%">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{ $product->title}}</td>
						<td>{{ $product->qtd}}</td>
						<td>{{ $product->value}}</td>
						<td><img src="{{ $product->url}}" style="width:50px"></td>
						<td>
							<a  href="{{ route('products.edit',['id'=>$product->id]) }}" class="btn btn-warning">Edit</a>
							
							<form action="{{ route('products.destroy',['id'=>$product->id])}}" method="POST">
							
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="DELETE">
							
							
							<input class="btn btn-danger" type="submit" value="Remove">
							<!-- <a href="{{ route('products.destroy',['id'=>$product->id]) }}" class="btn btn-danger">Remove</a> -->
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
            </table>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><script>

	</script>
</body>
</html>