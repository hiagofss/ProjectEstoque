@extends('principal')

@section('conteudo')
<div class="container">
    <h1>Listagem de produtos com Laravel</h1>
    <table class="table table-striped table-bordered table-hover">
        <?php foreach($produtos as $p): ?>
            <tr>
                <td> <?= $p->nome?></td>
                <td> <?= $p->valor ?></td>
                <td> <?= $p->descricao ?></td>
                <td> <?= $p->quantidade ?></td>
                <td>
                    <a href="/produtos/mostra/<?= $p->id?>">
                        <i class="fas fa-search"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
@stop
