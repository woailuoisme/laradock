@servers(['test-server' => 'root@8.129.220.194'])

@task('laradock',['on'=>'test-server'])
    cd /var/www/my-laradock
    git pull origin master
@endtask
