import json
data = None






def locsender():
    with open("data.json", "r") as file:
        data = json.load(file)
    