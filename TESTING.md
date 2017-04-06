WHO  
Brandon Zink, Cam Connor, Abiel Fatorre, Philip Kickbush, Channing Hurley  
  
TITLE  
FaceIt  
  
VISION  
"Facilitate conversation, share knowledge, and connect like minded people."  
  
AUTOMATED TESTS  
Pictures stored in folder on google drive with link below.  
https://drive.google.com/drive/folders/0BzgPuxm_thkoazFRU1hfLWlWWlk?usp=sharing  
  
  
USER ACCEPTANCE TEST PLANS  
  
User case name  
    Verify login with valid user name and password  
Description  
    Test the main login page  
Pre-conditions  
    User has valid user name and password from database  
Test steps  
    1. Navigate to login page (index.php)  
    2. Provide valid user name  
    3. Provide valid password  
    4. Click login button  
Expected result  
    User should be able to login  
Actual result  
    User is navigated to homepage with successful login  
Status (Pass/Fail)  
    Pass  
Notes
    N/A  
Post-conditions  
    User is validated with database and successfully signed into their account and information is stored with cookie  
     
      
      
      
User case name  
    Create account  
Description  
    Create an account and store their information in the database  
Pre-conditions  
    None  
Test steps  
    1. Navigate to login page  
    2. Click on the create account button  
    3. Enter unique username and email, and some password  
    4. Click on create account  
Expected result  
    User should be able to create account if username and email are unique, otherwise be rejected  
Actual result  
    User is allowed to make account and added to database  
Status (Pass/Fail)  
    Pass  
Notes  
    N/A  
Post-conditions  
    User now have account that they can use to login  
      
      
      
      
User case name  
   Change profile page  
Description  
    Change content on user profile page, have it show up on actualy user profile page 
Pre-conditions  
    User has profile and is logged in  
Test steps  
    1. Navigate to profile page  
    2. Click on edit profile page button  
    3. Change some piece of information   
    4. Return to profile page  
Expected result  
    Changed information should show up  
Actual result  
    Changed information shows up, but is only sometimes stored in database 
Status (Pass/Fail)  
    Pass and Fail  
Notes  
    Currently a bug we are working on, should be fixed shortly  
Post-conditions  
    Changed profile information should show up to all viewing page  
