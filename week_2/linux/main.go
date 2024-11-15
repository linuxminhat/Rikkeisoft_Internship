package main

import (
	"fmt"
	"os"
	"os/exec"
	"syscall"
)

func main() {
	cmd := exec.Command(os.Args[0])
	cmd.SysProcAttr = &syscall.SysProcAttr{Setpgid: true}

	err := cmd.Start()
	if err != nil {
		fmt.Println("fork failed")
		os.Exit(1)
	}

	if cmd.Process.Pid == 0 {
		fmt.Println("This is the child process.")
		os.Exit(0)
	} else {
		fmt.Printf("This is the parent process. Child PID: %d\n", cmd.Process.Pid)
		cmd.Wait()
	}
}
