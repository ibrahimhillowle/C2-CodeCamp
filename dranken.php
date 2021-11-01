<!DOCTYPE html>
<html>
<head>
<?php require_once 'head.php'; ?>
    <title>Warme Dranken</title>
</head>
<style>
h1 {text-align: center;}
p {text-align: center;}
.Img{
	text-align:center;
}
</style>
<body class="purple">
<?php require_once 'header.php'; ?>


<div class="container">

    <h1 class="wit">Dranken</h1>
    <div class="WarmeDranken">
        <div class="WarmeDranken-1">
            <h1><a href="Warmedrank.php">
             WarmeDranken</a>
            </h1>
            <div class="img-container">
            <a href="Warmedrank.php"><img src="img/koffie.jpg" alt="Koffie"></a>
            </div>
            <p>Pagina vol Warme dranken</p>
        </div>
        <div class="WarmeDranken-2">
            <h1><a href="frisdrank.php">
              Frisdrank</a>
            </h1>
            <div class="img-container"><a href="frisdrank.php">
            <img src="img/7Up.png" alt="7Up"></a>
            </div>
            <p>Pagina vol Frisdrank</p>
        </div>

    </div>
</div>

<footer>
    <?php require_once 'footer.php'; ?>
</footer>
</body>
</html>