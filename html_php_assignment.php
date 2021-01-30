<!-- 
    Andrea Sheets (Adkins)
    1/29/2021
    Basic HTML Assignment
 -->

 <!DOCTYPE html>
 <html>
     <head>
         <title>HTML Practice Page</title>
 
         <style>
 
         </style>
     </head>
 
     <body>
         <br><br>
 
         <div class="semester_schedule">
             <table>
                 <tr>
                     <th>Course</th>
                     <th>Days/Time</th>
                     <th>Class Website</th>
                 </tr>
                 <tr>
                     <td>CSCT237</td>
                     <td>MW 1:00-2:15</td>
                     <td><a href="http://www.brandonwalker.net" target="_blank">www.brandonwalker.net</a></td>
                 </tr>
                 <tr>
                     <td>CSCT244</td>
                     <td>MW 11:00-12:20</td>
                     <td><a href="https://ilearn-bridgevalley.wvnet.edu/" target="_blank">BridgeValley Online</a></td>
                 </tr>
                 <tr>
                     <td>CSCT282</td>
                     <td>TR 11:00-12:20</td>
                     <td><a href="https://ilearn-bridgevalley.wvnet.edu/" target="_blank">BridgeValley Online</a></td>
                 </tr>
             </table>
         </div>
 
         <br><br><br><br>
 
        <!-- <form method="get" action="/login_action.php"> -->
        <!-- If you use the 'get' method, it passes the username and the password values on the screen, at the end of the url...this is not very secure -->

        <!-- <form method="post" action="/login_action.php">  -->
        <form method="post" action="/practice_second_page.php"> 
        <!-- If you use the 'post' method with the username and the password, those values are 'hidden' from the url and is in the HTTP headers - it is not saved in cache and does not remain in the browser history, so it's more secure for passwords -->
             <div class="login box">
                 <input type="text" name="user" placeholder="Username" required> 
                 <input type="password" name="pass"  placeholder="Password" required>
                 <!-- the 'name' attribute is required when sending data in a form... -->
                 <!-- id attributes are always unique, however, name attributes do not have to be (for example: 3 clickboxes for cheese type - each has the name attribute 'cheese_type' but there's 3 different ids for each type 'cheddar', 'swiss', 'american'..the id attribute for the cheese_types further specifies which cheese_type info needs to be submitted further) -->
             </div>
             <input type="submit" value="Submit">    
         </form>
 
 
     </body>
 </html>