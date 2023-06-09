<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
     <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
    
</body>
</html>

@section('title', 'Venda')

    @extends('adminlte::page')


@section('content')
   
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <img class="card-img-top img-responsive img-thumbnail" src="{{ asset('img/cards/inventory_plant.png')}}"  style="height: 50px; width: 50px;"alt="Imagem" >
                  Excluir Estoque de Fertilizante
              </div>
          </div>
      </div>
  </div>
</div>

   <!-- Fim do Formulario de despesa_conta --> 
   <form action="{{ route('fertilizer_inventory.destroy',[ 'fertilizer_inventory' => $fertilizer_inventory->id])}}" method="POST"  enctype="multipart/form-data">

    @method('DELETE')
  
         <div class="form-group">
         {!! csrf_field() !!}  


  <div class="form-group">

    <div class="container">


        <div class="row">
          <div class="bolder">Data:</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $fertilizer_inventory->date}}</div>
        </div>

        <div class="row">
          <div class="bolder">Fertilizante</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $fertilizer_inventory->product->name}}</div>
        </div>

        <div class="row">
          <div class="bolder">Area</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $fertilizer_inventory->provide->name}}</div>
        </div>

        <div class="row">
          <div class="form-group col-sm-3 ">
          <div class="bolder">Entrada</div>    
          <div class="form-control">{{ $fertilizer_inventory->entry}}</div>
        </div>

        <div class="form-group col-sm-3 ">
          <div class="bolder">Saida</div>
          <div class="form-control">{{ $fertilizer_inventory->exit}}</div>
        </div>

        <div class="form-group col-sm-2 ">
          <div class="bolder">Estoque</div>
          <div class="form-control">{{ $fertilizer_inventory->balance}}</div>
        </div>    
       
        <div class="form-group col-sm-2 ">
          <div class="bolder">Mínimo</div>
          <div class="form-control">{{ $fertilizer_inventory->minimum_stock}}</div>
        </div>

      
        <div class="form-group col-sm-2 ">
          <div class="bolder">Unidade</div>
          <div class="form-control">{{ $fertilizer_inventory->product->unity}}</div>
        </div>
        </div>

        <div class="row">
          <div class="bolder">Status</div>
        </div>
        <div class="row">
          <div class="form-control">{{ $fertilizer_inventory->status}}</div>
        </div>


        <div class="bg-light">Observação</div>
        <div class="row">
            <textarea class="form-control" rows="3" >{{$fertilizer_inventory->note }} </textarea>
        </div>
        <br>

    
    <p></p>
  
             <div class="form-group">
                  <button type="submit" class="btn btn-outline-danger" >Confirma a exclusão dessa atividade</button>
                  <a href="{{ url('/fertilizer_inventory') }}" class="float-right" >Voltar </a> 
             </div>
         </div>
     </form>

</div>
</div>
<a href="#" id="ancora"></a>


@endsection

