@include('agenda.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<center><h1>Editar o {{ $assunto->cadeira }}</h1></center>
    <form action="{{route('agenda.update', [ $assunto->id ])}}" method='POST'>
    @csrf
    @method('PUT')
        <center><div class='container'>
            <div class="col-md-12">
                <div class="col-md-6">
                    <label>Cadeira/Disciplina</label>
                    <input type="text" class="form-control" placeholder="Cadeira/Disciplina" name='cadeira' value="{{ old('cadeira', $assunto->cadeira) }}">
                </div>
                <div class="col-md-6">
                    <label>Assunto</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Assunto" name='assunto' value="{{ old('cadeira', $assunto->assunto) }}">
                </div>
            </div>
        </div>
            <div class="container">
                <div class='col-md-12'>
                    <div class="col-md-6">
                        <label>Data de entrega</label>
                        <input type="date" class="form-control" id="validationTooltip03" placeholder="Data" name='data' value="{{ old('cadeira', $assunto->data) }}">
                    </div>
                    <div class="col-md-6">
                        <label>Descrição</label>
                        <input type="text" class="form-control" id="validationTooltip04" placeholder="Descrição" name='descricao' value="{{ old('cadeira', $assunto->descricao) }}">
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Atualizar</button>
            <button class="btn btn-outline-primary" style="width:5%"><a href="{{ route('agenda.index')}}">Voltar<a/></button>
            </form>
        </div></center>
    </form>




</body>
</html>