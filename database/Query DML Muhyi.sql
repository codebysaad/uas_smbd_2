INSERT INTO Users VALUES
('adm01', 'Muhyi', '123456789', 'admin'),
('usr01', 'Fais', 'fais123', 'user'),
('usr02', 'Rahayu', 'rahay123', 'user')

INSERT INTO Barang VALUES
('brg2021001', 'Kursi Chitose', 'Kursi', 'Baik'),
('brg2021002', 'Meja Tamu', 'Meja', 'Baik'),
('brg2021003', 'Bola Basket', 'Alat Olahraga', 'Rusak'),
('brg2021004', 'Laptop', 'TIK', 'Baik'),
('brg2021005', 'AC Window', 'Elektronik', 'Baik'),
('brg2021006', 'Motor Viar', 'Kendaraan', 'Baik'),
('brg2021007', 'Monitor 50inch', 'Elektronik', 'Rusak Berat'),
('brg2021008', 'TV Samsung LED 40inch', 'Elektronik', 'Baik'),
('brg2021009', 'Tempat Tidur', 'Alat Rumah Tangga', 'Baik'),
('brg2021010', 'Kasur', 'Alat Rumah Tangga', 'Rusak')

INSERT INTO Inventory VALUES
('brg20210011503001', 'brg2021001', 'usr01'),
('brg20210011503002', 'brg2021004', 'usr02'),
('brg20210011503003', 'brg2021003', 'usr01'),
('brg20210011503004', 'brg2021002', 'usr01'),
('brg20210011503005', 'brg2021008', 'usr02'),
('brg20210011503006', 'brg2021009', 'usr02'),
('brg20210011503007', 'brg2021010', 'usr02'),
('brg20210011503008', 'brg2021006', 'usr01'),
('brg20210011503009', 'brg2021005', 'usr01'),
('brg20210011503010', 'brg2021007', 'usr02')