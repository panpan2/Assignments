### Selenium Webdriver Docker container  
```
$ docker run --rm --net="host" -e VNC_PASSWORD=pancakes elgalu/selenium:2.53.0g
```
### Protractor Docker container  
```
$ docker run -it --rm --net="host" -v `pwd`:/src felippenardi/yo
```
### Running the specs  
```
$ protractor conf.js
```
