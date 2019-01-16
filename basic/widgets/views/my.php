<style>
    .brd {
        border: 4px darkslategrey; /* Параметры границы */
        background: lightgoldenrodyellow; /* Цвет фона */
        padding: 6px; /* Поля вокруг текста */
        border-radius: 6px; /* закругление */
        margin: 5px; /* рамка вокруг виджета */
        width: 33%; /* ширина виджета */
    }
</style>



<div class="brd">

    <h1><?= $name ?></h1>
    <p><?= $date ?></p>
    <p><?= $description ?></p>

</div>