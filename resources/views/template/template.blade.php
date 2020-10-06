<!DOCTYPE html>
<html lang="pt-br">
 @include('template.head')
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cartório bom jesus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('listaCertidao')}}">Certidao <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('listaContrato')}}">Contrato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('listaTabeliao')}}">Tabeliao</a>
      </li>
    </ul>
  </div>
</nav>

    @yield('conteudo')
</body>
</html>