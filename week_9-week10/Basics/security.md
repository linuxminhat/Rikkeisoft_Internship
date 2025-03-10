# Ansible Security

## Security Tasks
* Make security changes to many nodes at once.
* Apply consistent security settings throughout an environment.
* Quickly check many nodes for vulnerabilities.
* Integrate with existing security tools.
  * Look for existing vendors and modules
    * `firewalld`
    * `iptables`
    * `yum`
    * `selinux`
    * `pamd`
    * F5 BIG-IP (bigip)
    * NetApp
    * Cisco
    * EMC
    * AWS
    * GCP
    * Azure
    * Datadog
    * Nagios
    * AVI
* Can be used for Windows, Mac OS X, and Solaris.
* Bulk-add users (`user`)
* Manage certificates and keys (`openssl` and `ssh`)

## Ad hoc security commands
```
$ ansible all -a /usr/bin/uptime
```

## Base security setup
`selinux-check.yml`
```yaml
---
- name: Enable selinux on all hosts
  hosts: all
  become: yes
  gather_facts: no
  tasks:
    - name: Enable selinux
      selinux:
        policy: targeted
        state: enforcing
```

`add-group.yml`
```yaml
---
- name: Add group
  hosts: all
  user: ansible
  become: yes
  gather_facts: no
  tasks:
    - name: Ensure group "developers" exists
      group:
        name: developers
        state: present
```

Generate password hash for `GD3MpX@ifX2NUp-N`
```
$ sudo adduser tempuser
$ sudo passwd tempuser
Changing password for user tempuser.
New password:
Retype new password:
passwd: all authentication tokens updated successfully.

$ sudo grep tempuser /etc/shadow
tempuser:$6$ENslX5qt$3wKMFHpw8BnlXNmDV.DqS.esV8W4SYP.Bt.y5aJNH.62UpDVPTBChLpe7f8wLDPm4QxI7UaClzAEBe8LwmVPM.:18558:0:99999:7:::

$ sudo deluser tempuser

# This is the part we need:
$6$ENslX5qt$3wKMFHpw8BnlXNmDV.DqS.esV8W4SYP.Bt.y5aJNH.62UpDVPTBChLpe7f8wLDPm4QxI7UaClzAEBe8LwmVPM.
```

Generate epoch for account expiration (e.g. 11/30/2020 PST)
```
$ date --date '11/30/2020 PST'
Mon Nov 30 02:00:00 CST 2020

$ date --date '11/30/2020 PST' +%s
1606723200
```

`add-tempuser.yml`
```yaml
---
- name: Add tempuser
  hosts: all
  user: ansible
  become: yes
  gather_facts: no
  tasks:
    - name: Add a consultant account with expiration
      user:
        name: james395
        shell: /bin/bash
        groups: developers
        append: yes
        expires: 1606723200
        password: $6$ENslX5qt$3wKMFHpw8BnlXNmDV.DqS.esV8W4SYP.Bt.y5aJNH.62UpDVPTBChLpe7f8wLDPm4QxI7UaClzAEBe8LwmVPM.
        # Uncomment below and rerun the playbook to remove the account
        # state: absent
```