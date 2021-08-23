# wordpress-alert
 push alert in wordpress with alert class
you can push admin notice with this class 

## start install 
you can requier with github desctop or download zip file

## how its working
if you have auto loder you can do this 

` use inistachi_alert `

if not do this

` requier 'inistachi_alerts.php'; `

then make object from class :

` $alert = new Alert(); `

## messages
for pushing successful save messsage use function 

` $alert->secusses_save();`

![ScreenShot](https://raw.githubusercontent.com/turkdevlopers/inistachiPUB/main/imgs/ss.png)

when there is fail in saving you can use this function:

`$alert->fail_save();`

![ScreenShot](https://raw.githubusercontent.com/turkdevlopers/inistachiPUB/main/imgs/fs.png)

if you want to push info you should use this function:

`$message = 'you have message'; 

$alert->give_info($message);`

![ScreenShot](https://raw.githubusercontent.com/turkdevlopers/inistachiPUB/main/imgs/is.png)

if you want to push warning you should use this function:

`$message = 'you have warning message'; 

$alert->give_warning($message);`

![ScreenShot](https://raw.githubusercontent.com/turkdevlopers/inistachiPUB/main/imgs/ws.png)

### custom message
for pushing your custom message you can use this function:

`$message = 'this is message';

$class = ''//wich class you want for exampel : success warning error info ...

$alert->custom_message($message, $class);`
