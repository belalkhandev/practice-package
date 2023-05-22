<?php

Route::get('calculator', function () {
    return "Hello from calculator package";
});

Route::get('calculator/add/{a}/{b}', [\Becodezen\Calculator\CalculatorController::class, 'add']);
