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
  config.vm.box = "centos71"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  config.vm.synced_folder "./app", "/var/httpdStore", mount_options: ['dmode=775','fmode=755']

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.
  config.vm.provider "virtualbox" do |vb|
    vb.cpus = "1"
    vb.memory = "1024"
  end

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  # config.vm.provision "shell", inline <<-SHELL
  #   sudo apt-get install apache2
  # SHELL
  config.vm.provision "shell", inline: <<-SHELL

    # Change user to root.
    sudo su -

    # Install & Update Base Files.
    yum update -y
    yum groupinstall -y "Development Tools"
    yum install -y openssl-devel readline-devel zlib-devel curl-devel ImageMagick ImageMagick-devel glib2-devel gd-devel libxml2-devel libxslt-devel pcre-devel perl-devel perl-ExtUtils-Embed w3m wget vim bind-utils

    # Install epel & remi & mysql community repos to virtual machine.
    yum install -y epel-release
    cp /etc/yum.repos.d/epel.repo /etc/yum.repos.d/epel.repo.original
    sed -i s/enabled=1/enabled=0/ /etc/yum.repos.d/epel.repo
    rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
    cp /etc/yum.repos.d/remi.repo /etc/yum.repos.d/remi.repo.original
    sed -i s/enabled=1/enabled=0/ /etc/yum.repos.d/remi.repo
    yum install -y http://repo.mysql.com/mysql-community-release-el7.rpm

    # Install MySQL5.6 to virtual machine.
    yum install -y mysql mysql-server mysql-devel

    # Install PHP5.6 to virtual machine.
    yum install -y --enablerepo=epel libmcrypt libtidy
    yum install -y --enablerepo=remi-php56 php php-devel php-pear php-mbstring php-xml php-mcrypt php-gd php-pecl-xdebug php-opcache php-pecl-apcu php-fpm php-phpunit-PHPUnit php-mysqlnd

    # Install and Start Apache to virtual machine.
    yum install -y httpd httpd-devel
    systemctl start httpd
    systemctl enable httpd

    # Disable SELinux.
    setenforce 0
    sed -i s/SELINUX=enforcing/SELINUX=disabled/ /etc/sysconfig/selinux

    # Disable Firewall.
    systemctl stop firewalld
    systemctl disable firewalld

    # Install composer.
    cd /opt
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
    composer self-update

    # Install Nodejs & npm.
    yum install -y --enablerepo=epel npm
    npm update -g npm
    npm install -g n
    n stable

    # Install gulp & bower.
    npm install -g gulp
    npm install -g bower

    # setting up virtualhost to the server.
    touch /etc/httpd/conf.d/job-fair.dev.conf
    cat << 'EOF' > /etc/httpd/conf.d/job-fair.dev.conf
<VirtualHost *:80>
    ServerName job-fair.dev
    DocumentRoot /var/httpdStore/public
    CustomLog   logs/job-fair.dev-access_log combined
    ErrorLog    logs/job-fair.dev-error_log

    <Directory "/var/httpdStore/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF
    systemctl restart httpd

  SHELL
end
