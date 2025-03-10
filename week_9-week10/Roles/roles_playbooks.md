# Using Ansible Roles in Playbooks

## Roles with "roles" keyword
    ---
    - hosts: webservers
      roles:
        - role: apache

## Roles with "tasks" keyword
    ---
    - hosts: webservers
      tasks:
        - include_role:
            name: apache
          tags:
            - RH_HTTPD
          when: "ansible_os_family == 'RedHat'"