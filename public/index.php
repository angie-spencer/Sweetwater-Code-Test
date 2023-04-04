<?php

require_once('../private/initialize.php');

$comments = comments();
$candy[] = array();
$call[] = array();
$referred[] = array();
$signature[] = array();
$misc[] = array();

foreach ($comments as $c){
    if (str_contains(strtolower(implode($c)), 'candy')){
        array_push($candy, $c);
    }elseif (str_contains(strtolower(implode($c)), 'call me')){
        array_push($call, $c);
    }elseif (str_contains(strtolower(implode($c)), 'referred')){
        array_push($referred, $c);
    }elseif (str_contains(strtolower(implode($c)), 'signature')){
        array_push($signature, $c);
    }else {
        array_push($misc, $c);
    }
} 

?>

<!DOCTYPE html>

<html lang="en">
    
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
                <th>Comments About Call Me/Don't Call Me</th>
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
                <th>Comments About Who Referred Me</th>
            </tr>
            <?php foreach($referred as $r): ?> 
            <tr>
                <td><?php echo implode($r); ?> </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>

        <table>
            <tbody>
            <tr>
                <th>Comments About Signature Requirements Upon Delivery</th>
            </tr>
            <?php foreach($signature as $s): ?> 
            <tr>
                <td><?php echo implode($s); ?> </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>

        <table>
            <tbody>
            <tr>
                <th>Miscellaneous Comments</th>
            </tr>
            <?php foreach($misc as $m): ?> 
            <tr>
                <td><?php echo implode($m); ?> </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </body>
</html>