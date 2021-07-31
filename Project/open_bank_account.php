
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

       "http://www.w3.org/TR/html4/loose.dtd">
   <html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>User Login</title>
   </head>
   <body>

       <div id="frm">
       <form method="post" action="open_bank_account_config.php">

           <p>
            <center><H1>Fill in the following information to sign up an bank account.</H1>
            </center>

              </p>
            <p>
            <center>
                   <label>Customer Name</label>
                   <input type="text" name="customer_name" id = "customer_name"><br>

                <br>

                 <label>Customer Email</label>
                   <input type="email" name="customer_email" id="customer_email"><br><br>


                  <label>Customer Phone Number</label>
                    <input type="text" name="customer_phone" id="customer_phone"><br><br>

                  <label>Customer Address</label>
                    <input type="text" name="customer_address" id="customer_address"><br><br>

                  <label>Account Type</label>
                    <input type="text" name="account_type" id="account_type" list = "typelist">
                    <datalist id = "typelist">
                      <option>Checking account</option>
                      <option>Savings account</option>
                      <option>Money market account</option>
                      <option>Brokerage account</option>

                    </datalist>
                    <br><br>


                  <label>Account Password</label>
                    <input type="text" name="account_password" id="account_password"><br><br>

                  <label>Deposit Amount</label>
                    <input type="number" name="deposit_amount" id="deposit_amount"><br><br>

                  <label>Online User Name</label>
                      <input type="text" name="online_user_name" id="online_user_name"><br><br>

                  <label>Choose Branch</label>
                      <input type="radio" name="choose_branch"  value = "111" checked="choose_branch">111
                      <input type="radio" name="choose_branch"  value = "222" >222
                      <input type="radio" name="choose_branch"  value = "333" >333
                      <input type="radio" name="choose_branch"  value = "444" >444
                      <br><br>
                    <p style= "color:red;">  Note:South Branch Code: 111, East Branch Code:222, North Branch Code:333, West Branch Code:444</P>



                    </center>
           </p>
              <center>
                   <input type="submit" id="btn" value="submit"/>

               </center>
       </form>
       </div>




   </body>
   </html>
