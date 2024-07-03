import serial
import requests

# Konfigurasi serial
ser = serial.Serial('COM6', 9600)  # Sesuaikan 'COM3' dengan port serial Anda

while True:
    if ser.in_waiting > 0:
        data = ser.readline().decode('utf-8').strip()
        print(data)

        if "Weight" in data:
            # Parse weight dari data
            weight = data.split(' ')[1]

            # Kirim data ke server PHP
            payload = {'weight': weight}
            requests.post('http://localhost/save_data.php', data=payload)
