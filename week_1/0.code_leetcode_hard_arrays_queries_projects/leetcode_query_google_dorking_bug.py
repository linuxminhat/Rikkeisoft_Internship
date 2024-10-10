import requests
from bs4 import BeautifulSoup
import re
from typing import Set

def google_dork(query: str) -> Set[str]:
    encoded_query: str = query.replace(" ", "%20")
    url: str = f"https://www.google.com/search?q={encoded_query}"
    headers: dict[str, str] = {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3"
    }
    
    response = requests.get(url, headers=headers)
    soup = BeautifulSoup(response.text, 'html.parser')

    links: Set[str] = set()
    for a in soup.find_all('a', href=True):
        href: str = a['href']
        if re.match(r'http[s]?://[a-zA-Z0-9./?=_-]*', href):
            links.add(href)
    
    return links

queries: list[str] = [
    "site:leetcode.com inurl:array site:hard"
]

# Thực hiện truy vấn
for query in queries:
    print(f"Executing: {query}")
    results: Set[str] = google_dork(query)
    result_file: str = f"results_{re.sub(r'[^a-zA-Z0-9]', '_', query)}.txt"
    
    with open(result_file, 'w') as f:
        for link in results:
            f.write(link + "\n")
    
    print(f"Saving Results to {result_file}\n")

print("Completed Task")
