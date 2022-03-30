<?php
// helloworld.php

class GreetingGenerator {
    public function getGreeting(){
        return "Hello World!";
    }
    public function getDate(){
        return date("d/m/Y - H:i:s");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    <?php
    $gg = new GreetingGenerator();
    print($gg->getGreeting());
    ?>
</h1>
<p>
    <?php
    print($gg->getDate());
    ?>
</p>
<?php
include rekenmachine.php();
?>
</body>
</html>
