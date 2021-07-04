# SolidarityCafe

## Description
SolidarityCafe is an online chat room app for women's solidarity and support. Developed by women and designed for women. We would like to support women's mental health by providing an platform for women to seek and lend help when they need someplace to confide their concerns and release their pressures and depressions. SolidarityCafe is coded with PHP, MySQL and javascript. 

## Project Members
[Kaitlyn Liu](https://github.com/kliu513)

[Stephanie Li](https://github.com/stephanieli000131)

[Angie Zhao](https://github.com/WAngieZhao)

[Ziyan An](https://github.com/ziyanan)

## Setting Up
1. Download XAMPP from this [link](https://www.apachefriends.org/index.html) and install. 
2. Navigate to htdocs folder under XAMPP folder
3. Rename downloaded github repo folder to SolidarityCafe and put SolidarityCafe folder in the xampp/htdocs/ folder.
4. Open XAMPP Control Panel and start Apache service and MySQL service. 
5. If Apache service cannot start:
    1. From the XAMPP Control Panel, choose Config next to Apache
    2. Select Apache (httpd.conf) and change all 80 to 8080 (total 2 changes as for v3.3.0)
    3. Select Apache (httpd-ssl.conf) and change all 443 to 4433 (total 3 changes as for v3.3.0)
    4. From the XAMPP Control Panel, choose Config on the top right corner
    5. Select Service and Port Settings in　Configuration of Control Panel
    6. Under Apache tab, change Main Port to 8080 and SSL Port to 4433
6. To set up the dataset, navigating to http://localhost/phpmyadmin or http://localhost:8080/phpmyadmin or http://127.0.0.1:8080/phpmyadmin
7. Create a new dataset named solidaritycafe, then upload the .sql file in xampp/htdoc/SolidarityCafe/ folder
8. Open the chat room by navigating to http://localhost/solidaritycafe or http://localhost:8080/solidaritycafe or http://127.0.0.1:8080/solidaritycafe/index.php
