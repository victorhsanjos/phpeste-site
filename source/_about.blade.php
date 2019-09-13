<?php if (date('Y-m-d') == '2019-09-13') { ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Novidade no dia do programador</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        Temos uma surpresa para você, hoje dia do programador estamos te dando 30% de desconto na compra de seu ingresso.
        <br><br>
        Acesse <a href="https://loja.phpeste.net">https://loja.phpeste.net</a> e garanta jã seu ingresso utilizando o cupom <b>DiaDoProgramador</b>.
      </div>
    </div>
  </div>
</div>

<script>
setTimeout(function() {
    $('#myModal').modal();
}, 4000);
</script>
<?php } ?>

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mx-auto text-center section-heading">
            <h2 class="mb-5 text-uppercase">A conferência</h2>
          </div>
        </div>
        <div class="col-md-7 mx-auto text-center section-heading">
            <div id="date-countdown" class="mb-4"></div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <!--<h3 class="regular-font-size text-uppercase mb-3">Conferência começa em</h3>
            <div id="date-countdown" class="mb-4"></div>-->
            <p>
              PHPeste é uma conferência de PHP organizada pelas comunidades “cabra da peste” do nordeste brasileiro.
              O evento já passou por João Pessoa (PB), Salvador (BA), Fortaleza(CE), São Luis(MA) e agora é a vez de
              Recife(PE) sediar um dos maiores eventos de PHP do Brasil. Serão dois dias de muito aprendizado,
              muita mão na massa e, principalmente, de gente “arretada da peste” que irá ampliar ainda mais seu
              networking. O evento contará com a participação de palestrantes de altíssimo nível, minicursos práticos,
              e conversas focadas na temática do evento: crescimento e colaboração.
            </p>
            <p class="mb-5">
              O PHPeste visa reunir os desenvolvedores, estudantes, entusiastas, e amantes da linguagem de programação
              PHP, não só do Brasil, mas do mundo. Com um papel fundamental na disseminação, evangelização,
              profissionalização, e claro, a inclusão de novos desenvolvedores, tornando assim o mercado cada vez mais
              especializado.
            </p>
            <a href="http://bit.ly/2GIYBdJ" target="_blank" class="btn btn-primary px-4 py-2">Saiba mais em nossa apresentação</a>
          </div>
        </div>
      </div>
    </div>
