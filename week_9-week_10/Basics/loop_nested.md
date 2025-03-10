# Nested Loops

https://docs.ansible.com/ansible/2.3/playbooks_loops.html#nested-loops

# This file contains user groups and users listed by group membership.
# #
# # The playbook /home/ansible/exam/users.yml should do the following:
# #
# # Download and store this file in /home/ansible/files/user_list.yml on control1.
# # Create the listed users and groups as system users and groups on node1.
# # Each user shoud be assigned a default group based on the list containing their name.
# # For example, john should have the default group staff.
# #

```yaml
- name: Download user and group list
  hosts: localhost
  tasks:
    - name: Download user and group list
      uri:
        url: http://files.example.com/user_list.yml
        dest: ~/files/user_list.yml

- name: Deploy users and groups
  hosts: node1
  become: yes
  tasks:
    - name: Include user and group vars
      include_vars:
        file: ~/files/user_list.yml
        name: user_list

    - name: Create groups
      group:
        name: "{{ item }}"
      with_items:
        - "{{ user_list['user_groups'] }}"

    - name: Create users (outer)
      user:
        name: "{{ item[0]['item[1]'] }}"
      with_items:
        - "{{ user_list['user_groups'] }}"
```

```yaml
---
- name: Create users (inner)
  user:
    name: "{{ item }}"
    group: "{{ outer }}"
```