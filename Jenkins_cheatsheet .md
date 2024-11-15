# Jenkins Cheat Sheet

## Installation

### Steps to Install Jenkins on Ubuntu:
1. **Install Java**  
   ```bash
   sudo apt update
   sudo apt install openjdk-8-jdk
2. **Add Jenkins Repository**
wget -q -O - https://pkg.jenkins.io/debian/jenkins.io.key | sudo apt-key add –
3. **Add Jenkins Repo to the System**
sudo sh -c 'echo deb http://pkg.jenkins.io/debian-stable binary/ > /etc/apt/sources.list.d/jenkins.list'
4. **Install Jenkins**
sudo apt update
sudo apt install jenkins
5. **Verify Installation**
systemctl status jenkins
6. **Access Jenkins**
Visit http://localhost:8080 once Jenkins is running.
7. **Most Commonly Used Jenkins Plugins**
Jenkins has over 2000 plugins. Popular plugins include:
Maven
Git
Ant
Docker
Amazon EC2
HTML Publisher
Copy Artifact
Steps to Install Plugins:
Go to Jenkins Dashboard → Manage Jenkins → Manage Plugins → Available.
In the filter text field, enter the plugin name you want to install.

8. **Different Types of Jenkins Jobs**
Jenkins offers various job types for building projects:

Freestyle
General-purpose build jobs offering maximum flexibility.

Pipeline
Runs the entire software development workflow as code.

Multiconfiguration
Runs the same build job in different environments.

Folder
Organizes and categorizes similar jobs in folders.

GitHub Organization
Scans your GitHub organization and creates Pipeline jobs for repositories containing a Jenkinsfile.

Multibranch Pipeline
Implements different Jenkinsfiles for branches of the same project.

Build Pipeline
Chains several jobs together and runs them in sequence.

9. **Build Pipeline Example**
Create 3 Freestyle Jobs: Job1, Job2, Job3
Chain the Jobs:
Job1 → Post Build → Build other projects → Job2
Job2 → Post Build → Build other projects → Job3
Create Build Pipeline View:
Go to Jenkins Dashboard → Add View → Enter Name → Build Pipeline View → OK → Configure → Select Initial Job → Job1 → OK.
Run the Build Pipeline.

10. **Jenkins Pipeline**
A Jenkins Pipeline runs the entire workflow as code, stored in a Jenkinsfile written using the Groovy DSL.

Syntax Options:
Scripted Pipeline
Code is written in the Jenkins UI instance and enclosed in the node block.

groovy
Copy code
node {
    scripted pipeline code
}
Declarative Pipeline
Code is written locally, checked into SCM, and enclosed in the pipeline block.

groovy
Copy code
pipeline {
    declarative pipeline code
}
Key Concepts:
Pipeline: User-defined block containing all stages.
Node: Machine executing the entire workflow.
Agent: Allocates an executor for builds.
any: Runs on any agent.
none: No global agent; each stage defines its agent.
label: Runs on a specific labeled agent.
docker: Runs in a Docker container.
Stages: Tasks performed by the pipeline.
Steps: Actions executed in sequence within a stage.

11. **Create Your First Jenkins Pipeline**
Log into Jenkins → Select New Item from the Dashboard.
Enter Pipeline Name → Select Pipeline Project → Click OK.
Scroll to the Pipeline Section:
For Scripted Pipeline: Choose Pipeline Script and type your code.
For Declarative Pipeline: Select Pipeline Script from SCM, choose SCM, and enter the repository URL.
Define Script Path: Specify the Jenkinsfile name in SCM.
Click Apply and Save.
Example:
groovy
Copy code
node {
    stage('SCM Checkout') {
        // Checkout from your SCM
    }
    stage('Build') {
        // Compile code, install dependencies, and test
    }
    stage('Test') {
        // Perform UAT
    }
    stage('Deploy') {
        // Deploy to production
    }
}

12. **Jenkins Tips and Tricks**
Start, Stop, and Restart Jenkins:
bash
Copy code
sudo service jenkins restart
sudo service jenkins stop
sudo service jenkins start
Deploy a Custom Build of a Core Plugin:
Stop Jenkins.
Copy the custom HPI to $JENKINS_HOME/plugins.
Delete the previously expanded plugin directory.
Create an empty file <plugin>.hpi.pinned.
Start Jenkins.
Schedule a Build Periodically:
Jenkins uses cron expressions to schedule jobs:
Syntax: (Minute Hour DOM Month DOW)
Example:

bash
Copy code
H/2 * * * *  # Schedule every 2 minutes


markdown
Copy code
# Jenkins Cheat Sheet

## Installation

### Steps to Install Jenkins on Ubuntu:
1. **Install Java**  
   ```bash
   sudo apt update
   sudo apt install openjdk-8-jdk
Add Jenkins Repository
bash
Copy code
wget -q -O - https://pkg.jenkins.io/debian/jenkins.io.key | sudo apt-key add –
Add Jenkins Repo to the System
bash
Copy code
sudo sh -c 'echo deb http://pkg.jenkins.io/debian-stable binary/ > /etc/apt/sources.list.d/jenkins.list'
Install Jenkins
bash
Copy code
sudo apt update
sudo apt install jenkins
Verify Installation
bash
Copy code
systemctl status jenkins
Access Jenkins
Visit http://localhost:8080 once Jenkins is running.
Most Commonly Used Jenkins Plugins
Jenkins has over 2000 plugins. Popular plugins include:

Maven
Git
Ant
Docker
Amazon EC2
HTML Publisher
Copy Artifact
Steps to Install Plugins:
Go to Jenkins Dashboard → Manage Jenkins → Manage Plugins → Available.
In the filter text field, enter the plugin name you want to install.
Different Types of Jenkins Jobs
Jenkins offers various job types for building projects:

Freestyle
General-purpose build jobs offering maximum flexibility.

Pipeline
Runs the entire software development workflow as code.

Multiconfiguration
Runs the same build job in different environments.

Folder
Organizes and categorizes similar jobs in folders.

GitHub Organization
Scans your GitHub organization and creates Pipeline jobs for repositories containing a Jenkinsfile.

Multibranch Pipeline
Implements different Jenkinsfiles for branches of the same project.

Build Pipeline
Chains several jobs together and runs them in sequence.

Build Pipeline Example
Create 3 Freestyle Jobs: Job1, Job2, Job3
Chain the Jobs:
Job1 → Post Build → Build other projects → Job2
Job2 → Post Build → Build other projects → Job3
Create Build Pipeline View:
Go to Jenkins Dashboard → Add View → Enter Name → Build Pipeline View → OK → Configure → Select Initial Job → Job1 → OK.
Run the Build Pipeline.
Jenkins Pipeline
A Jenkins Pipeline runs the entire workflow as code, stored in a Jenkinsfile written using the Groovy DSL.

Syntax Options:
Scripted Pipeline
Code is written in the Jenkins UI instance and enclosed in the node block.

groovy
Copy code
node {
    scripted pipeline code
}
Declarative Pipeline
Code is written locally, checked into SCM, and enclosed in the pipeline block.

groovy
Copy code
pipeline {
    declarative pipeline code
}
Key Concepts:
Pipeline: User-defined block containing all stages.
Node: Machine executing the entire workflow.
Agent: Allocates an executor for builds.
any: Runs on any agent.
none: No global agent; each stage defines its agent.
label: Runs on a specific labeled agent.
docker: Runs in a Docker container.
Stages: Tasks performed by the pipeline.
Steps: Actions executed in sequence within a stage.
Create Your First Jenkins Pipeline
Log into Jenkins → Select New Item from the Dashboard.
Enter Pipeline Name → Select Pipeline Project → Click OK.
Scroll to the Pipeline Section:
For Scripted Pipeline: Choose Pipeline Script and type your code.
For Declarative Pipeline: Select Pipeline Script from SCM, choose SCM, and enter the repository URL.
Define Script Path: Specify the Jenkinsfile name in SCM.
Click Apply and Save.
Example:
groovy
Copy code
node {
    stage('SCM Checkout') {
        // Checkout from your SCM
    }
    stage('Build') {
        // Compile code, install dependencies, and test
    }
    stage('Test') {
        // Perform UAT
    }
    stage('Deploy') {
        // Deploy to production
    }
}
Jenkins Tips and Tricks
Start, Stop, and Restart Jenkins:
bash
Copy code
sudo service jenkins restart
sudo service jenkins stop
sudo service jenkins start
Deploy a Custom Build of a Core Plugin:
Stop Jenkins.
Copy the custom HPI to $JENKINS_HOME/plugins.
Delete the previously expanded plugin directory.
Create an empty file <plugin>.hpi.pinned.
Start Jenkins.
Schedule a Build Periodically:
Jenkins uses cron expressions to schedule jobs:
Syntax: (Minute Hour DOM Month DOW)
Example:

bash
Copy code
H/2 * * * *  # Schedule every 2 minutes
13. **Snippet Generator**
The Snippet Generator helps users generate code for individual pipeline steps.

Steps:
Create a Pipeline Job → Configure.
Select Pipeline Script from the pipeline definition.
Click Pipeline Syntax → Snippet Generator.
Select a Step (e.g., Git), enter the repository URL.
Generate Pipeline Script.
Copy the generated script to the Pipeline UI.