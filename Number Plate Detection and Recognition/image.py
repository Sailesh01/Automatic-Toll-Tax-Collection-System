import cv2
import numpy as np

image_file = "car1.jpg"
img = cv2.imread(image_file)
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
cv2.imshow('img', gray)
cv2.waitKey(0)

haar_file = "haarcascade_russian_plate_number.xml"

plates_cascade = cv2.CascadeClassifier(haar_file)

plates = plates_cascade.detectMultiScale(gray, 1.2, 4)

for (x,y,w,h) in plates:

    cv2.rectangle(img, (x,y), (x+w, y+h), (0,255,0), 1)

    gray_plates = gray[y:y+h, x:x+w]
    color_plates = img[y:y+h, x:x+w]


    height, width = gray_plates.shape
    # print(height, width)

cv2.imshow('img', img)
cv2.waitKey(0)
print('Number of detected licence plates:', len(plates))
