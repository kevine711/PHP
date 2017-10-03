Google Play  - Promo code dispenser


Requirements: You need to have your own hosting server where you can host the php script.  You need to codes generated from the Play Console under Promotions.

1. Create a database to host the promo codes and create a user with select and delete privilege.  
2. Go to phpMyAdmin and navigate to the database you created.  Create a table with 1 column (and name the column) with datatype varchar, size 64, unique.  Navigate to where you can enter SQL queries.
3. Open SQL_Generator.xlsm and paste all the codes you generated for your app in the codes section starting where code 1 is.  1 code per row.
4. Enter the table and column names then enable macros and hit "Generate".
5. Copy the text from the output cell and paste it into the SQL query section of phpMyAdmin, and hit go.  You should now have all the codes inserted into your table.
6. Open requestcode.php in a text editor and make all the substitutions for your database name, user, password, table name, and column name.

You can test the code by navigating to the php script via your browser  www.mydomain.com/requestcode.php
The output should be the first code, and a link to claim it in the Play Store.  This code will also be deleted from the database.  
When no codes are left, the appropriate message will be displayed.

To make use of this, simply share the link www.mydomain.com/requestcode.php (with your domain path of course) in whatever post/blog you wish to share the codes.