** Requirements **

    docker engine:  17.06.2-ce
    docker-compose: 1.16.1+

** Servers **

    apache: localhost:8000
    phpmyadmin: localhost:8080
    mysql: localhost:3636

** Access **

    Mysql
    
    db: wordpress
    root password: root
    user: wordpress
    password: wordpress
    
    
** Installation **

    Make sure all files in src/ are readable/writable by the www-data user.
    Install wordpress by browsing to: localhost:8080/wp-admin.
    Use mysql as hostname for the database.
    Note the password you used for future reference.
    
    cd to src/ and run composer install
    cd to src/plugins/wp-less and run composer require
    cd to src/wp-content/themes and run git clone https://github.com/fgms/wp-theme-twig-child.git 


     
    
    
    
