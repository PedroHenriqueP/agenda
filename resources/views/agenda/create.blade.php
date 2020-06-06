@include('agenda.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
</head>
<body>
    <center><h1>Adicionar atividade</h1></center>
    <br>
    <form action="{{route('agenda.store')}}" method='POST'>
    @csrf
        <center><div class='container'>
            <div class="col-md-12">
                <div class="col-md-6">
                    <label>Cadeira/Disciplina</label>
                    <input type="text" class="form-control" placeholder="Cadeira/Disciplina" name='cadeira'>
                </div>
                <div class="col-md-6">
                    <label>Assunto</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Assunto" name='assunto'>
                </div>
            </div>
        </div>
            <div class="container">
                <div class='col-md-12'>
                    <div class="col-md-6">
                        <label>Data de entrega</label>
                        <input type="date" class="form-control" id="validationTooltip03" placeholder="Data" name='data'>
                    </div>
                    <div class="col-md-6">
                        <label>Descrição</label>
                        <input type="text" class="form-control" id="validationTooltip04" placeholder="Descrição" name='descricao'>
                    </div>
                </div>
            </div>
            <br>
            
            <button class="btn btn-success" type="submit">Criar</button>
            <button class="btn btn-outline-primary" style="width:5%"><a href="{{ route('agenda.index')}}">Voltar<a/></button>
            </form>
        </div></center>
    </form>
</body>
</html>