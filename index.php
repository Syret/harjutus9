<!DOCTYPE HTML!>
<html>
<head>
	<title>IX harjutus</title>
	<meta charset="UTF-8">
    <style>
        .container{
            max-width: 200px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid red;
        }
        .container p{
            font-weight: bold;
            color: blue;
        }
    </style>
</head>
<body>
    <h2>Funktsiooni defineerimine</h2>
        <h3>Argumendita funktsioon</h3>
        <?php
       function say_hello() {
      echo 'Minu esimene funktsioon!<br>';
}
    say_hello();
        ?>
        <h3>Argumendiga funktsioon</h3>
        <div class="container">
        <?php
            function say_hello_to($person) {
                echo "<p>Tere {$person}!</p><br>";
            }
            say_hello_to('Syret');
            say_hello();
            say_hello_to('Fränk');
        ?>
        </div>
        <h3>Väärtuse tagastamine</h3>
            <?php
                function add($number1, $number2){
                   $sum = $number1 + $number2;
                    return $sum; 

                }
                $result = add(3, 4);
                echo $result + 10;
            ?>
        <h3>Mitme väärtuse tagastamine</h3>    
          <ul>  <?php
    function calculate($nr1, $nr2) {
        $plus = $nr1 + $nr2;
        $minus = $nr1 - $nr2;

        return array($plus, $minus);
    }
        $result = calculate(10, 5);
        echo "<li>{$result[0]}</li>";
        echo "<li>{$result[1]}</li>";
?></ul>
        
</body>
</html>