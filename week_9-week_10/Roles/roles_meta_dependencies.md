# Ansible Role Meta

## allow_duplcates flag
In rare circumstances you will need to set the ```allow_duplicates``` to accomplish certain nested or multi-role tasks.

```yaml
allow_duplicates: yes
```

## Dependencies
Roles can be dependent on other roles. These dependencies are defined in the ```roles/[role_name]/meta/main.yml``` file.

```yaml
dependencies:
    - role: apache
```

When invoking a role, any dependent roles will be confirmed/installed and run before proceeding.