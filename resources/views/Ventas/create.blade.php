<form action="{{url('/ventas')}}" method="post" role="form">
{{csrf_field()}}
<select name="id_cliente" id="id_cliente" class="form-control">
<option value="">seleccione un cliente</option>
@foreach($clientes as $cliente)
    <option value="{{$cliente ['id']}}">{{$cliente ['nombre']}}</option>
@endforeach
</select>
<select name="id_producto" id="id_producto" class="form-control">
<option value="">seleccione un producto </option>
@foreach($productos as $producto)
    <option value="{{$producto ['id']}}">{{$producto ['nombre']}}</option>
@endforeach
</select>
<input type="submit" value="Registrar">
</form>


