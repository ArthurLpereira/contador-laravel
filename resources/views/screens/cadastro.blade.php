@include ('template.header')
@include ('template.form')
@include ('template.footer')
<script>
    const nome = document.getElementById("txtlogin").value.trim();
    const senha = document.getElementById("txtsenha").value.trim();
    const senhaConfirmacao = document.getElementById("txtsenha_confirmacao").value.trim();
    if (senha !== senhaConfirmacao) {
        alert("A senhas estão diferentes");
        return;
    }
</script>