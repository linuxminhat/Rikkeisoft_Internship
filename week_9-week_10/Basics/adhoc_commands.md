# Ansible ad hoc commands
Ansible adhoc commands are essential on-liner playbooks

Also useful when you don't want to SSH directly to a host (or set of hosts) for data gathering, troubleshooting, or executing a quick command

## Example "ping" playbook
    ---
    - name: "Ping Servers"
      hosts: all
      tasks:
        - ping:
    ...

## Command to execute playbook
    ansible-playbook playbook.yml

## Ad hoc (one line) command to perform the same task
    # For the hosts in the group "all", found in inventory "inventory", run "ping" module
    ansible all -i inventory -m ping

## Ad hoc run a any basic command for all hosts
    # Module "command" is assume if "-m [module]" is not used
    # "-a [arguments]" can be used for most/any modules
    ansible all -i inventory -a 'cat /etc/hosts'

## Ad hoc command to get facts for host1 and store in hosts.facts
    ansible host1 -i inventory -m setup > host1.facts

## Flags
    ansible --version
    ansible -b (become super user, e.g. root, using method sudo; user and method can be configured)
    ansible -m [module] (select module)
    ansible -a [arguments] (arguments for selected module)
    ansible -f [#] (number of forks; see parallelism)

## More examples
    ansible -m ping localhost
    
    ansible host1 -i inventory -m ping
    
    ansible host1 -i inventory -a "date"
    
    ansible host1 -i inventory -b -m yum -a "name=httpd state=present"
    
    ansible host1 -i inventory -b -m yum -a "name=httpd state=absent"
    
    ansible host1 -i inventory -m file -a "path=/home/user/newfile 
    state=touch"
    
    ansible host1 -i inventory -m file -a "path=/home/user/newfile 
    mode=0400"
    
    ansible host1 -i inventory -b -m file -a "path=/home/user/newfile 
    owner=root"
    
    ansible host1 -i inventory -m copy -a "src=/home/user/localfile dest=/
    home/user/remotefile"
    
    ansible host1 -i inventory -m copy -a "src=/var/tmp/remotefile dest=/home/user/remotefile remote_src=true"

    ansible host1 -i inventory -b -m user -a "name=user"
    
    # Replaces all groups with "wheel":
    ansible host1 -i inventory -b -m user -a "name=user groups=wheel"

    # Adds group admin to existing groups:
    ansible host1 -i inventory -b -m user -a "name=user append=yes groups=admin"

    ansible dbsystems -b -m file -a "path=/home/consultant/.ssh mode=0755 state=directory"

    ansible dbsystems -b -m copy -a "src=~/keys/consultant/authorized_keys dest=/home/consultant/.ssh/authorized_keys mode=0600 owner=consultant group=consultant"
    
    ansible dbsystems -b -m file -a "path=/home/supervisor/.ssh mode=0755 state=directory"
    
    ansible dbsystems -b -m copy -a "src=~/keys/supervisor/authorized_keys dest=/home/supervisor/.ssh/authorized_keys mode=0600 owner=supervisor group=supervisor"
    
    ansible dbsystems -b -m yum -a "name=auditd state=present"
    
    ansible dbsystems -b -m service -a "name=auditd state=started enabled=yes"

    ansible scoldham2,scoldham4 -b -m service -a "name=httpd state=stopped"

    # Filter facts (or fact groups) that contain "ipv4" in the name:
    ansible scoldham2 -m setup -a "filter=*ipv4*"

    # Filter locally-defined (custom) facts from the host:
    ansible scoldham2 -m setup -a "filter=ansible_local"


## Shell Script Example
    ~/shell-script.sh
    export ANSIBLE_GATHERING=explicit
    ansible -m ping all
    ansible -a 'cat /etc/hosts' all
    ansible-playbook playbook.yml

    chmod 755 shell-script.sh
    ./shell-script.sh

## Scripts Lab
    ~/playbooks/host_details.sh
    ansible all -a 'cat /etc/hostname' -i inventory
    ansible node00 -m copy -a "src=/etc/resolv.conf dest=/tmp/resolve.conf" -i inventory

## Scripts Lab2
    ~/playbooks/playbook.yml
    ---
    - name: "Display /etc/redhat-release for all inventory"
      hosts: all
      tasks:
      - name: "cat /etc/redhat-release"
        command: cat /etc/redhat-release

    ~/playbooks/host_data.sh
    export ANSIBLE_GATHERING=explicit
    ansible all -a 'uptime' -i inventory
    ansible-playbook -i inventory -vv playbook.yml