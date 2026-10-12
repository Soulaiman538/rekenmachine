
<?php

// Functie om een getal in te voeren
function getNumber($message) {
    return (float) readline($message);
}

// Functie om een operator te kiezen
function getOperation() {
    return readline("Enter operation (+, -, *, /): ");
}

// Functie om de berekening uit te voeren
function calculate($num1, $num2, $operation) {
    if ($operation == "+") {
        return $num1 + $num2;
    } elseif ($operation == "-") {
        return $num1 - $num2;
    } elseif ($operation == "*") {
        return $num1 * $num2;
    } elseif ($operation == "/") {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: Division by zero!";
        }
    } else {
        return "Invalid operation!";
    }
}

// Loop zorgt dat de calculator opnieuw begint
while (true) {
    echo "\nSimple Calculator\n";

    $num1 = getNumber("Enter first number: ");

    $operation = getOperation();

    $num2 = getNumber("Enter second number: ");

    $result = calculate($num1, $num2, $operation);

    echo "Result: $result\n";

    // Vraag of gebruiker opnieuw wil rekenen
    $again = readline("Calculate again? (yes/no): ");

    if (strtolower($again) != "yes") {
        echo "Goodbye!\n";
        break;
    }
}

?>
