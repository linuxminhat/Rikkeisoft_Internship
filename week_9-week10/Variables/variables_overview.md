# Variable curly braces and quotes
## When a string is expected
When a string is expected, curly braces must be used.

```yaml
{{ var1 }}
```

When a string is expected and the variable is at the beginning, quotes must __start and end__ the string.

```yaml
- debug:
    msg: "{{ var1 }}"

- debug:
    msg: '{{ var1 }}'

- debug:
    msg: "{{ var1 }} is var1."
```
```yaml
# This will work and include the quotes in the output.
- debug:
    msg: '"{{ var1 }}" is var1.'
```
```yaml
# This will not work because it expects a quote at the end
- debug:
    msg: "{{ var1 }}" this will error out
```

Quotes are not required (but will work) when the variable is called later in the string:

```yaml
- debug:
    msg: This is var1: {{ var1 }}

- debug:
    msg: "This is var1: {{ var1 }}"
```
```yaml
# This will work and include the quotes in the output.
- debug:
    msg: This is var1: "{{ var1 }}"
```
```yaml
# This will work and include the quotes in the output.
- debug:
    msg: This "is var1: {{ var1 }}"
```
```yaml
# This example shows that when a variable name is expected you must not use curly braces.
- debug:
    var: var1
```

# Places to find variables
## Inventory
### Per-host (inline)
```
host1 var1=value var2=value
```

### Per-group (INI file)
```
[group-name]
var1: value
var2: value
```

### Separate files
```
./host_vars/host1
./host_vars/host2
./group_vars/group-name
./group_vars/all
```

## In Playbook (per-play, per-task, per-block)

### vars

### vars_files (list of YAML files that contain variables)

### vars_prompt (prompt for variables during playbook execution)

### Inline when variable is expected
```yaml
- debug: var=var1
```

### Inline when string is expected
```yaml
- debug: msg="Look! Here is var1 {{ var1 }}!"
```

## At runtime (CLI)
```
ansible-playbook playbook.yml -e '{"var1":"value", "var2":"value"}
```

## Roles
```
[more examples needed]
```

# Python Style Dictionaries
```yaml
employee
  name: bob
  id: 42
```

Preferred/safer references:
```yaml
employee['name']
bob

employee['id']
42
```

Alternative references which often work but can break under certain circumstances:
```yaml
employee.name
bob

employee.id
42
```

# Magic Variables
## hostvars
Get variables for hosts in the play but outside the current host context
```yaml
{{ hostvars['node1']['ansible_distribution'] }}
```

## groups
List of hosts in 'webservers' group
```yaml
{{ groups['webservers'] }}
```

# Jinja2 Filters
## Convert list to space-separated string
```yaml
{{ groups['webservers'] | join(' ') }}
```

## Convert plaintext password to sha512 hashed string

```yaml
# This is particularly useful for the "user" module which requires hashed passwords
{{ plaintext_pass | string | password_hash('sha512') }}
```