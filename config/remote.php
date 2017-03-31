<?php


    
    return array(
    /*
    |--------------------------------------------------------------------------
    | Default Remote Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default connection that will be used for SSH
    | operations. This name should correspond to a connection name below
    | in the server list. Each connection will be manually accessible.
    |
    */
    'default' => 'production',
    /*
    |--------------------------------------------------------------------------
    | Remote Server Connections
    |--------------------------------------------------------------------------
    |
    | These are the servers that will be accessible via the SSH task runner
    | facilities of Laravel. This feature radically simplifies executing
    | tasks on your servers, such as deploying out these applications.
    |
    */
'connections' => array(
        'production' => array( 
            'host'      => 'check.ezmart.in',
            'username'  => 'dalip',
            'password'  => 'dannyLUCK1',
            'key'       => 'ho5QT1HR1LC9Nc8fdu8+bxunevvNK1JIlh8nTP3s9l6Bz9hNbNZHNNap4nVpiAA1
KefPzI3D0tkz+XgSjGq0PJ+LEbpto5ql2kv1x6cqHYMafCAAl0wOFakxeBCNhvEc
oOVNSXHA40dKi/d6+xa+EecgotLwaish7fVq6VJQfbDS+7QfMTz3vz6UoiO8OPrw
e6EChwH/m7e3VQt6wWGqLzK9iRt9yBxKo0NrqIfIjTUNklWJQyg2ZEtMp1YF62s8
h+CfovMdtc+Li1WMlAkadYkIn8t7G/oDVFQteFh0SvFHkJ7K7Q294vL5g3fXoy5H
Al1ejSFcl9t2e0SYk9bQqNPCa7ZAJBZJtKxDEGNgUwhDIpa2NK7KuItQbxLeTpHD
rEFEdC0Zo1FY+KP3oDKmlFQ86zrhqtjHp7s+FlM1raQH/B6e4/IOkGwnnrNUak0T
XiYyRALq6gpiEZAjbS3TL8Fqj+3qODsPpYT82s9olfd1soAd1mAc4od6Dl6JGWrG
myqXYaqoSCvyQ+EJI4nCtwlUaolOhRCUZwcqrlyrQlkfg+LBzalfbnAOIL0bWejE
U/t4QVre9al7dRtAosbllSdSJp+AJjRf',
            'keyphrase' => '',
            'root'      => 'public_html/check',
        ),
    ),
 /*
    |--------------------------------------------------------------------------
    | Remote Server Groups
    |--------------------------------------------------------------------------
    |
    | Here you may list connections under a single group name, which allows
    | you to easily access all of the servers at once using a short name
    | that is extremely easy to remember, such as "web" or "database".
    |
    */
    'groups' => array(
        'web' => array('production')
    ),
);
?>