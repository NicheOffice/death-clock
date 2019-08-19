<?php
require_once("config.php");
$averageLife = "71";
switch (true) {
    case($_POST["q15"] != ''):
        switch ($_POST["q1"]) {
            case 'male':
                $averageLife = $averageLife + 2;
                break;
            case 'female':
                $averageLife = $averageLife + 4;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q3"]) {
            case 'yes':
                $averageLife = $averageLife - 7;
                break;
            case 'no':
                $averageLife = $averageLife + 2;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q4"]) {
            case 'pessimistic':
                $averageLife = $averageLife - 1;
                break;
            case 'optimistic':
                $averageLife = $averageLife + 2;
                break;
            case 'neutral':
                $averageLife = $averageLife + 1;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q5"]) {
            case 'never':
                $averageLife = $averageLife + 2;
                break;
            case '1-month':
                $averageLife = $averageLife - 4;
                break;
            case '4-month':
                $averageLife = $averageLife - 5;
                break;
            case '2-week':
                $averageLife = $averageLife - 6;
                break;
            case 'daily':
                $averageLife = $averageLife - 15;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        /*
         * Calculate Body Mass Index (BMI)
         */
        $bmi = $_POST["q6"] / $_POST["q7"] * $_POST["q7"];

        if ($bmi <= 18.5) {
            $averageLife = $averageLife - 1;
        }

        if ($bmi > 18.5 and $bmi <= 24.9) {
            $averageLife = $averageLife + 2;
        }

        if ($bmi >= 25 and $bmi <= 29.9) {
            $averageLife = $averageLife - 1;
        }

        if ($bmi >= 30) {
            $averageLife = $averageLife - 3;
        }

        switch ($_POST["q8"]) {
            case 'africa':
                $averageLife = $averageLife - 5;
                break;
            case 'antarctica':
                $averageLife = $averageLife - 5;
                break;
            case 'asia':
                $averageLife = $averageLife + 3;
                break;
            case 'north-america':
                $averageLife = $averageLife + 3;
                break;
            case 'south-america':
                $averageLife = $averageLife + 2;
                break;
            case 'europe':
                $averageLife = $averageLife + 3;
                break;
            case 'australia':
                $averageLife = $averageLife + 2;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q9"]) {
            case 'city':
                $averageLife = $averageLife + 1;
                break;
            case 'village':
                $averageLife = $averageLife + 2;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q10"]) {
            case 'yes':
                $averageLife = $averageLife - 3;
                break;
            case 'no':
                $averageLife = $averageLife + 3;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q11"]) {
            case 'unhealthly':
                $averageLife = $averageLife - 3;
                break;
            case 'healthly':
                $averageLife = $averageLife + 3;
                break;
            case 'vegan':
                $averageLife = $averageLife + 4;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q12"]) {
            case 'mentally':
                $averageLife = $averageLife + 3;
                break;
            case 'physically':
                $averageLife = $averageLife - 3;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q13"]) {
            case 'yes':
                $averageLife = $averageLife + 4;
                break;
            case 'no':
                $averageLife = $averageLife - 2;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q14"]) {
            case '4-6':
                $averageLife = $averageLife - 1;
                break;
            case '7-9':
                $averageLife = $averageLife + 1;
                break;
            case '10':
                $averageLife = $averageLife - 1;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        switch ($_POST["q15"]) {
            case 'yes':
                $averageLife = $averageLife;
                break;
            case 'no':
                $averageLife = $averageLife - 3;
                break;
            default:
                $averageLife = $averageLife;
                break;
        }

        $deathYear = $_POST["q2"] + $averageLife;
        $_SESSION["deathYear"] = $deathYear;
        $_SESSION["showResult"] = true;
        $_SESSION["showCountdown"] === true;
        redirect($config["url"]);
        break;
    default:
        session_destroy();
        redirect($config["url"]);
        break;
}