# `at` package and module
Schedule tasks

## Playbook to install `at` and enable `atd`
```yaml
---
- name: Install and enable "at" package
  hosts: all
  user: ansible
  become: yes
  gather_facts: no
  tasks:
    - name: Install "at" package
      yum:
        name: at
        state: installed

    - name: Start and enable "atd"
      service:
        name: atd
        state: started
        enabled: yes
```

## Playbook to use `at` to schedule a task
```yaml
---
- name: Configure one-time future task
  hosts: all
  user: ansible
  become: no
  gather_facts: no
  tasks:
    - name: Schedule command to run i n20 minutes as ansible user
      at:
        command: df -h > /tmp/diskspace
        count: 20
        units: minutes
        # Optionally deschedule task
        #state: absent
```

## Basic CLI syntax

### Configure a task
```
$ at
```

### View queue
```
$ atq
```

### View details of scheduled task
```
$ at -c [task number]
$ at -c 1
```

### Remove a task
```
$ atrm
```