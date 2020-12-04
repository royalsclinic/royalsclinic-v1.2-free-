<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Clinic Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
      
        
    </head>   
    <body>
        <center>
            <img src="https://www.pngkit.com/png/full/353-3530855_global-mindset-dotted-world-map-png.png" style="width:100%;height:100%;z-index:-10;position:fixed;top:0px;left:0px;"/>
            <div  style="width:100%;height:100%;z-index:-5;position:fixed;top:0px;left:0px;background-color: rgba(255, 255, 255, 0.8);"></div>
            <div class="container" style="margin-top:30px;max-width:500px;">
                <img src="https://www.pngkey.com/png/full/196-1960872_doctors-clipart-doctor-patient-see-doctor-png.png" style="width:300px;height:300px;"/><br><br>
               <form method="post" action="registersuccess.php">
                <input type="text" name="name" class="form-control" placeholder="enter full name" style="border-radius:20px;"/><br>
                <input type="text" name="email" class="form-control" placeholder="enter email address" style="border-radius:20px;"/><br>
                <input type="password" name="password" class="form-control" placeholder="enter password" style="border-radius:20px;"/><br>
                <select name="role" class="form-control" style="border-radius:20px;">
                    <option value="Admin User">Admin User</option>
                    <option value="General User">General User</option>
                </select><br>
                <input type="submit" name="registersubmit" class="btn btn-info" value="Register" style="border-radius:20px;"/><br>
               </form>
            </div>
        </center><br><br>
    
    </body>
    </html>
    