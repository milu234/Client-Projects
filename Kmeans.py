import csv
import pymysql

conn = pymysql.connect(host = 'localhost',database = 'ip',user = 'root',password = '');
cursor = conn.cursor()
query_string = "Insert into details(name, conatct)"
with open('C:/Users/Milan.DESKTOP-NG9HRFU/Downloads/MD.csv','r')as _filehandler:
    csv_file_reader=csv.DictReader(_filehandler)
    for row in csv_file_reader:
        first_name = row['first_name'];
        contact = row['contact'];
        

        name = row['first_name'] 
        
        query_string = "INSERT INTO details(id,name,contact)"
        params = "VALUES('"+"','" + name + "','" + contact + "')"
        
        query_string+=params
        try:
            cursor.execute(query_string)
            conn.commit()
            print(query_string)
        except:
            conn.rollback()
            print(query_string)
