<form action="" method="POST" role="form">
<select name="empleado" id="input" class="form-control">
<option value="">seleccione un cliente</option>
@foreach($clientes as $cliente)
    <option value="{{$cliente ['id']}}">{{$cliente ['nombre']}}</option>
@endforeach
</select>
<select name="producto" id="input" class="form-control">
<option value="">seleccione un producto </option>
@foreach($productos as $producto)
    <option value="{{$producto ['id']}}">{{$producto ['nombre']}}</option>
@endforeach
</select>
</form>


