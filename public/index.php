<?php

require_once('../private/initialize.php');

$comments = comments();
$candy[] = array();
$call[] = array();
$referred[] = array();
$signature[] = array();
$misc[] = array();

foreach ($comments as $c){
    if (str_contains(implode($c), 'candy')){
        array_push($candy, $c);
    }elseif (str_contains(implode($c), 'call me')){
        array_push($call, $c);
    }elseif (str_contains(implode($c), 'referred')){
        array_push($referred, $c);
    }elseif (str_contains(implode($c), 'signature')){
        array_push($signature, $c);
    }else {
        array_push($misc, $c);
    }
} 

?>

<!DOCTYPE html>

<html lang="en">
    <?php  print_r($candy);
    print_r($call);
    print_r($referred);
    print_r($signature);
    print_r($misc); ?>
    <head>
        <meta charset="utf-8">
        <title>Sweetwater Code Test</title>
    </head>
    <style>
        table, th, td{
            border: 1px solid black;
        }
        </style>
    <body>
 
       <table>
        <tbody>
            <tr>
                <th>Comments About Candy</th>
            </tr>
            <?php foreach($candy as $c): ?> 
            <tr>
                <td><?php echo implode($c); ?> </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>

        <table>
        <tbody>
            <tr>
                <th>Comments About Who Referred Me</th>
            </tr>
            <?php foreach($call as $c): ?> 
            <tr>
                <td><?php echo implode($c); ?> </td>
            </tr>
            </tbody>
            <?php endforeach; ?>

            <table>
        <tbody>
            <tr>
                <th>Comments About Call Me/Don't Call Me</th>
            </tr>
            <?php foreach($call as $c): ?> 
            <tr>
                <td><?php echo implode($c); ?> </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </body>
</html>