# Working

from geopy.distance import distance
from dbconfig import *
  
# import sys # getting data from php

# data = sys.argv[1]
# data = 'yellow'

def runner():
    connection = mysql.connector.connect(**db_config)
    connection2 = mysql.connector.connect(**db_config)
    center = None
    point = None
    radius = None

    try:
        if connection2.is_connected():
            cursor2 = connection2.cursor()
            cursor2.execute("SELECT * FROM epicenter")
            values = cursor2.fetchall()
            for i in values:
                lat = i[1]
                lon = i[2]
                radius = i[3]
            center=(lat,lon) #working 
            print(center)  
            
        if connection.is_connected():
            print("Connected to")

            # USER db cursor
            cursor = connection.cursor()
            cursor.execute("SELECT * FROM user")
            result = cursor.fetchall()
            for i in result:
                lat = i[3] # latitude ho yo
                lon = i[4] # 4th ma longitude xa
                # print(lat,lon)
                point = (lat,lon)
                print(point)
                dist = distance(center, point).km
                #print(i[0])
                
                if dist<=radius:
                    cursor.execute("UPDATE user SET `alert status` = %s WHERE user_id = %s",('yellow', i[0]))
                    connection.commit()
                    print("Updated")
                print("Check")
            print("Done")
                    
        else:
            print("NO DB connection")
    except mysql.connector.Error as err:
        print(f"Error:{err}")
    finally:
        if connection.is_connected():
            cursor2.close()
            connection.close()
            print("CLOSE")
        print("FONE")

if __name__ == '__main__':
    runner()

# def check_points_within_radius(center, radius, points):
#     results = []
#     for point in points:
#         dist = distance(center, point).km
#         if dist<=radius:
#             results.append(point)
#             # print(dist)

