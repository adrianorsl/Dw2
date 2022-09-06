


@yield('form')
<form action="{{ route('agenda.store') }}" method="post">
    @method("POST")
    @csrf
<fieldset>
    <legend>Nome</legend>
    <input type="text"   name="nome" id="nome">  
    <legend>Telefone</legend>
    <input type="text"   name="telefone" id="telefone">  
    <legend>E-mail</legend>
    <input type="text"   name="email" id="email"> 
    <input type="submit" value="Salvar">
    <br><br>
</fieldset>
</form>

