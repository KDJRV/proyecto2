<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('servios*') ? 'active' : '' }}">
    <a href="{{ route('servios.index') }}"><i class="fa fa-edit"></i><span>Servios</span></a>
</li>

<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{{ route('ventas.index') }}"><i class="fa fa-edit"></i><span>Ventas</span></a>
</li>

