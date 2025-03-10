# Ansible Forks
Ansible uses `forks` to talk to multiple hosts simultaneously. The `forks` value sets the maximum number of hosts that can be worked on in parallel.

## Default `forks` value
The default value for `forks` is 5. Most servers have enough resources to handle a value of 10-15, but even very large servers should not generally exceed 50.

```
$ grep forks /etc/ansible/ansible.cfg
forks = 5
```

NOTE: The `serial` setting is constrained by the `forks` value defined in `ansible.cfg` or by `-f` at runtime).

https://docs.ansible.com/ansible/latest/user_guide/playbooks_strategies.html

## Setting `forks` at runtime (CLI)
Forks can also be set at runtime using `-f`.
```
$ ansible-playbook -f 30 my_playbook.yml
```

## Using `serial` in Playbooks
The number of hosts worked in parallel can be further constrained using `serial` in a playbook. The `serial` keyword uses a Batch-style strategy.

```yaml
serial: 5
```
```yaml
serial:
  - 5
  - 10
```