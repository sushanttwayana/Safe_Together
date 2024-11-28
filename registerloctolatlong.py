import googlemaps
from dbconfig import *

def changingloc():
    gmaps = googlemaps.Client(key="..........................")
    
    connection = mysql.connector.connect(**db_config)
    try:
        if connection.is_connected():
            cursor = connection.cursor()
            cursor.execute("SELECT * FROM user")
            result = cursor.fetchall()
            for i in result:
                location_name = str(i[13])+','+str(i[11])+','+str(i[10])
                geocode_result = gmaps.geocode(location_name)
                if geocode_result:
                    lat = geocode_result[0]["geometry"]["location"]["lat"]
                    lng = geocode_result[0]["geometry"]["location"]["lng"]
                    cursor.execute("UPDATE user SET latitude = %s, longitude = %s WHERE user_id = %s", (lat, lng, i[0]))
                    connection.commit()
            print("DONE")
    except mysql.connector.Error as er:
        print(f"Error: {er}")        
    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()

if __name__ == '__main__':
    changingloc()