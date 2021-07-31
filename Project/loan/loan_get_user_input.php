<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

       "http://www.w3.org/TR/html4/loose.dtd">
   <html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>User Login</title>
   </head>
   <body>

       <div id="frm">
       <form method="post" action="loan_output_and_confirm.php">

           <p>
            <center><H1>Enter your account number and password, then how much you want to deposit.</H1>
            </center>

              </p>
            <p>
            <center>
                   <label>Account Number</label>
                   <input type="text" name="account_number" id = "account_number"><br>

                <br>

                 <label>Account Password</label>
                   <input type="text" name="account_password" id="account_password"><br><br>


                   <label>Loan Type</label>
                     <input type="text" name="loan_type" id="loan_type" list = "typelist">
                     <datalist id = "typelist">
                       <option>Home Loans</option>
                       <option>Car Loans</option>
                       <option>Small Business Loans</option>
                       <option>Student Loans</option>
                       <option>personal Loans</option>

                     </datalist>

                     <br><br>


                    <label>Loan Amount</label>
                      <input type="number" name="loan_amount" id="loan_amount"><br><br>


                    <label>Loan Date</label>
                      <input type="date" name="loan_date" id="loan_date"><br><br>


                    <label>Repayment Date</label>
                      <input type="date" name="repayment_date" id="repayment_date"><br><br>





                    </center>
           </p>
              <center>
                   <input type="submit"  id="btn" value="submit"/>

               </center>
       </form>
       </div>


   </body>
   </html>
