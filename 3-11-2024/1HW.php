    <?php
        $name = $_SERVER['PHP_SELF'];
        echo($name . "<br><br>");

        $heredocVar = <<<HERE
            Тут может быть любой текст<br>
            Его может быть много<br><br>
        HERE;

        echo ($heredocVar) . PHP_EOL;

        $a='Рыба';
        $b='человек';

        echo "$a рыбою сыта, а $b человеком";
    ?>