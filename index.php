<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="p23.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                         <ion-icon name="person-outline"></ion-icon>
                         <input type="text" name="txtName" required/>
                         <label for="">Your Name</label>
                    </div>  
                    <div class="inputbox">
                         <ion-icon name="call-outline"></ion-icon>
                         <input type="text" maxlength="10" name="contactnumber1" required/>
                         <label for="">Contact Number</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="call-outline"></ion-icon>
                         <input type="text" maxlength="10"name="contactnumber2" required/>
                         <label for="">Alternative contact number</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="location-outline"></ion-icon>
                         <input type="text" name="txtaddress1" required/>
                         <label for="">Your Address</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="location-outline"></ion-icon>
                         <input type="text" name="txtaddress2" required/>
                         <label for="">Your Alternative Address</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="card-outline"></ion-icon>
                         <input type="text" name="amount" required/>
                         <label for="">Amount</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="shield-checkmark-outline"></ion-icon>
                         <input type="text" name="otnumber" required/>
                         <label for="">Transaction Number</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="bag-outline"></ion-icon>
                         <input type="text" name="physicalitem" required/>
                         <label for="">physical item kept</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="id-card-outline"></ion-icon>
                         <input type="text" name="poi" required/>
                         <label for="">proof of identification</label>
                    </div>
                    <div class="inputbox">
                         <ion-icon name="id-card-outline"></ion-icon>
                         <input type="text" name="poa" required/>
                         <label for="">proof of address</label>
                    </div> 
                    
                    <button type="submit" class="button" name="Submit" link="href=C:\xampp\htdocs\vishveshprograms">submit</button>
               
               </form>         
               </div>
          </div>
     </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>