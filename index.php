<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator IMT</title>
</head>
<body>
    <div class="container">
        <h2>Kalkulator BMI</h2>
        <form method="post" action="">
            <input type="number" step="any" name="Bbadan" placeholder="Masukan Berat Badan" required>
            <input type="number" step="any" name="Tbadan" placeholder="Masukan Tinggi Badan (meter)" required>
            <button type="submit" name="submit" value="submit">Hitung</button> <br>
        </form>
    </div>   

    <?php
    if (isset($_POST['submit'])) {
        $Bbadan = $_POST['Bbadan'];
        $Tbadan = $_POST['Tbadan'];
        $bmi = 0; 

        if ($Bbadan != 0 && $Tbadan != 0) {
            $bmi = $Bbadan / ($Tbadan * $Tbadan);
            echo "<h2>Berat badan: $Bbadan kg, Tinggi badan: $Tbadan m, BMI: $bmi</h2>"; 

            if ($bmi < 17.0) {
                print ("Kurus, kekurangan berat badan berat");
            } elseif ($bmi < 18.4) {
                print ("Kurus, kekurangan berat badan ringan");
            } elseif ($bmi < 25.0) {
                print ("Normal");
            } elseif ($bmi < 27.0) {
                print ("Gemuk, kelebihan berat badan tingkat ringan");
            } else {
                print ("Gemuk, kelebihan berat badan tingkat berat");
            } 
        } else {
            echo "<h2>Berat dan tinggi badan harus lebih dari nol!</h2>";
        }
    }
    ?>

</body>
</html>
