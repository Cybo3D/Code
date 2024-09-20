<?php
echo "Iterations: ";
$iterations = readline();

if(!is_numeric($iterations)){
    echo "Pls only enter numbers!!!";
    return;
}

$output = 0;
for($x = 0; $x < $iterations; $x++){
    echo "Price $x: $";
    $price = readline();
    if(is_numeric($price)){
        $output += $price;
    }else{
        echo "Pls only enter numbers!!!";
        return;
    }
}
echo "Total is: $" . $output . "\n";
Pay($output);
function Pay($required){
    echo "How much do you pay: ";
    $payment = readline();

    if(!is_numeric($payment)){
        echo "Pls only enter numbers!!!";
        return;
    }
    if($payment == $required) echo "Thank you for doing bussines :3";
    else if($payment > $required){
        $Change = $payment - $required;
        echo "You get $ $Change change Have a nice day";
    }else if($payment < $required){
        $short = $required - $payment;
        echo "You need to pay: $short more! \n";
        Pay($short);
    }
}

?>