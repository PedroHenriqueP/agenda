@include('agenda.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe</title>
</head>
<body>
    <center><h3>Detalhamento do {{$assunto->cadeira}}</h3>
    <br>
        <div style="width:900px;">
        <table>
            <tr>
                <h5>Cadeira</h5>
                <a class="list-group-item list-group-item-action list-group-item-primary">{{$assunto->cadeira}}</a>
                <h5>Assunto</h5>
                <a class="list-group-item list-group-item-action list-group-item-primary">{{$assunto->assunto}}</a>
                <h5>Data de entrega</h5>
                <a class="list-group-item list-group-item-action list-group-item-primary">{{$assunto->data}}</a>
                <h5>Descrição</h5>
                <a class="list-group-item list-group-item-action list-group-item-primary">{{$assunto->descricao}}</a>
            </tr>
        </table>
        </div>
    <br>
    <button class="btn btn-outline-primary" style="width:5%"><a href='{{ route('agenda.index')}}'>Voltar</a></button>
    </center>
</body>
</html>