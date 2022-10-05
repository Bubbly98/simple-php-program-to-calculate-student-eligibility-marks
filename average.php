<!DOCTYPE html>
<html>
<body>
    <h1 style="color:blue;">simple PHP program to get five numbers from the user</h1>
    <h2 style="color:green;"> & Print It's Average </h2>



  <form action="average.php" method="GET">

    <table>
        <tr>
            <td>Input Your First Number</td><td>  <input type="text" name="first"> </td>
        </tr>

        <tr>
            <td>Input Your Second Number</td>   <td>  <input type="text" name="second"> </td>
        </tr>

        <tr>
            <td>Input Your Third Number</td> <td>  <input type="text" name="third"></td>
        </tr>

        <tr>
            <td>Input Your Fourtht Number</td><td>  <input type="text" name="fourth"></td>
         </tr>

         <tr>
            <td>Input Your Fifth Number</td><td>  <input type="text" name="fifth">  </td> 
        </tr>

         

    </table>
         <br>
        <button style="color:blue;" type="submit" name="get_val" value="get_val">Submit</button>

    </form>

    <?php

    //creating the Average function

    function Average()
{

if (isset($_GET["get_val"]))
{   
    $first=$_GET['first'];
    $second=$_GET['second'];
    $third=$_GET['third'];
    $fourth=$_GET['fourth'];
    $fifth=$_GET['fifth'];


    $sum = $first+$second+$third+$fourth+$fifth;
    $Average= $sum/5;
    echo "<br/>";
    echo "<br/>";

    echo "Your Average is: " .$Average;
    echo "<br/>";
}

            }

            //calling the Average funtion
            Average(); 
    ?>



</body>
</html>