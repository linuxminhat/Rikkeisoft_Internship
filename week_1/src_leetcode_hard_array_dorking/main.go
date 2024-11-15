package main

import (
	"fmt"
	"io/ioutil"
	"net/http"
	"os"
	"regexp"
	"strings"

	"github.com/PuerkitoBio/goquery"
)

func googleDork(query string) map[string]struct{} {
	encodedQuery := strings.ReplaceAll(query, " ", "%20")
	url := fmt.Sprintf("https://www.google.com/search?q=%s", encodedQuery)
	client := &http.Client{}
	req, _ := http.NewRequest("GET", url, nil)
	req.Header.Set("User-Agent", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3")

	resp, _ := client.Do(req)
	defer resp.Body.Close()
	body, _ := ioutil.ReadAll(resp.Body)

	doc, _ := goquery.NewDocumentFromReader(strings.NewReader(string(body)))

	links := make(map[string]struct{})
	doc.Find("a").Each(func(index int, item *goquery.Selection) {
		href, exists := item.Attr("href")
		if exists {
			matched, _ := regexp.MatchString(`http[s]?://[a-zA-Z0-9./?=_-]*`, href)
			if matched {
				links[href] = struct{}{}
			}
		}
	})

	return links
}

func main() {
	queries := []string{
		"site:leetcode.com inurl:array site:hard",
	}

	for _, query := range queries {
		fmt.Printf("Executing: %s\n", query)
		results := googleDork(query)
		resultFile := fmt.Sprintf("results_%s.txt", regexp.MustCompile(`[^a-zA-Z0-9]`).ReplaceAllString(query, "_"))

		file, _ := os.Create(resultFile)
		defer file.Close()

		for link := range results {
			file.WriteString(link + "\n")
		}

		fmt.Printf("Saving Results to %s\n\n", resultFile)
	}

	fmt.Println("Completed Task")
}
