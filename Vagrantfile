# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    # box settings
    config.vm.box = "scotch/box"
    config.vm.box_version = ">= 2.5"

    # network
    config.vm.network "private_network", ip: "192.168.200.43"
    # You may safely use this subdomain, as we control the domain and guarantee it won't be used otherwise
    config.vm.hostname = "my.jumpstart.rocks"

    # synced directory
    config.vm.synced_folder ".", "/home/vagrant/plugin", :nfs => { :mount_options => ["dmode=777","fmode=766"] }

    # hostmanager
    if Vagrant.has_plugin?("vagrant-hostmanager")
        config.hostmanager.enabled = true
        config.hostmanager.manage_host = true
    end

    # provisioning
    config.vm.provision "shell", inline: <<-SHELL
        visudo chown -R vagrant:vagrant /var/www
        cd /var/www
        composer create-project --no-dev --prefer-dist mrgrain/autobahn .
        cp -n .env.example .env
        ln -s /home/vagrant/plugin /var/www/public/app/plugins/my-jumpstart
        ./vendor/bin/autobahn keys:generate -q
        ./vendor/bin/autobahn env:set WP_HOME --value="http://my.jumpstart.rocks"
        ./vendor/bin/wp core install --url="http://my.jumpstart.rocks" --skip-email
        ./vendor/bin/wp theme activate twentysixteen
        ./vendor/bin/wp plugin activate my-jumpstart

        ./vendor/bin/wp plugin install wordpress-importer --activate
        wget https://wpcom-themes.svn.automattic.com/demo/theme-unit-test-data.xml
        ./vendor/bin/wp import theme-unit-test-data.xml --authors=create
    SHELL
end
