# Molecule
Initially written for Ansible Roles, but can be used against playbooks.

Create a new role with molecule:
`molecule init role myrole`

Then test it:
`molecule test`

And test it but leave the container running for debugging:
`molecule converge`

Set a 'breakpoint' using `fail:` in the tasks.

`~/roles/myrole/molecule/default/molecule.yml`
```yml
---
dependency:
  name: galaxy
driver:
   name: docker
platforms:
  - name: instance
    image: docker.io/pycontribs/centos:7
    pre_build_image: true
provisioner:
  name: ansible
verifier:
  name: ansible
```

`~/roles/myrole/molecule/default/converge.yml`
```yml
---
- name: Converge
  hosts: all
  tasks:
    - name: "Include myrole"
      include_role:
        name: "myrole"
```