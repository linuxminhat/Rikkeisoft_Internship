from flask import Flask, render_template, request
import requests
import os

app = Flask(__name__)

# Lấy giá trị API_KEY và CX từ biến môi trường
API_KEY = os.getenv('API_KEY')
CX = os.getenv('CX')

@app.route('/', methods=['GET', 'POST'])
def index():
    results = []
    if request.method == 'POST':
        query = request.form['query']
        search_url = f"https://www.googleapis.com/customsearch/v1?q={query}&key={API_KEY}&cx={CX}"
        response = requests.get(search_url)
        data = response.json()
        results = data.get('items', [])
    return render_template('index.html', results=results)

if __name__ == '__main__':
    app.run(debug=True)
