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
    Verify login with valid user name and password
Description
    Test the Google login page
Pre-conditions
    User has valid user name and password
Test steps
    1. Navigate to login page
    2. Provide valid user name
    3. Provide valid password
    4. Click login button
Expected result
    User should be able to login
Actual result
    User is navigated to dashboard with successful login
Status (Pass/Fail)
    Pass
Notes
    N/A
Post-conditions
    User is validated with database and successfully signed into their account.
    The account session details are logged in database.
