<!DOCTYPE html> 
<html> 
    <head> 
        <link rel="stylesheet" href="../css/contactstyle.css">
        <script src= "https://kit.fontawesome.com/a6e2755b4d.js" crossorigin="anonymous"> 
        </script>
        <style>
        .inline { 
            display: inline-block; 
             margin:50px;
            } 
        </style>
         </head> 
    <body> 
    <?php include 'header.php';?>
        <div class="container">
            <div style="text-align:center">
              <h1 style="color:darkgreen;">CONTACT US</h1>
              <p style="color:green;">GET IN TOUCH WITH US TO START PLANNING YOUR HOLIDAY
            </p>
            </div>
            <div class="inline">
            <div><i class="fa fa-mobile-phone" style="font-size:36px"></i>
            <span>+91- 5464654664</span>
            </div>
            <div><i class="fa fa-envelope" style="font-size:36px"></i>
            <span>path2paradise@yahoo.com</span>
            </div>
            <div><i class="fa fa-map-marker" style="font-size:36px"></i>
            <span>Path 2 Paradise</br> 2nd floor, AJ Plaza</br>Trivandrum, Kerala</span></br>
            </div><br/>
                <a target="_blank" href="#">
                    <img src="https://images.indianexpress.com/2015/02/whatsapp-security-tips.jpg" width="50" height="50">
                   </a> 
                   <a target="_blank" href="#">
                    <img src="https://d1afx9quaogywf.cloudfront.net/sites/default/files/Logos/Facebook400x230.png" width="50" height="50">
                   </a> 
                   <a target="_blank" href="#">
                    <img src="https://miro.medium.com/max/4086/1*V7GYJQ_4lykfDzOf9q17eA.jpeg" width="50" height="50">
                   </a>
            </div>
                    <div class="inline">
                        <form action="">
                            <label for="name">NAME</label>
                            <input type="text" id="name" name="NAME" placeholder="Your name..">
                            <label for="email">EMAIL</label>
                            <input type="text" id="email" name="EMAIL" placeholder="Your mail..">
                            <label for="phoneno">PHONE NO</label>
                            <input type="text" id="phoneno" name="PHONE NO" placeholder="Your phoneno..">
                            <label for=subject>SUBJECT</label>
                            <input type="text" id="subject" name="SUBJECT">
                            <label for="Comment">COMMENT</label>
                            <textarea id="comment" name="comment" placeholder="Write something.." style="height:170px"></textarea><br/><br/>
                            <div><input type="submit" value="Submit">
                            <input type="reset" value="Reset"></div>
                          </form>
                    </div>
        </div>
    <?php include 'footer.php';?>               
    </body> 
    </html> 
                    

            
        