# `max_fail_percentage`
The `max_fail_percentage` sets a threshold of host failures within a Batch that will stop the play completely.

```yaml
---
- name: "Deploy web app but fail/stop play if > 30% failures"
  hosts: all
  max_fail_percentage: 30
  tasks:
    - name: Install dependencies
      # details
    - name: Install MySQL database
      # details
    - name: Start MySQL service
      # details
    - name: Install Python Flask dependencies
      # details
    - name: Run web server
      # details
```