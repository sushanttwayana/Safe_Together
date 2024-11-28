from twilio.rest import Client
from dbconfig import *
import googlemaps
def messagesender():

    # Twilio credentials
    account_sid = '...................'  # Replace with your Twilio Account SID
    auth_token = '.................'    # Replace with your Twilio Auth Token

    # Initialize the Twilio client
    client = Client(account_sid, auth_token)

    # Message details
    from_phone = '+.............'  # Replace with your Twilio phone number
    to_phone = '+.............'              # Replace with the recipient's phone number in Nepal
    message_body = 'Hello from Twilio! This is a test message.'

    print("HERE")
if __name__ == '__main__':
    messagesender()
