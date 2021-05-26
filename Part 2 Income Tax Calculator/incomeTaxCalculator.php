<!DOCTYPE html>
<?php
$freeAllowance = $_POST['freeAllowance'];
$monthlySalary;
$monthlyTaxamount;

function calculateTaxAmountMonthly($calculateTaxAmountMonthly)
{

    $monthlySalary = $calculateTaxAmountMonthly;

    if ($monthlySalary < 10000) {
        $monthlyTaxamount = 0;
    } elseif ($monthlySalary > 10000 && $monthlySalary < 25000) {

        $monthlyTaxamount = $monthlySalary * 0.11;
    } elseif ($monthlySalary > 25000 && $monthlySalary < 50000) {

        $monthlyTaxamount = $monthlySalary * 0.3;
    } else {

        $monthlyTaxamount = $monthlySalary * 0.45;
    }
    return $monthlyTaxamount;
}



function calculateSocialSecurityFeeMonthly($calculateSocialSecurityFeeMonthly)
{
    $monthlySalary = $calculateSocialSecurityFeeMonthly;

    if ($monthlySalary > 10000) {
        $SocialSecurityFeeMonthly = $monthlySalary * 0.04;
    } else {
        $SocialSecurityFeeMonthly = 0;
    }
    return $SocialSecurityFeeMonthly;
}

if ($_POST['complete'] == 'true') {
    $salary = $_POST['salary'];
    $monthly = $salary;
    $TaxamountMonthly = calculateTaxAmountMonthly($salary);
    $SocialFeeMonthly = calculateSocialSecurityFeeMonthly($salary);
    $SalaryAfterTaxMonthly = $salary - ($TaxamountMonthly + $SocialFeeMonthly) + $freeAllowance;
}



if ($_POST['complete'] == 'false') {
    $salary = $_POST['salary'];
    $YearlySalary = $salary * 12;
    $TaxamountYearly = calculateTaxAmountMonthly($salary) * 12;
    $SocialFeeYearly = calculateSocialSecurityFeeMonthly($salary) * 12;
    $SalaryAfterTaxYearly = $salary * 12 - ($SocialFeeYearly + $TaxamountYearly) + $freeAllowance * 12;
}

print_r($_POST);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="incomeTaxCalculator.css">
    <title>Document</title>
</head>

<body>


    <h1>Income Tax Calculator</h1>
    <form method="POST" action="incomeTaxCalculator.php">
        <h4>Input your Monthly Salary in USD</h4>
        <input class="inputLine" type="number" name="salary"><br>

        <h4>Tax Free Allowance in USD</h4>
        <input class="inputLine" type="number" name="freeAllowance"><br>

        <label for="complete_yes">Montly</label>
        <input type="radio" name="complete" value="true" id="complete_yes" checked /><br>

        <label for="complete_no">Yearly</label>
        <input type="radio" name="complete" value="false" id="complete_no" /><br><br>

        <input type="submit" value="Submit"><br><br>

        <table>
            <tr>
                <th>&nbsp;</th>
                <th>RESULT Montly</th>
                <th>RESULT Yearly</th>

            </tr>
            <tr>
                <td>Total salary</td>
                <td> <?php echo $monthly ?> </td>
                <td> <?php echo $YearlySalary ?> </td>
            <tr>
                <td>Tax amount</td>
                <td><?php echo $TaxamountMonthly; ?></td>
                <td><?php echo $TaxamountYearly; ?> </td>
            </tr>
            </tr>
            <tr>
                <td>Social security fee</td>
                <td><?php echo $SocialFeeMonthly ?></td>
                <td> <?php echo $SocialFeeYearly ?> </td>
            <tr>
                <td>Salary after tax</td>
                <td><?php echo $SalaryAfterTaxMonthly; ?></td>
                <td><?php echo $SalaryAfterTaxYearly; ?></td>
            </tr>
            </tr>
        </table>
    </form>

</body>


</html>