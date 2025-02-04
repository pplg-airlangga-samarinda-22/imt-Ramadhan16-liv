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
            <input type="number" step="any" name="Tbadan" placeholder="Masukan Tinggi Badan" required>
            <button type="submit" name="bmi" value="submit">Hitung</button> <br>
        </form>
    </div>   

    <?php
    if (isset($_POST['bmi'])) {
        $Bbadan = $_POST['Bbadan'];
        $Tbadan = $_POST['Tbadan'];
        $bmi = $Bbadan / ($Tbadan * $Tbadan);

        if ($Bbadan = !0 && $Tbadan = !0 ) 
        

        if ($bmi < 17.0) {
            print ("Kurus, kekurangan berat badan berat");
        } elseif ($bmi < 18.4) {
            print ("Kurus, kekurangan berat badan ringan");
        } elseif ($bmi < 25.0) {
            print ("Normal");
        } elseif ($bmi < 27.0) {
            print ("Gemuk, Kelebihan berat badan tingkat ringan");
        } else {
            print ("Gemuk, Kelebihan berat badan tingkat berat");
        } 
        echo "bmi: $bmi";
        }

    
    ?>

</body>
</html>