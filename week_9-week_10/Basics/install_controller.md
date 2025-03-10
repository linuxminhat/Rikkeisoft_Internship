# Linux Base Setup (Controller and Hosts)

## Linux system configuration
```
$ sudo vim /etc/hostname
$ reboot

$ sudo vim /etc/hosts
192.168.1.100 ansible-controller
192.168.1.101 host1
192.168.1.102 host2
```

## Setup local user `ansible`
```
$ sudo useradd ansible
$ sudo passwd ansible
$ sudo visudo
ansible    ALL=(ALL)    NOPASSWD: ALL
```

# Ansible Installation and Configuration (Controller Only)

## Install via `yum`
```
$ sudo yum -y update
$ sudo yum -y install epel-release
$ sudo yum -y install ansible
```

## Install via `pip`
```
$ sudo pip3 install ansible
$ sudo pip3 install ansible==v2.5
$ sudo pip3 install ansible --upgrade
$ sudo yum install perl gcc dkms kernel-devel kernel-headers make bzip2
```

## Setup `/etc/ansible/hosts`
```
$ sudo vim /etc/ansible/hosts
node1
node2
localhost
```

## Setup `/etc/ansible/ansible.cfg`
```
vim /etc/ansible/ansible.cfg

# Bypass known_hosts requirement.
host_key_checking = False
```

## Configure SSH key authentication
SSH passwords can be provided in plaintext in the inventory file, but configuring ssh keys is recommended and much more secure.

```
$ su - ansible
$ ssh-keygen
$ ssh-copy-id host1
$ ssh-copy-id host2
$ ssh-copy-id localhost
```

## Test basic connectivity
```
$ ansible all -m ping
```

## Test privilege escalation
```
$ ansible all -b -m ping
```

## Basic custom inventory
```
$ cd ~
$ cat > inventory
host1 ansible_host=192.168.1.101 ansible_ssh_pass=mypassisweak

$ ansible host1 -i inventory -m ping
```