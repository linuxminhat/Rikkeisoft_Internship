# Tags
Use tags to only run certain tasks within a playbook. Tasks inherit tags specified at these levels:
* Play
* `block`
* `include_tasks / apply`

https://docs.ansible.com/ansible/latest/user_guide/playbooks_tags.html

## Options

* `--tags all` - Run all tasks, ignore tags (default behavior)
* `--tags tag1,tag2` - Run tasks tagged with `tag1` and `tag2`
* `--skip-tags tag3` - Run all tasks except those tagged with `tag3`
* `--tags tagged` - Run all tasks with at least one tag
* `--tags untagged` - Run all tasks with no tags

## Spcial Tags

* `always` - Tasks with the `always` tag will always run, unless the `always` tag is explicitly skipped using `--skip-tags always` etc.
* `never` - Tasks with the `never` tag will never run, unless the `never` tag is explicitly called using `--tags never` etc.

## Example playbook
```yaml
---
- name: Deploy full application stack
  hosts: all
  become: yes
  tags:
    - full_app_stack
  tasks:
    - name: Webserver tasks
      tags:
        - webserver
      block:
        - name: Install nginx
          yum:
            name: nginx
            state: installed
          tags:
            - nginx

        - name: Deploy app binary
          copy:
            src: /home/usr/apps/hello
            dest: /var/www/html/hello

    - name: Ensure selinux is using the targeted policy and is enforcing
      selinux:
        policy: targeted
        state: enforcing
      tags:
        - security

- name: Deploy db script
      copy:
        src: /home/usr/apps/script.sql
        dest: /opt/db/scripts/script.sql
      tags:
        - db

    - name: Output debug "never"
      debug:
        msg: You should never see this
      tags:
        - never

    - name: Output debug "always"
      debug:
        msg: You should always see this
      tags:
        - always
```

## Examples outcomes
```
$ ansible-playbook deploy.yml --tags db
Tasks

Deploy db script
Output debug "always"


$ ansible-playbook deploy.yml --tags webserver
```

## Skip tasks with "db" tag
ansible-playbook deploy.yml --skip-tags db


## Formatting options

```yaml
tags:
  - tag1

tags:
  - tag1
  - tag2

tags: tag1

tags: tag1, tag2

---
- name: Setting play tags
  hosts: all
  tags:
    - myplays
  tasks:
...

---
- name: Named block; setting block tags at the top of the block (my fav)
  hosts: all
  tasks:
    - name: Block 1
      tags:
        - blocktag1
      block:
        - name: Task 1
          debug: msg=This is a debug message
...

---
- name: Named block; setting block tags at the bottom of the block (okay, but tags could be hard to see if there are many tasks)
  hosts: all
  tasks:
    - name: Block 1
      block:
        - name: Task 1
          debug: msg=This is a debug message
      tags:
        - blocktag1
...

---
- name: Unnamed block; setting tags at the bottom of the block (okay, but tags could be hard to see if there are many tasks)
  hosts: all
  tasks:
    - block:
        - name: Task 1
          debug: msg=This is a debug message
      tags:
        - blocktag1
...

---
- name: Unnamed block; setting tags at the top of the block (workable but ugly, IMO)
  hosts: all
  tasks:
    - tags:
        - blocktag1
      block:
        - name: Task 1
          debug: msg=This is a debug message
...


```