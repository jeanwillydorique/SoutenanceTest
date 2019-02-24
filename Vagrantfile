# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "ubuntu/xenial64"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.40"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  config.vm.synced_folder "./data", "/var/www/html", owner: "vagrant", group: "www-data"

  #config.vm.synced_folder "../students.it-akademy.fr", "/var/www/html3", owner: "www-data", group: "www-data"
  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
   config.vm.provider "virtualbox" do |vb|
     # Display the VirtualBox GUI when booting the machine
     vb.gui = false
  #
  #   # Customize the amount of memory on the VM:
     vb.memory = "2048"
   end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  config.vm.provision "shell", inline: <<-SHELL
   echo "\n"
   echo "\n"
   echo "\n"
   echo "+-------------------------------+\n"
   echo "|      Installation Laravel     |\n"
   echo "|        Projet LibraWill       |\n"
   echo "+-------------------------------+\n"
   echo "\n"
   echo "Mise à jour des paquets...\n"
   sudo add-apt-repository ppa:ondrej/php &> /dev/null
   sudo apt-get update &> /dev/null
   cd /var/www/html &> /dev/null
   echo "Installation d'Apache 2...\n"
   sudo apt-get install -y apache2 &>> /dev/null
   echo "Activation des modules Apache...\n"
   sudo a2enmod rewrite headers expires &> /dev/null
   echo "Redémarrage d'Apache...\n"
   sudo service apache2 force-reload &> /dev/null
   echo "Installation des utilitaires de base du système...\n"
   sudo apt-get install -y zip unzip git-core wget &> /dev/null
   echo "Installation de MySQL 5.7...\n"
   exportDEBIAN_FRONTEND='noninteractive'
   sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password 0000"
   sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password 0000"
   apt-get install -y mysql-server &> /dev/null
   echo "Le mot de passe root de MySQL est : 0000 \n"
   echo "Installation de PHP7.2 et des paquets...\n"
   sudo apt-get install -y php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-mbstring php7.2-dom &> /dev/null
   echo "Installation de composer...\n"
   sudo php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   sudo php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
   sudo php composer-setup.php
   sudo php -r "unlink('composer-setup.php');"
   sudo mv composer.phar /usr/local/bin/composer
   echo "Installation de l'application...\n"
   composer install
   composer update
   echo "Configuration de l'application \n"
   sudo rm index.html
   sudo mv .env-1.example .env
   sudo sed -i -e "s/.*DB_DATABASE=homestead.*/DB_DATABASE=LibraWill/g" .env
   sudo sed -i -e "s/.*DB_USERNAME=homestead.*/DB_USERNAME=root/g" .env
   sudo sed -i -e "s/.*DB_PASSWORD=secret.*/DB_PASSWORD=0000/g" .env
   echo "Configuration du fichier envvars \n"
   sudo sed -i -e "s/.*export APACHE_RUN_USER=www-data.*/export APACHE_RUN_USER=vagrant/g"  /etc/apache2/envvars
   sudo sed -i -e "s/.*export APACHE_RUN_GROUP=www-data.*/export APACHE_RUN_GROUP=vagrant/g"  /etc/apache2/envvars
   sudo sed -i -e "s/.*export APACHE_RUN_GROUP=www-data.*/export APACHE_RUN_GROUP=vagrant/g"  /etc/apache2/envvars
   echo "Configuration du fichier 000-default\n"
   sudo mv -f 000-default.conf /etc/apache2/sites-available/000-default.conf
   echo "Activation des erreurs PHP"
   sudo sed -i -e "s/.*export display_errors = Off.*/export display_errors = On/g"  /etc/php/7.2/apache2/php.ini 
   sudo sed -i -e "s/.*export display_startup_errors = Off.*/export display_startup_errors = On/g"  /etc/php/7.2/apache2/php.ini
   echo "Création de la base de données\n"
   mysql -uroot -p0000 -e "CREATE DATABASE LibraWill;"
   echo "Création de la clé de sécurité \n"
   php artisan key:generate
   echo "Migration et seed des données \n"
   php artisan migrate --seed
   echo "Redémarrage d'Apache...\n"
   sudo service apache2 restart
   echo "Installation terminée. Connectez-vous avec la commande vagrant ssh\n"
  SHELL
end

