# SolidarityCafe

## Description
SolidarityCafe is an online chat room app for women's solidarity and support. Developed by women and designed for women. SolidarityCafe is coded with PHP, MySQL and javascript. 

## Project Members
[Kaitlyn Liu](https://github.com/kliu513)

[Stephanie Li](https://github.com/stephanieli000131)

[Angie Zhao](https://github.com/WAngieZhao)

[Ziyan An](https://github.com/ziyanan)

## Setting Up
1. Download XAMPP from this [link](https://www.apachefriends.org/index.html) and install. 
2. Open xampp folder and put ChatApp folder in the xampp/htdocs/ folder.
3. Open XAMPP Control Panel and start Apache service and MySQL service. 
4. If Apache service cannot start:
    1. From the XAMPP Control Panel, choose Config next to Apache
    2. Select Apache (httpd.conf) and change all 80 to 8080 (total 2 changes as for v3.3.0)
    3. Select Apache (httpd-ssl.conf) and change all 443 to 4433 (total 3 changes as for v3.3.0)
    4. From the XAMPP Control Panel, choose Config on the top right corner
    5. Select Service and Port Settings in　Configuration of Control Panel
    6. Under Apache tab, change Main Port to 8080 and SSL Port to 4433
5. To set up the dataset,  navigating to http://localhost/phpmyadmin or http://localhost:8080/phpmyadmin or http://127.0.0.1:8080/phpmyadmin
6. Create a new dataset named chatapp, then upload the .sql file in xampp/htdoc/ChatApp/ folder
7. Open the chat room by navigating to http://localhost/chatapp or http://localhost:8080/chatapp or http://127.0.0.1:8080/chatapp/index.php
