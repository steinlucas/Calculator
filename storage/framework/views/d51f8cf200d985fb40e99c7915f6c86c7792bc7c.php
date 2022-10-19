<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Calculadora</title>
    </head>

    <body>
    <div class="container">
        <h1>Calculadora</h1><br>
        <form method="post" action="<?php echo e(route('calcular')); ?>">

        <?php echo csrf_field(); ?>


        <div class="col-3">
        <span>Valor 1:</span>
            <input type="text" name="val1" value="" class="form-control" id="val1" placeholder="Informe o primeiro número">
        </div><br>

        <div class="col-3">

        <span>Operador</span>
        

        <select class="form-select" name="operador">
            <option value="">Selecione...</option>
            <option value="add" >Adicionar</option>
            <option value="mult">Multiplicar</option>
            <option value="sub" >Subtrair</option>
            <option value="div" >Dividir</option>
        </select>
        <br>

        <div class="col-3">
        <span>Valor 2:</span>
            <input type="text" name="val2" value="" class="form-control" id="val2" placeholder="Informe o segundo número">
        </div><br>

    <?php if(session('resultado')): ?>
        <div class="alert alert-success">
        Resultado: <?php echo e(session('resultado')); ?>

        </div>
    <?php endif; ?>

        <button type="submit" class="btn btn-success">Calcular</button>
        </form>
    </div><!--container-->
    </body>
</html><?php /**PATH C:\Users\Aluno\calculadora\resources\views/index.blade.php ENDPATH**/ ?>