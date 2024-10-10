#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/wait.h>

int main() {
    pid_t pid = fork();   

    if (pid == 0) {
        printf("This is the child process.\n");
        exit(0);
    } else if (pid > 0) {
       
        printf("This is the parent process. Child PID: %d\n", pid);
        wait(NULL); 
    } else {
        perror("fork failed");
        exit(1);
    }

    return 0;
}
