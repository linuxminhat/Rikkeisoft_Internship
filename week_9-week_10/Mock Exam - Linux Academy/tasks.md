Configure Ansible to use the inventory stored in */etc/ansible/exam_inv/* by default. (perform on control1)
 
Note the inventory contained in */etc/ansible/exam_inv/inv.py* does not work correctly. Diagnose and fix the issue. (perform on control1) NOTE: you should be able to fix the issues without modifying the contents of the file!
 
Create an Ansible host group in the file */etc/ansible/exam_inv/group* called *testservers* that only contains *node2*. (perform on control1)
 
Increase the default timeout to 60 seconds by default for Ansible. (perform on control1)
 
Configure Ansible to run 10 threads by default. (perform on control1)
 
Edit the file */home/ansible/exam/ad-hoc.sh* and fix the syntax errors within the file. Note: use the comments as hints
 
Create an encrypted vault file containing the text "secret: bluebird" and stored it in the file */home/ansible/exam/secure* on the ansible control node *control1*. Make a note of the password used so you may access the file contents later.
 
Create and run a playbook in */home/ansible/exam/security.yml* on *control1* that uses the previously created vault */home/ansible/exam/secure*. The playbook will print the value of "secret" in a file called */mnt/classified* on localhost *control1*.
 
Edit the shell script in */home/ansible/exam/ad-hoc-2.sh* on the Ansible control node *control1* and add Ansible `ad-hoc` commands that will complete the tasks described in the file contents.
 
Create a playbook in */home/ansible/exam/fact.yml* on *control1* that prints the following information "specific to each host" in */var/www/html/facts.htm* for each of the servers in the web group: <DISTRIBUTION>: <HOST_IPV4_ADDR> <MAC_ADDR>
 
Create a role in */home/ansible/exam/roles/httpdServer* on *control1* that installs the package *httpd*, starts the service, and enables the service on boot. The role should have a handler called "restart httpd" that restarts the httpd service as well.

Create a playbook in */home/ansible/exam/webserver.yml* on *control1* that applies the *httpdServer* role to the *web* group. It should also complete the task noted in the description (click the "?" icon next to the task).
 
  Deploy a file to /var/www/html/index.html containing the hostname of the host where it is deployed.
  Change LogLevel to error in /etc/httpd/conf/httpd.conf.
  Restart httpd only on httpd.conf file change.
 
Create a playbook in /home/ansible/exam/install_role.yml that installs a role of your choosing using ansible-galaxy to /home/ansible/exam/roles/ on the ansible control host
 
View the file *http://files.example.com/user_list.yml* from *control1*. Create a playbook in */home/ansible/exam/users.yml* that follows the instructions provided in the file.
 
Create a playbook in */home/ansible/exam/unarchive.yml* that downloads *http://files.example.com/files.tgz* and unarchives the tarball into */mnt/* on the Ansible control node.
 
Create a playbook in */home/ansible/exam/make_secret.yml* that tries to create a file in */mnt/secret* on *control1* using a block group: don't create a directory. If the task fails, the message "Unable to create secret file" should be output in STDOUT.
 
Create a playbook in */home/ansible/exam/break.yml* on *control1* that tries to install a package called *fluffy* on *node2*. The playbook continues running if the package install fails and will output the message "Attempted fluffy install!" in STDOUT.
