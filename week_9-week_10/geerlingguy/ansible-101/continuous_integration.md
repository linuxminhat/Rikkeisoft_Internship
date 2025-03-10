# Continuous Integration

## Ansible Modules
```yaml
tasks:
  - debug:
    msg:

  - debug:
    var:

  - fail:
    msg: 
    when:

  - assert:
    that:
```

## yamllint
`pip3 install yamllint`

`.yamllint` file
```yaml
---
extends: default

rules:
  truthy:
    allowed-values:
      - 'true'
      - 'false'
      - 'yes'
      - 'no'
```

`yamllint .`

## Ansible Syntax Check
Perform basic syntax check. Does not perform any tasks, so runtime tasks like `include_tasks` will not be fully vetted.

`ansible-playbook playbook.yml --syntax check`

## Ansible Best Practice Check
Provide comments and suggestions on many best practices, e.g. naming tasks, avoiding `shell` module, suggestions around using `changed_when` appropriately.

`pip3 install ansible-lint`

`ansible-lint playbook.yml`

Can use `.ansible-lint` file to ignore certain suggestions/comments.