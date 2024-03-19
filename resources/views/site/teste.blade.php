<h1>Teste</h1>

P1 = {{$p1}} <br>
P2 = {{$p2}}
<br>
@php echo "A soma de $p1 + $p2 é:".($p1+$p2);@endphp


{{ 'Texto de Teste' }}
<br>
<?= 'Texto de teste' ?>

{{-- @php
 if (condition) {
    # code...
 }else {
    # code...
 }   
@endphp --}}

{{-- @dd($fornecedores); --}}

{{--
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem mais de 10 fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif--}}

{{--
Fornecedores:
<br>
<br>
Fornecedor 1 = {{$fornecedores[0]['nome']}}
<br>
Status = {{$fornecedores[0]['status']}}

<br>
<br>

Fornecedor 2 = {{$fornecedores[1]['nome']}}
<br>
Status = {{$fornecedores[1]['status']}}
<br>
<br>

@if ($fornecedores[0]['status'] == 'N')
    Fornecedor {{$fornecedores[0]['nome']}} Inativo
@endif


<br>
<br>

@unless ($fornecedores[0]['status'] == 'S')
Fornecedor {{$fornecedores[0]['nome']}} Inativo
@endunless

<br>
<br>

@unless ($fornecedores[1]['status'] == 'N')
Fornecedor {{$fornecedores[1]['nome']}} Ativo
@endunless

