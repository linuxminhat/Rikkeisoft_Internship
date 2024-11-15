package main

import (
	"compress/gzip"
	"fmt"
	"io"
	"os"
	"path/filepath"
)

func main() {

	logDirectory := "/var/log"

	err := os.Chdir(logDirectory)
	if err != nil {
		fmt.Println("Error changing directory:", err)
		return
	}

	files, err := os.ReadDir(logDirectory)
	if err != nil {
		fmt.Println("Error reading directory:", err)
		return
	}

	for _, file := range files {
		if file.IsDir() {
			continue
		}

		filename := file.Name()

		if filepath.Ext(filename) == ".1" || filepath.Ext(filename) == ".old" {
			filePath := filepath.Join(logDirectory, filename)

			f_in, err := os.Open(filePath)
			if err != nil {
				fmt.Println("Error opening file:", err)
				continue
			}
			defer f_in.Close()

			f_out, err := os.Create(filePath + ".gz")
			if err != nil {
				fmt.Println("Error creating gzip file:", err)
				continue
			}
			defer f_out.Close()

			gzipWriter := gzip.NewWriter(f_out)
			defer gzipWriter.Close()

			_, err = io.Copy(gzipWriter, f_in)
			if err != nil {
				fmt.Println("Error writing to gzip file:", err)
				continue
			}

			// Xóa file gốc sau khi nén
			err = os.Remove(filePath)
			if err != nil {
				fmt.Println("Error deleting original file:", err)
			}
		}
	}

	fmt.Println("Completed compressing old log files.")
}
