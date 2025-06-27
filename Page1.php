<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
    <link rel="icon" href="C:\Users\Asus\Downloads\anlogo.jpg" type="image/x-icon">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgb(188, 189, 105);
            height: 100vh;
            margin: 0;
        }
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            }
            .flex-container h1 {
            text-align: center;
            }
            .flex-container form {
           padding-left: 20px ;
            }
 
        .column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
</style>
</head>
<body>
    <h1 style="color: rgb(20, 188, 54);">Hotel Sea</h1>
    <div class="flex-container">
        <div style="background-color:rgb(250, 164, 167); ; height: 350px; width: 350px;">
            <h1>Booking</h1>
            <form id="receptionistForm" action="Bookingprocess.php" method="post">
 
                <b><label for="birthday">Check-in date:</label></b><br>
                <input type="date" id="cdob" name="cdob" style="width: 80%; padding: 3px; margin-bottom: 9px;"><br>

                <b><label for="birthday">Check-out date:</label></b><br>
                <input type="date" id="dob" name="dob" style="width: 80%; padding: 3px; margin-bottom: 9px;"><br>
 
                <b><label for="Room">Number of Room:</label></b><br>
                <select id="room" name="room" style="width: 80%; padding: 3px; margin-bottom: 9px;" >
                    <option value="Select room">Select number of Room</option>
                    <option value="BDT 2,000">1 </option>
                    <option value="BDT 4,000">2 </option>
                    <option value="BDT 6,000">3 </option>
                    <option value="BDT 8,000">4 </option>
                </select><br>

                <input type="submit" value="Confirm" style=" border-radius: 6px; margin-top: 10px; font: bold; font-size: 14px; color: rgb(76, 1, 1);  margin-left: 80px; padding: 4px 30px;" formaction="Booking.php"><br>
            </form>
            <form action="ViewDetails.php" method="get" style="margin:0;">
               <input type="submit" value="Cancel" style=" border-radius: 6px; margin-top: 10px; font: bold; font-size: 14px; color: rgb(3, 1, 76);  margin-left: 83px; padding: 4px 30px;"> 
            </form>
        </div>
    </div>
</body>
</html>
