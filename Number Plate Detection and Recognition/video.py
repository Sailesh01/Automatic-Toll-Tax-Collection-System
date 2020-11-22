import cv2
import numpy as np

#
haar_file = "haarcascade_russian_plate_number.xml"

plates_cascade = cv2.CascadeClassifier(haar_file)

filename = "video.MOV"

cap = cv2.VideoCapture(filename)

possible_plates = []



while cap.isOpened():
    ret, frame = cap.read()
    if ret == True:
        gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
        plates = plates_cascade.detectMultiScale(gray, 1.2, 4)
        for (x,y,w,h) in plates:
            x = x+15
            y = y+12
            w = w-35
            h = h-25
            cv2.rectangle(frame, (x, y), (x + w, y + h), (0, 255, 0), 1)
            # print(x)
            if x < 200:
                probable_plate = frame[y:y+h, x:x+w]
                possible_plates.append(probable_plate)
                # cv2.imwrite("frame"+str(count)+".jpg", probable_plate)
                # count += 1
        cv2.imshow('Cars', frame)
        if cv2.waitKey(1) & 0xFF == ord('q'):
            break
    else:
        break
cap.release()
cv2.destroyAllWindows()


