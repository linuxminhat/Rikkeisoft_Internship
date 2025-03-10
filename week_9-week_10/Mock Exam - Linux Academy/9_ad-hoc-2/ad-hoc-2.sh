#!/bin/sh

## Write Ansible ad-hoc commands below

# Create new file called /opt/test.sh
ansible localhost -b -m file -a "path=/opt/test.sh state=touch"

# Set owner of the file to ansible
ansible localhost -b -m file -a "path=/opt/test.sh owner=ansible"

# Set mode to 0755
ansible localhost -b -m file -a "path=/opt/test.sh mode=0755"

# Add content to the file:
# #!/bin/sh
# echo hi there
ansible localhost -b -m lineinfile -a 'path=/opt/test.sh line="#!/bin/sh\necho hi there"'