<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passengers Info</title>
    <link rel="stylesheet" href="sign-up.css">

</head>

<body>

    <h1>
        <u>Passenger Information</u>
    </h1>
    <img class="bg1" src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="bus">
    <div class="container_pssngr_1">
        <!-- <form action="payment page.php" method="post" onsubmit=" return validate()"> -->
            <?php
            session_start();
            $a = $_SESSION['frm'];
            $b = $_SESSION['to'];
            $c = $_SESSION['dt'];
            $h = $_POST['radio_name'];
            $e = $_POST['fair_name'];
            print("From: " . $a);
            print("<br>");
            print("<br>");
            print("<br>");
            print("To: " . $b);
            print("<br>");
            print("<br>");
            print("<br>");
            print("Date: " . $c);
            print("<br>");
            print("<br>");
            print("<br>");
            print("Bus Name: " . $h);
            print("<br>");
            print("<br>");
            print("<br>");
            print("Bus Fare: " . $e);
            print("<br>");
            print("<br>");
            
            $_SESSION["fph"] = $_POST['fair_name'];
            $_SESSION["bsnm"] = $_POST['radio_name'];
            ?>
    </div>
    <form action="payment page.php" method="post" onsubmit=" return validate()">
    <script language="javascript">
        var d, count = 1;
        
        function addrw() {
            d = document.getElementById("num_id").value
            var mytab = document.getElementById("t1");
            var v;
            if (count <= d) {
                v = 1;
                while (count <= d) {
                    var r1 = mytab.insertRow();
                    var c1 = r1.insertCell();
                    var c2 = r1.insertCell();
                    var c3 = r1.insertCell();
                    var c4 = r1.insertCell();

                    c1.innerHTML = v;
                    c2.innerHTML = "<input type='text' name='col2_"+v+"' required>";
                    c3.innerHTML = "<input type='text' name='col3_"+v+"' id='col3" + v + "' required>";
                    c4.innerHTML = "<input type='text' name='col4_"+v+"' required>";
                    count++;
                    v++;
                }
            } else {
                alert("No number has been entered");
            }
            return false;

        }

        function delrw() {
            var c = document.getElementById("num_id").value;
            document.getElementById("t1").deleteRow(c);
            c = c - 1;
            document.getElementById("num_id").value = c;
        }

        function validate() {
            var i, s;
            for (i = 1; i <= d; i++) {
                s = document.getElementById("col3" + i).value;
                if (isNaN(s)) {
                    alert("Please enter a valid number");
                    return false;
                }
            }
            return true;



        }
    </script>

    <div class="container_pssngr_2">

        Number of passengers: <input type="number" id="num_id" name="num_name" required><br><br>
        <input type="button" value="GET ROWS" id="gtrws_id" onclick="addrw()">
        <br><br>
        <table id="t1">
            <tr>
                <center>
                    <td>SL No.</td>
                </center>
                <center>
                    <td>Passenger name</td>
                </center>
                <center>
                    <td>Contact number</td>
                </center>
                <center>
                    <td>Age</td>
                </center>
            </tr>
        </table>
        <br><br>
        <input type="button" value="DELETE ROW" id="delrw_id" onclick="delrw()">

        <br><br>
        <br>
        <input type="submit" class="btn_pssngr" value="Go to payment details">
        </form>
    </div>

</body>

</html>
