FROM php:5.6-apache
RUN rm /bin/sh && ln -s /bin/bash /bin/sh
COPY . /var/www/html
RUN apt-get update && apt-get install -y re2c libpcre3-dev git \
	&& rm -rf /var/lib/apt/lists/*
RUN git clone https://github.com/json-c/json-c.git /tmp/json-c/
WORKDIR /tmp/json-c/
RUN sh autogen.sh
RUN ./configure
RUN make
RUN make install
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN echo 'export PATH=~/.composer/vendor/bin:$PATH' >> ~/.bashrc
RUN source ~/.bashrc
RUN composer global require phalcon/zephir
RUN ~/.composer/vendor/phalcon/zephir/install
WORKDIR /var/www/html/
RUN cd /var/www/html/ && ~/.composer/vendor/bin/zephir install
RUN cd /var/www/html/ && ~/.composer/vendor/bin/zephir install
