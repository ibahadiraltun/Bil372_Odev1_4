## IMECE
Bil372 Odev1 Grup 4 <br />
Bahadir Altun <br />
Rabia Yunusoglu <br />
Furkan Dolasik <br />

## Kurulum

MySQL ve PHP yi bilgisayariniza kurunuz. Asagidaki linkleri kullanarak kurabilirsiniz. Veritabani kodlarini MySQL Workbech aracında yazdık.İstege bagli olarak kurulabilir, gerekli degildir.

MySQL:https://www.sitepoint.com/how-to-install-mysql/ <br />
Php : https://www.sitepoint.com/how-to-install-php-on-windows/ <br />
MySQL Workbench: https://www.mysql.com/products/workbench/ <br />

Daha sonra projeyi localinize cekiniz.
```
git clone https://github.com/ibahadiraltun/Bil372_Odev1_4.git
```
Sonrasinda ```sql_scripts/``` altinda sql scriptleri veritabaninizda calistirin ya da dump olarak koydugumuz sql scriptini calistirin. Projeyi indiridiğiniz dizine gidiniz ve asagidaki komutu giriniz.

Not: web-app/config.php icerisini eger olusturdugunuz db isminin farkli olmasi durumunda guncelleyiniz. Default olarak imece oldugu varsayilmistir. 
## Calistirma
```
cd web-app
php -S 127.0.0.1:8000
```
Browserda 127.0.0.1:8000/login.php ye gidin.
## User Manuel

User Manuel dokumanina user-manuel klasorunden ulasabilirsiniz.Kullandigimiz frameworkler, veritabani sema diyagramimiz, ve ilgili formlarimiz bu ektedir.

