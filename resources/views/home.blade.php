@extends('layouts.new_app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Interagi no mé, cursus quis, vehicula ac nisi. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.</p>

                    <p>Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Diuretics paradis num copo é motivis de denguis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</p>

                    <p>Mé faiz elementum girarzis, nisi eros vermeio. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Cevadis im ampola pa arma uma pindureta.</p>

                    <p>Sapien in monti palavris qui num significa nadis i pareci latim. Paisis, filhis, espiritis santis. Quem manda na minha terra sou euzis! Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.</p>

                    <p>In elementis mé pra quem é amistosis quis leo. Suco de cevadiss deixa as pessoas mais interessantis. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.</p>

                    <p>Atirei o pau no gatis, per gatis num morreus. Viva Forevis aptent taciti sociosqu ad litora torquent. Per aumento de cachacis, eu reclamis. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

                    <p>Quem num gosta di mé, boa gentis num é. Pra lá , depois divoltis porris, paradis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Detraxit consequat et quo num tendi nada.</p>

                    <p>Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Si num tem leite então bota uma pinga aí cumpadi! Quem num gosta di mim que vai caçá sua turmis! Leite de capivaris, leite de mula manquis sem cabeça.</p>

                    <p>Casamentiss faiz malandris se pirulitá. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Aenean aliquam molestie leo, vitae iaculis nisl. A ordem dos tratores não altera o pão duris.</p>

                    <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Manduma pindureta quium dia nois paga.</p>

                    <p>Cevadis im ampola pa arma uma pindureta. A ordem dos tratores não altera o pão duris. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Si num tem leite então bota uma pinga aí cumpadi!</p>

                    <p>Interagi no mé, cursus quis, vehicula ac nisi. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Detraxit consequat et quo num tendi nada. Paisis, filhis, espiritis santis.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
