<?php

$total = -1;

$q1 = $_POST["p1"];
$q2 = $_POST["p2"];
$q3 = $_POST["p3"];


$shipping = $_POST["shipping"];

if($shipping == "Free 7 day")
{
        $costOfShipping=0.00;
}
else if($shipping == "$5.00 three day")
{
        $costOfShipping=5.00;
}
else if($shipping == "$50.00 over night")
{
        $costOfShipping=50.00;
}

$p1 = $q1 * 123.18 * 100;
$p2 = $q2 * 6.85 * 100;
$p3 = $q3 * 0.18 * 100;

$total = $p1 + $p2 + $p3 + $costOfShipping;

if($total > 0)
{

    echo "Welcome " . $_POST["email"] . "!<br> You logged in with password: " . $_POST["pw"] . "<br><br>";
    echo "Your order has been placed. <br> Thank you for choosing Digital Broker!";


    echo "<h1>Receipt</h1>";

    echo "<table>
            <tr>
                <th>Contracts</th>
                <th>Premium (cost)</th>
                <th>Sub Total</th>
            <tr>
                <td>TSLA ($405) Put 10/12 Exp:</td>
                <td class = \"ITMP\">{$q1}</td>
                <td class = \"ITMP\">$123.18</td>
                <td class = \"ITMP\">";

    echo '$';
    echo "{$p1}</td>
            <tr>
                <td>TSLA ($275) Put 10/12 Exp:</td>
                <td class = \"ATMP\">{$q2}</td>
                <td class = \"ATMP\">$6.86</td>
                <td class = \"ATMP\">";
                
    echo '$';
    echo "{$p2}</td>
            <tr>
                <td>TSLA ($190) Put 10/12 Exp:</td>
                <td class = \"OTMP\">{$q3}</td>
                <td class = \"OTMP\">$0.18</td>
                <td class = \"OTMP\">";
            
    echo '$';
    echo "{$p3}</td>
            <tr>
                <td>Shipping</td>
                <td class = \"shipping\" colspan=\"2\">{$shipping}</td>
                <td class = \"shipping\">";

    echo '$';
    echo "{$costOfShipping}</td>
            <tr>
                <td colspan=\"3\" class = \"total\">Total Cost</td>
                <td class = \"total\">";

    echo '$';
    echo "{$total}</td>
        </table><br>";

}
else
{
    echo "Nothing has been ordered yet!";
}








?>
