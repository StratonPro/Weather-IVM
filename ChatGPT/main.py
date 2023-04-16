import requests
import json
import tkinter as tk
from dotenv import load_dotenv
import os
load_dotenv()

root = tk.Tk() # create the main application window
root.geometry("300x300") # set window size
root.title("Weather") # set window title

def get_weather(city):
     api_key = os.getenv("API_KEY") # getting the value of the API_KEY variable from the .env file
     url = f"https://api.openweathermap.org/data/2.5/weather?q={city}&appid={api_key}&units=metric" # generating a URL for weather query
     response = requests.get(url) # make a request to the OpenWeatherMap API
     if response.status_code != 200: # check the status code of the response to the request
         label['text'] = "Error" # output an error message to the label
     else:
         data = json.loads(response.text) # convert the response to JSON format and store the data in the data variable
         temperature = data['main']['temp'] # get temperature from response data
         description = data['weather'][0]['description'] # get weather description from response data
         label['text'] = f"Temperature: {temperature}°C\nDescription: {description}" # output weather information to the label


entry = tk.Entry(root) # create entry widget to enter city name
entry.pack() # placing the widget on the form
button = tk.Button(root, text="Get the weather", command=lambda: get_weather(entry.get())) # create a button and bind the get_weather function to its click event
button.pack() # placing a button on a form


label = tk.Label(root, text="") # create a label to display weather information
label.pack() # placing a label on the form


root.mainloop() # start the application's main event loop
