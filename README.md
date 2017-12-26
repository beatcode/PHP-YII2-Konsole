# php

Migration, Model und CRUD erstellen
------
php yii migrate/create create_tbl_website_table   
-  (Beispiel Inhalt in Migration_Example.php)

php yii gii/model --tableName=tbl_website --modelClass=tblWebsite

php yii gii/crud --modelClass='app\models\tblWebsite' --controllerClass='app\controllers\WebsiteController'
