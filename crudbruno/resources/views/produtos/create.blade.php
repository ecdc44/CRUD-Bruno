<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
        <?php echo csrf_field() ?>

        <label for="">Nome</lable><br />
        <input type="text" nome="nome"> <br />

        <label for="">Custo</lable><br />
        <input type="text" nome="custo"> <br />

        <label for="">Preco</lable><br />
        <input type="text" nome="preco"> <br />

        <label for="">Qauntidade</lable><br />
        <input type="text" nome="quantidade"> <br />

        <button>Salvar</button>
     <form>
</body>

</html>
