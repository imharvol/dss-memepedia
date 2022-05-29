FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive

WORKDIR /root

RUN apt-get update -y && apt-get upgrade -y && \
  apt-get install screen tmux git tar zip unzip apt-utils wget curl vim -y && \
  apt install ca-certificates apt-transport-https software-properties-common -y && \
  add-apt-repository ppa:ondrej/php && \
  apt update -y && \
  apt install php8.1 php8.1-bcmath php8.1-mbstring php8.1-xml php8.1-mysql php8.1-curl -y && \
  update-alternatives --set php /usr/bin/php8.1

RUN apt-get update -y && apt-get upgrade -y && \
  curl https://getcomposer.org/download/2.1.14/composer.phar --output ./composer && \
  mv composer /usr/local/bin/composer && \
  chmod +x /usr/local/bin/composer

RUN apt-get update -y && apt-get upgrade -y && \
  apt install mysql-server -y

# Falta ejecutar algunos comandos de SQL Server

RUN apt-get update -y && apt-get upgrade -y && \
  wget https://www.adminer.org/latest.php && \
  mkdir /usr/share/adminer && \
  mv latest.php /usr/share/adminer/adminer.php && \
  sh -c 'echo "Alias /adminer /usr/share/adminer/adminer.php" > /etc/apache2/conf-available/adminer.conf' && \
  a2enconf adminer && \
  service apache2 restart 

# Install Code Server
RUN curl -fsSL https://code-server.dev/install.sh | sh && (code-server &)
RUN code-server --install-extension bmewburn.vscode-intelephense-client --install-extension mikestead.dotenv

# Setup git
RUN git config --global commit.gpgsign false

CMD code-server --auth none --bind-addr 0.0.0.0:8080

WORKDIR /root/dss
