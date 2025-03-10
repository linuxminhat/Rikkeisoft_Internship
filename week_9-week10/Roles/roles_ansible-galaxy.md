# Ansible Roles
## Find ansible roles on ansible-galaxy
    $ ansible-galaxy search mysql |more

    Found 1305 roles matching your search. Showing first 1000.

    Name                                                  Description
    ----                                                  -----------
    0utsider.ansible_zabbix_agent                         Installing and maintaining zabbix-agent for RedHat/Debian/U
    buntu.
    0x0i.grafana                                          Grafana - an analytics and monitoring observability platfor
    m
    0x0i.prometheus                                       Prometheus - a multi-dimensional time-series data monitorin
    g and alerting toolkit
    1mr.unattended                                        install and configure unattended upgrade
    1mr.zabbix_agent2                                     install and configure zabbix-agent2
    1mr.zabbix_host                                       configure host zabbix settings
    1nfinitum.mysql                                       Simply installs MySQL 5.7 on Xenial.
    4linuxdevops.mysql-server                             Instalacao e Configuracao do servidor MySQL
    5KYDEV0P5.skydevops-mysql                             Install and configure MySQL Database

## Find ansible roles on ansible-galaxy by author
    $ ansible-galaxy search mysql --author kodekloud1

    Found 1 roles matching your search:

    Name             Description
    ----             -----------
    kodekloud1.mysql your description

## Install ansible role from ansible-galaxy
### Install to directory configured in ```/etc/ansible/ansible.cfg```
    $ ansible-galaxy install username.rolename

    $ ansible-galaxy install kodekloud1.mysql
    - downloading role 'mysql', owned by kodekloud1
    - downloading role from https://github.com/kodekloudhub/mysql/archive/master.tar.gz
    - extracting kodekloud1.mysql to /home/thor/.ansible/roles/kodekloud1.mysql
    - kodekloud1.mysql (master) was installed successfully

    $ ll ~/.ansible/roles/kodekloud1.mysql/
    total 32
    -rw-rw-r-- 1 thor thor 1328 Oct  2  2019 README.md
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 defaults
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 handlers
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 meta
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 tasks
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 templates
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 tests
    drwxrwxr-x 2 thor thor 4096 Oct 12 13:08 vars

### Install to specific directory
    $ ansible-galaxy install geerlingguy.nginx -p ~/playbooks/web/roles
    - downloading role 'nginx', owned by geerlingguy
    - downloading role from https://github.com/geerlingguy/ansible-role-nginx/archive/2.8.0.tar.gz
    - extracting geerlingguy.nginx to /home/thor/playbooks/web/roles/geerlingguy.nginx
    - geerlingguy.nginx (2.8.0) was installed successfully

## Delete ansible role
### Delete from directory configured in `/etc/ansible/ansible.cfg`
    $ ansible-galaxy remove geerlingguy.nginx
    - geerlingguy.nginx is not installed, skipping.

### Delete from specific directory
    $ ansible-galaxy remove geerlingguy.nginx -p ~/playbooks/web/
    - successfully removed geerlingguy.nginx

## Initialize ansible role directory struction
### Initialize in directory configured in `/etc/ansible/ansible.cfg`
    $ ansible-galaxy init ansible-role-firewalld

### Initialize in specific directory (e.g. `./roles`)
    $ ansible-galaxy init --init-path=./roles ansible-role-firewalld
    - ansible-role-firewalld was created successfully

    $ ll ./roles/ansible-role-firewalld/
    total 36
    -rw-rw-r-- 1 thor thor 1328 Oct 12 19:32 README.md
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 defaults
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 files
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 handlers
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 meta
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 tasks
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 templates
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 tests
    drwxrwxr-x 2 thor thor 4096 Oct 12 19:32 vars