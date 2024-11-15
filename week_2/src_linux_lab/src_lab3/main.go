package main

import (
	"fmt"
	"os"
	"path/filepath"
	"time"
)

func main() {

	logDir := "/var/log"

	// Thời gian hiện tại
	currentTime := time.Now()

	err := filepath.Walk(logDir, func(path string, info os.FileInfo, err error) error {
		if err != nil {
			return err
		}

		if !info.IsDir() {

			lastAccessTime := info.ModTime()

			if currentTime.Sub(lastAccessTime).Minutes() > 1 {
				// Xóa file
				err := os.Remove(path)
				if err != nil {
					fmt.Println("Error deleting file:", err)
				} else {
					fmt.Printf("Đã xóa file: %s\n", path)
				}
			}
		}
		return nil
	})

	if err != nil {
		fmt.Println("Error walking through directory:", err)
	}

	fmt.Println("Các file log cũ hơn 1 phút đã bị xóa.")
}
