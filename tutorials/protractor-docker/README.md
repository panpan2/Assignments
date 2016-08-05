### Selenium Webdriver Docker container  
```
$ docker run --rm --net="host" -e VNC_PASSWORD=pancakes elgalu/selenium:v2.45.0-ssh3
```
### Protractor Docker container  
```
$ docker run -it --rm --net="host" -v `pwd`:/src felippenardi/yo
```
### Running the specs  
```
$ protractor conf.js
```
