<!DOCTYPE HTML>
<html>
<head>
<!--
 _____   _____        _____   _____  
/  ___| |  _  \      /  ___| |  _  \ 
| |___  | |_| |      | |___  | |_| | 
|  _  \ |  ___/      |  _  \ |  ___/ 
| |_| | | |          | |_| | | |     
\_____/ |_|          \_____/ |_|     

-->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Algar - Dia das Mães</title>
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="media/css/b.css"/>
    <link rel="stylesheet" href="media/css/bt.css"/>
    <link rel="stylesheet" href="media/css/normalize.css"/>
    <link rel="stylesheet" href="media/css/common.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link  href="media/js/fancy/dist/jquery.fancybox.min.css" rel="stylesheet">
    
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />    
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="208" />
    <meta property="og:image:height" content="140" />

</head>
<body> 

<ul class="bg">
    <div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-pause-on-hover="true" data-cycle-speed="1000">
        <img src="media/img/bg_1.png">
        <img src="media/img/bg_2.png">
        <img src="media/img/bg_3.png">
    </div>
</ul>

<main class="main">
    <section id="content" class="container">
        <div class="row">
            <div class="col-md-offset-2 col-lg-offet-2 col-md-10" style="height: 50px; background: black;">

            </div>
        </div>

        <header class="row">
            <div class="col-md-5 col-md-offset-2">
                <img src="media/img/logo_algar.png" class="img-responsive center-block">
                <p class="text-center text-capitalize" style="margin-top: -25px;">Apresenta:</p>
            </div>
            <div class="col-md-5">
                <img src="media/img/logo_campanha_algar_dia_dos_pais.png" class="img-responsive">
            </div>
        </header>
        <div class="row">
            <div class="col-md-5 col-md-offset-2 info">
                <h2>Conte pra gente, qual é o <span class="yellow">megasonho</span> do seu pai?</h2>
                <h2 style="font-weight: 300">A algar telecom vai realizar!</h2>

                <p>
                    Envie um <b>vídeo</b>, um <b>áudio</b> (mp3) ou <b>escreva</b> para nós contando qual é o grande sonho do seu pai.
                </p>
                <div style="line-height: 5px">
                    <p class="yellow">
                        Aí é só cruzar os dedos!
                    </p>
                    <p>
                        O resto, deixa com a gente.
                    </p>
                </div>            

            </div>

            <div class="col-md-3 white-bg rounded">
                <div>
                    <p>Preencha todos os campos do formulário abaixo com os seus dados completos.</p>

                    <form method="post" action="send.php" id="formulario" enctype="multipart/form-data">
                        <div>
                            <input type="text" id="nome" name="nome" placeholder="Nome:">
                        </div>

                        <div>
                            <input type="text" name="email" id="email" placeholder="E-mail:" onblur="validacaoEmail(this)">
                        </div>

                        <div>
                            <input type="text" name="cpf" id="cpf" onkeypress="mascaraMutuario(this,cpfCnpj)" onblur="clearTimeout()" placeholder="CPF:" maxlength="14">
                        </div>
                        
                        <div>
                            <textarea name="mensagem" id="mensagem" placeholder="Conte aqui o sonho da sua mãe:" rows="9"></textarea><br>
                            <p id="limite">Você pode escrever <span>500</span> caracteres</p>
                        </div>

                        <div>
                            <input type="checkbox" name="regulamento" id="regulamento"><label for="regulamento" id="labelReg">Li e aceito os termos do <a data-fancybox data-src="#hidden-content" href="javascript:;">regulamento</a>.</label>
                        </div>

                        <div>
                            <input type="hidden" name="MAX_FILE_SIZE" value="17825792" />
                            <label for="arquivo" id="nomeArquivo" class="pull-left">Anexar</label>
                            <!--<input type="file" id="arquivo" name="arquivo" placeholder="Anexar" accept="audio/mpeg,video/mpeg">-->
                            <input type="file" id="arquivo" name="arquivo" placeholder="Anexar">
                            <img src="media/img/icon-audio.png" alt="Ícone de áudio" class="pull-left">
                            <img src="media/img/icon-video.png" alt="Ícone de vídeo" class="pull-left">
                            <img src="media/img/icon-texto.png" alt="Ícone de texto" class="pull-left">
                        </div>

                        <div>
                            <button type="submit" class="btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-lg-offet-2 col-md-10" style="height: 150px; background: black;">

            </div>
        </div>

    </section>

</main>

<div style="display: none; position: relative; z-index: 9999999999;" id="hidden-content">
    <h2>Regulamento Concurso Cultural</h2>
    <p>1 - Este é um Concurso Cultural é promovido pela pessoa jurídica denominada Algar Telecom S/A, CNPJ nº. 71.208.516/0001-74 e é realizada conforme regulamento abaixo:</p>
    <br>
<p><strong>2- DA PARTICIPAÇÃO</strong></p>
<p>1 Lei nº 5.768 de 20 de Dezembro de 1971: Abre a legislação sobre distribuição gratuita de prêmios, mediante sorteio, vale-brinde ou Concurso, a título de propaganda, estabelece normas de proteção à poupança popular, e dá outras providências.<br>
Art 3º Independe de autorização, não se lhes aplicando o disposto nos artigos anteriores:<br>
II - a distribuição gratuita de prêmios em razão do resultado de Concurso exclusivamente cultural artístico, desportivo ou recreativo, não subordinado a qualquer modalidade de álea ou pagamento pelos concorrentes, nem vinculação destes ou dos contemplados à aquisição ou uso de qualquer bem, direito ou serviço.<br>
2 Decreto nº 70.951 de 09 de Agosto de 1972: Regulamenta a Lei nº 5.768, de 20 de dezembro de 1971, que dispõe sobre a distribuição gratuita de prêmios, mediante sorteio, vale-brinde ou Concurso, a título de propaganda, e estabelece normas de proteção à poupança popular.<br>
Art 30. Independe de autorização a distribuição gratuita de prêmios em razão do resultado de Concurso exclusivamente cultural, artístico, desportivo ou recreativo, desde que não haja subordinação a qualquer modalidade de álea ou pagamento pelos concorrentes, nem vinculação destes ou dos contemplados à aquisição ou uso de qualquer bem, direito ou serviço.</p>

<p>2.1 - Podem participar desta promoção que tem caráter exclusivamente cultural, sem qualquer modalidade de sorte ou pagamento pelos participantes, todas as pessoas físicas, residentes em território nacional, exceto funcionários da empresa promotora e suas agências ou fornecedores diretamente envolvidos na promoção.</p>

<p>2.2 - Para participar deste concurso, que tem caráter exclusivamente cultural, não é necessária a compra ou uso de qualquer bem, direito ou serviço da promotora. E a apuração dos vencedores não está sujeita a qualquer tipo de sorteio ou operação assemelhada, estando de acordo com o artigo 30 do Decreto 70.951/72.</p>

<p>2.3 – As pessoas que desejarem participar estarão sujeitos às regras e procedimentos descritos a seguir:

a.  Deverão acessar o site www.sonhodemae.com.br, realizar a inscrição com seus dados pessoais, nome, e-mail e CPF .<br>
b.  Os Participantes poderão se inscrever 01 (uma) única vez, com um único vídeo, ou aúdio ou texto, observadas as regras estabelecidas neste Regulamento e respeitando o limite máximo de duração de 01 (um) minuto e 15 megas para áudio (MP3) e vídeo (MP4) e texto de 500 caracteres. Com o seguinte tema: Qual é o sonho da sua mãe?<br>
c.  A inscrição não preenchida de forma completa ou de desacordo com o tema   será desclassificada. <br>
d.  No ato de envio, o Participante deverá ler o Regulamento e aceitar as condições do Concurso, renunciando a qualquer questionamento sobre os critérios de julgamento adotados, declarando e garantindo possuir capacidade jurídica para tanto e afirmando que todas as informações prestadas em razão de sua participação são verdadeiras.</p>


<br>

<p><strong>3. PERÍODO</strong></p>

<p>3.1 - Período de participação inicia-se em 13 de março de 2017 e termina em 31 de março de 2017. </p>

<br>
<p><strong>4. DOS CRITÉRIOS DE JULGAMENTO</strong></p>

<p>4.1 – Os participantes que assim procederem, terão suas participações julgadas por uma comissão julgadora que efetuará o julgamento com base nos seguintes critérios:<br>
- Criatividade<br>
- Originalidade<br>
- Emoção<br>
- Fator inédito<br>
- Adequação ao Tema.</p>

<p>4.2 - Data de avaliação e julgamento: 01 de abril a 06 de abril.</p>

<p>4.3 – Todas as participações serão avaliadas segundo os critérios aqui estabelecidos e os participantes renunciam expressamente, ao aceitar as regras deste concurso pela sua participação, a qualquer questionamento sobre os critérios adotados, prevalecendo sempre o critério da comissão julgadora. As decisões da comissão julgadora serão soberanas e irrecorríveis.
Serão desclassificados pelo mediador deste Concurso, a seu exclusivo critério, as participações  que, por exemplo, contiverem referências à pedofilia, violência, palavras de baixo calão ou quaisquer referências contrárias ao estabelecido em lei.</p>
<p>Da mesma forma, serão automaticamente desclassificados participações que, por exemplo, fizerem referências desonrosas a pessoas, locais, obras culturais ou quaisquer outras protegidas por direitos autorais. Ainda, participações que demonstrar qualquer tipo de discriminação por conta de crença, raça, cor, sexo, nacionalidade ou origem étnica, será imediatamente excluído deste Concurso.
As participações que envolverem nomes ou citações de terceiros, que não o autor, pressupõe que este providenciou a devida autorização de uso, não sendo o Realizador responsável por este uso e/ou citação.
Em momento algum, os organizadores poderão ser responsabilizados por participações atrasadas, enviadas erroneamente, incorretas, inválidas ou imprecisas, sendo tais causas motivo de exclusão do Participante do Concurso. O Realizador não será responsável por problemas, falhas no funcionamento técnico de qualquer tipo, em redes de computadores, servidores ou provedores, equipamentos de computadores, hardware ou software, ou erro, interrupção, defeito, atraso ou falha em operações ou transmissões para o correto processamento das participações, em razão de problemas técnicos, congestionamento na internet ou no site, fanpage do Facebook ligada ao Concurso, vírus, falha de programação (bugs) ou violação por terceiros (hackers).</p>

<p>4.4 – Os participantes, ao fazerem suas inscrições, manifestam sua total concordância com as regras deste concurso e concordam desde já, sob pena de desclassificação, em ceder gratuita, definitiva e irrevogavelmente à promotora, independente de assinarem ou não recibos e cessões para tal efeito, o uso de sua imagem, voz e história. A histórias/sonhos narradas devem ser de autoria exclusiva do participante. As histórias/sonhos poderão ser usadas livremente sem qualquer forma de pagamento ao autor ou responsável e a critério da promotora, desde que identificado o autor, e não serão devolvidas após o término do concurso.</p>

<br>
<p><strong>5.DOS PRÊMIOS</strong></p>

<p>5.1 – Os 03  melhores sonhos selecionados serão premiados  com a realização dos mesmos, de acordo agenda e demais determinações feitas pela realizadora do concurso. </p>
<br>
<p><strong>6. ENTREGA DOS PRÊMIOS</strong></p>

<p>6.1 - Para o recebimento do prêmio, o contemplado e sua mãe deverão se dispor a participar ativamente para realização do sonho neste concurso apresentado, no período pré estipulado para a realização dos sonhos que acontecerão entre os dias: 07/04  a 20/04 deste ano.</p>

<p>6.2 - A promotora do concurso divulgará o nome do vencedor através do Facebook da promotora, e envidará todos os esforços para que o vencedor seja notificado no prazo de 5 dias, via e-mail, mas caso seja impossível localiza-lo ou estes esforços se mostrarem infrutíferos neste período, o participante será desclassificado e substituído por aquele colocado logo em seguida e assim sucessivamente.   </p>  

<p>6.3 – No caso de desclassificação e/ou fraude comprovada o participante, se ganhador, será excluído automaticamente do concurso e será substituído pelo participante colocado a seguir.</p>

<br>

<p><strong>CONSIDERAÇÕES GERAIS</strong></p>

<p>Este Concurso tem cunho exclusivamente cultural e recreativo, a participação nele não está subordinada a qualquer modalidade de álea ou pagamento pelos concorrentes, nem vinculada à aquisição ou ao uso de qualquer bem, direito ou serviço, de acordo com o disposto no Artigo 3º, Inciso II, da Lei nº 5.768/71, e no Artigo 30 do Decreto nº 70.951/72.</p>

<p>Ao inscrever-se no Concurso, o Participante estará concordando com os termos deste Regulamento e, automaticamente, autorizando o Realizador a utilizar, de modo gratuito, definitivo e irrevogável, o seu vídeo, texto e audio, o seu nome, imagem e som de voz em qualquer veículo de imprensa, mídia ou Internet, para divulgação do Concurso, cedendo também ao Realizador, em caráter definitivo, absoluto, irrevogável e de forma irretratável e gratuita, todos os direitos autorais de natureza patrimonial sobre as fotos e filmagens oriundas da participação e realização do sonho objetivo do presente Concurso Cultural, que passará a ser de propriedade da Realizadora, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado, pelo máximo período permitido em lei – 24 (vinte e quatro) meses –, no Brasil e/ou no exterior.</p>

<p>As autorizações descritas acima não implicam em qualquer obrigação de divulgação ou de pagamento de qualquer quantia por parte do Realizador.</p>
<p>O Participante concorda que seu vídeo, áudio e texto oriundos da participação do Concurso é de propriedade do Realizador, cedendo, assim, para a Algar Telecom os direitos de uso em qualquer plataforma por tempo indeterminado.</p>

<p>O Participante, neste ato, assume plena e exclusiva responsabilidade pelo vídeo, áudio e texto enviado, por sua titularidade e originalidade, incluindo, sem limitação, responsabilidade por eventuais violações à intimidade, privacidade, honra e imagem de qualquer pessoa, a deveres de segredo, à propriedade industrial, direito autoral e/ou a quaisquer outros bens juridicamente protegidos, eximindo os Realizadores de qualquer responsabilidade relativamente a tais fatos, aspectos, direitos e/ou situações.</p>
<p>O Participante reconhece e aceita expressamente que o Realizador não poderá ser responsabilizado por qualquer dano ou prejuízo oriundo da participação neste Concurso ou da eventual aceitação do prêmio.</p>

<p>O presente Regulamento poderá ser alterado e/ou o Concurso suspenso ou cancelado, sem aviso prévio, por motivo de força maior ou por qualquer outro motivo que esteja fora do controle do Realizador e que comprometa a realização do Concurso de forma a impedir ou modificar substancialmente a sua condução como originalmente planejado.</p>

<p>Qualquer dúvida, divergência ou situação não prevista neste Regulamento será julgada e decidida de forma soberana e irrecorrível pela Comissão Julgadora.</p>

<p>A participação nesse Concurso implica na aceitação total e irrestrita de todos os itens deste Regulamento.</p>

<p>Este Regulamento será divulgado no site do Concurso. </p>
<p>Este Concurso foi promovido em observância às determinações legais, não possuindo finalidade comercial, com caráter exclusivamente cultural, de acordo com o artigo 30 do Decreto nº 70.951/72, não estando, destarte, sujeito à autorização prévia, nos termos da Lei n° 5.768/71, Decreto n° 70.951/72 e Portaria nº 41/2008.</p>


</div>

<script type="text/javascript" src="media/js/jq.js"></script>
<script type="text/javascript" src="media/js/app.js"></script>
<script src="media/js/fancy/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript">
function nav(elemento, margem){
    elemento.bind('click', function(t){
        var $anchor = $(this);var calculo = $($anchor.attr('href')).offset().top;
        if(margem){ var goto = calculo-margem; }else{ var goto = calculo; };$('html, body').stop().animate({scrollTop: goto},900,'easeInOutExpo');
        t.preventDefault();
    });
}

function mascaraMutuario(o,f){
    v_obj = o;
    v_fun = f;
    setTimeout('execmascara()', 1);
}
 
function execmascara(){
    v_obj.value = v_fun(v_obj.value);
}
 
function cpfCnpj(v){ 
    v = v.replace(/\D/g,"");
 
    if (v.length <= 14) {
        v = v.replace(/(\d{3})(\d)/,"$1.$2");
        v = v.replace(/(\d{3})(\d)/,"$1.$2");
        v = v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
    }
    else{
        v = v.replace(/^(\d{2})(\d)/,"$1.$2");
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3");
        v = v.replace(/\.(\d{3})(\d)/,".$1/$2");
        v = v.replace(/(\d{4})(\d)/,"$1-$2"); 
    }
 
    return v; 
}

function validacaoEmail(email){
    var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var check=/@[\w\-]+\./;
    var checkend=/\.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){return false;}
    else {return true;}
}

app.init();
var $input    = document.getElementById('arquivo'),
    $fileName = document.getElementById('nomeArquivo');

$input.addEventListener('change', function(){
  nome = this.value.split("\\");  
  ds = nome.slice(-1)[0];
  $fileName.textContent = "Anexado! :)";
});

$(document).ready(function(){

$("#formulario").submit(function(){
    
    if($("#nome").val() == ""){
        alert("Preencha seu nome.");
        $("#nome").focus(); 
        return false;
    }

    if($("#email").val() == ""){
        alert("Preencha seu e-mail.");
        $("#email").focus(); 
        return false;
    }

    if($("#cpf").val() == ""){
        alert("Preencha seu CPF.");
        $("#cpf").focus(); 
        return false;
    }
    
    /*if($("#arquivo").val() == ""){
        alert("Selecione um arquivo de vídeo ou de áudio.");
        $("#nomeArquivo").focus(); 
        return false;
    }*/

    if($("#regulamento").is(':checked')){ }
    else{
        alert("Você precisa ler e aceitar os termos do regulamento."); 
        return false; 
    }

    if($("#mensagem").val() == ""){
        alert("Preencha sua mensagem.");
        $("#mensagem").focus(); 
        return false;
    }

    if($("#arquivo").val() != ""){
    var tamanhoArquivo = parseInt(document.getElementById("arquivo").files[0].size);
    if(tamanhoArquivo > 17825792){
        alert("O arquivo selecionado ultrapassa o limite de 15MB. Por favor, selecione um arquivo de até 15MB.");
        return false;
    }
    }
    
    k = $("#email").val();
    f = validacaoEmail(k);
    if(f == false){
        alert("E-mail invalido. Verifique se digitou corretamente.");
        $("#email").focus(); 
        return false;
       // break;
    }

    /**/

    var Soma;
    var Resto;
    Soma = 0;
    cpfD = $("#cpf").val();
    strCPF = cpfD.replace(/[^\d]+/g,'');
   
    if(strCPF == "00000000000"){ 
        alert("CPF inválido! Verifique se digitou corretamente.");  $("#cpf").focus(); 
        return false;
    }
    
    for(i = 1; i <= 9; i++){ 
        Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i); 
    }
    Resto = (Soma * 10) % 11;
    
    if ((Resto == 10) || (Resto == 11)){ 
        Resto = 0; 
    }
    if (Resto != parseInt(strCPF.substring(9, 10))){ 
        alert("CPF inválido! Verifique se digitou corretamente.");  $("#cpf").focus(); 
        return false;
    }
    
    Soma = 0;
    for(i = 1; i <= 10; i++) {
        Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    }
    Resto = (Soma * 10) % 11;
    
    if((Resto == 10) || (Resto == 11)){ 
        Resto = 0; 
    }
    if(Resto != parseInt(strCPF.substring(10, 11))){ 
        alert("CPF inválido! Verifique se digitou corretamente."); $("#cpf").focus(); 
        return false;
    }

    return true;

});


});
$(document).on("input", "#mensagem", function () {
    var limite = 500;
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite - caracteresDigitados;

    if (caracteresRestantes <= 0) {
        var comentario = $("#mensagem").val();
        $("#mensagem").val(comentario.substr(0, limite));
        $("#limite span").text("0 ");
    } else {
        $("#limite span").text(caracteresRestantes);
    }
});

</script>
</body>
</html>