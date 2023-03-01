<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#word-wrap {
    word-wrap: break-word;
}
</style>


<body>
    
    <?php
    
    // ciklai PHP


        // $text = "labas";

        // for ($i=0; $i < strlen($text); $i++) { 
        //     echo $text[$i] . "<br>";
        // }

        // echo "<hr>";

        // foreach ($arr as $key => $letter) {
        //     echo $letter . "<br>";
        // }
    
    // Ciklai ND 1
        // Naršyklėje nupieškite linija iš 400 “*”. 
        // a. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;

        echo '<p id="word-wrap">';
        
        for ($i=0; $i < 400; $i++) { 
           echo "*";
        }

        echo '</p>';

        // b. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

        echo '<p id="word-wrap">';
        
        for ($i=0; $i < 401; $i++) { 
           echo "*";
           if ($i % 50 == 0 && $i != 400) {
            echo "</p><p>";
           }
        }

        echo '</p>';

    ?>

</body>
</html>