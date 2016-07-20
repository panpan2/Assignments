FROM debian:7

MAINTAINER Sarah Evans <@devhops>
LABEL "Behat Docker image on Debian Wheezy"

# Install php5, git

RUN apt-get -y update
RUN apt-get -y install curl php5-cli git apt-utils

RUN mkdir /home/behat

WORKDIR /home/behat
COPY composer.json /home/behat/composer.json
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install
COPY FeatureContext.php /home/behat/ls_project/features/bootstrap/FeatureContext.php
