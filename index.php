<?php
session_start();
require'connection.php';
$s=mysqli_query($con,"select * from climate;");

?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="container">
            <a id="sss" href="#">Weather Web</a>
            <nav>
                <a href="https://www.google.com">Home</a>

                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>

        </div>

    </header>
    <main>
        <section class="banner-container">
            <div class="container">
                <div class="left-section">
                    <h1>WELCOME T0 WEATHER WEB</h1>
                    <p>KNOW THE TEMPERATURE AND HUMIDITY AROUND YOU</p>
                </div>
               
                    </div>
                  

                </div>
            </div>

        </section>

        <section class="section-two ">
            <div class="card-container">
                <div class="image-container">
                    <img src="./images/humidity.jpg" alt="">
                </div>
                <h1>HUMIDITY</h1>
            </div>
            <div class="card-container">
                <div class="image-container">
                    <img src="./images/temperature.jpg" alt="">
                </div>
                <h1>TEMPERATURE</h1>
            </div>
            <div class="card-container">
                <div class="image-container">
                    <img src="./images/heat index.jpg" alt="">
                </div>
                <h1>HEAT INDEX</h1>
            </div>
        </section>
         <div class="answer">
         <h1 align="center">Weather Reporting</h1>
<table align="center" border=1>
<tr>
<th>ID</th>
<th>Humidity</th>
<th>Temparature</th>
<th>HEAT INDEX</th>
</tr>

<?php
while($r=mysqli_fetch_assoc($s))
{
?>
<tr>
<td><?php echo $r['ID'];?></td>
<td><?php echo $r['HUMIDITY'];?></td>
<td><?php echo $r['TEMPERATURE'];?></td>
<td><?php echo $r['HEAT_INDEX'];?></td>

</tr>
<?php
}
?>

</table>
         </div>
</body></html>