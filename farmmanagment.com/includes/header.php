<?php
    if(isset($_SESSION)){
?>

<div id="login-header">
    <ul class="header-list top-left-head">
        <li><img src="images/Logo 4.png"></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="stock.php">Estoque</a></li>
        <li>Reformulador de Ração</li>
    </ul>
    <ul class="header-list top-right-head">
        <li>Suporte</li>
        <li>Contatos</li>
    </ul>
</div>

<?php
} else{
?>

<div id="login-header">
        <ul class="header-list top-left-head">
            <li><img src="images/Logo 4.png"></li>
            <li><h1>Gerenciamento de Fazenda</h1></li>
        </ul>
        <ul class="header-list top-right-head">
            <li>Sobre nós</li>
            <li>Contatos</li>
        </ul>
    </div>

<?php
}
?>