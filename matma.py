from flask import Flask, render_template
import requests
app = Flask(__name__)

@app.route('/')
def index():
    url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&chart=mostPopular&maxResults=50&regionCode=pl&fields=etag%2CeventId%2Citems%2Ckind%2CnextPageToken%2CpageInfo%2CprevPageToken%2CtokenPagination%2CvisitorId&key=AIzaSyAMYb4k2A2-ubLqmscxbtSnneriw_c8p2o'
    r = requests.get(url)
    x = r.json()
    items = x['items']
    return render_template("policzono.html", items = items)


if __name__ == '__main__':
    app.run()
