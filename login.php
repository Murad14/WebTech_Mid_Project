 <!DOCTYPE html>
 <html>
   <head>
     <title>Login</title>
   </head>
   <body><center>
     <table>
     <tr>
     <td>
     <fieldset>
             <legend><b>LOGIN</b></legend>
             <form method="post" action="logcheck.php">
                 <table>

                     <tr>
                         <td>Email</td>
                         <td>:</td>
                         <td><input name="email" type="email"></td>
                     </tr>
                     <tr>
                         <td>Password</td>
                         <td>:</td>
                         <td><input name="password" type="password"></td>
                     </tr>
                 </table>
                 <hr />
                 <input name="remember" type="checkbox">Remember Me
                 <br/><br/>
                 <input name="submit" type="submit" value="Submit">
                 <a href="register.php">Register</a>
             </form>
         </fieldset>
     </td>
     </tr>
     </table>
   </center></body>
 </html>
