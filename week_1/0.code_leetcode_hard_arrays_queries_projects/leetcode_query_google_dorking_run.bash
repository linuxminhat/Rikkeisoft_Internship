#!/bin/bash
# Hàm Google Dorking
google_dork(){
    query="$1"
    encoded_query=$(echo "$query" | sed 's/ /%20/g')
    url="https://www.google.com/search?q=$encoded_query"
    results=$(curl -s -A "Mozilla/5.0" "$url")

    echo "$results" | grep -Eo "http|https://[a-zA-Z0-9./?=_']*" | | sort -u
}

queries=(
    "site:leetcode.com inurl:array site:hard"
)

# Query
for query in "${queries[@]}"; do
    echo "Executing: $query"
    google_dork "$query" > "results_$(echo "$query" | sed 's/[^a-zA-Z0-9]/_/g').txt"
done
echo "Completed Task"
