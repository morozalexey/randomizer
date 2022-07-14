<?php
/** @var yii\web\View $this */

$this->title = 'Randomizer';
?>

<?php if (isset($rnd)) : ?>
   <p>Получилось <?= $rnd ?></p><br>;
    <a href="/index.php" class="btn btn-success">На главную</a>  
<?php else : ?>
    <a href="/index.php?r=site%2Fgenerate" class="btn btn-success">Сгенерирую случайное число</a>
<?php endif ; ?>