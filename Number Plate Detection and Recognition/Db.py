import pymysql
from datetime import datetime, date
from main import number_list

now = datetime.now()




def createTable():
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="toll_booth")
    cur = conn.cursor()
    cur.execute(""" CREATE TABLE IF NOT EXISTS info 
    (   
        plate_number VARCHAR(20) PRIMARY KEY, 
        name VARCHAR(30),
        bill INT,
        balance INT,
        phone CHAR(10),
        email VARCHAR(30),
        count INT) """)
    conn.commit()
    conn.close()


def searchData(plate_number):
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="registration")
    cur = conn.cursor()
    cur.execute("SELECT * from register1 WHERE licenseno = '%s'" % (plate_number))
    conn.commit()
    conn.close()
    return True

def insertData(plate_number, name, bill, balance, phone, email, count):
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="registration")
    cur = conn.cursor()
    cur.execute("INSERT INTO register1 VALUES (%s,%s,%s,%s,%s,%s,%s)", (plate_number, name, bill, balance, phone, email, count))
    conn.commit()
    conn.close()

def insert_bill_info(plate_number, date, time, payment):
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="registration")
    cur = conn.cursor()
    cur.execute("INSERT INTO wallet VALUES (NUll, %s,%s,%s,%s)", (plate_number, date, time, payment))
    conn.commit()
    conn.close()



def get_balance(number):
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="registration")
    cur = conn.cursor()
    cur.execute("SELECT amount FROM register1 WHERE licenseno=%s", (number))
    rows = cur.fetchall()
    conn.commit()
    conn.close()
    return rows



def updateBalance(plate_number):
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="registration")
    cur=conn.cursor()
    cur.execute("UPDATE register1 SET amount = amount - 60 WHERE licenseno=%s", (plate_number))
    conn.commit()
    conn.close()



for number in number_list:

    res = searchData(number)


    if (res):
        balance = get_balance(number)
        if balance[0][0] >= 60:
            current_time = now.strftime("%H:%M:%S")
            current_date = date.today()
            payment = "Paid"
            insert_bill_info(number, current_date, current_time, payment)
            updateBalance(number)
        else:
            current_time = now.strftime("%H:%M:%S")
            current_date = date.today()
            payment = "Due"
            insert_bill_info(number, current_date, current_time, payment)
        print("Detected license Plate Number: " + number)

    else:
        print(number + " is not registered in the database.")



