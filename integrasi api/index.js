const express = require('express');
const bodyParser = require('body-parser');
const multer = require('multer');
const cors = require('cors');
const client = require('./connection');
const app = express();
const port = 3002;
const path = require('path');
const routes = require('./route');

app.use(express.static(path.join(__dirname, 'view')));
app.use("/public", express.static('public'));
app.use('/', routes);
app.use(cors());
app.use(bodyParser.json());

app.listen(port, () => {
    console.log(`Listening to port ${port}`);
});

client.connect(err => {
    if (err) {
        console.log(err.message);
    } else {
        console.log('Berhasil connect');
    }
});

const storage = multer.diskStorage({
    destination: "public",
    filename: (req, file, cb) => cb(null, file.originalname),
});
const upload = multer({ storage });

app.get('/siswa', (req, res) => {
    client.query('SELECT * FROM siswa', (err, result) => {
        if (!err) {
            res.send(result.rows);
        }
    });
});

app.get('/siswa/:id', (req, res) => {
    const id = parseInt(req.params.id);
    client.query(`SELECT * FROM siswa WHERE id = $1`, [id], (err, result) => {
        if (!err) {
            res.send(result.rows);
        }
    });
});

app.post('/siswa', upload.single('foto'), (req, res) => {
    const { id_siswa, nama_lengkap, jenis_kelamin, tanggal_daftar, kelas } = req.body;
    const imagePath = req.file ? `/public/${req.file.filename}` : null;

    const query = `INSERT INTO siswa (foto, id_siswa, nama_lengkap, jenis_kelamin, tanggal_daftar, kelas) VALUES ($1, $2, $3, $4, $5, $6)`;

    client.query(query, [imagePath, id_siswa, nama_lengkap, jenis_kelamin, tanggal_daftar, kelas], (err, result) => {
        if (err) {
            console.error("Error saat menambahkan data:", err.message);
            res.status(500).send({ error: err.message });
        } else {
            res.send({ message: "Data berhasil ditambahkan", data: req.body });
        }
    });
});

app.put("/siswa/:id", upload.single("foto"), (req, res) => {
    const id = parseInt(req.params.id);
    const { nama_lengkap, jenis_kelamin, kelas } = req.body;
    const imagePath = req.file ? `/public/${req.file.originalname}` : null;

    const query = `UPDATE siswa SET nama_lengkap = $1, jenis_kelamin = $2, kelas = $3, foto = $4 WHERE id = $5`;

    client.query(query, [nama_lengkap, jenis_kelamin, kelas, imagePath, id], (err, result) => {
        if (!err) {
            res.send("Update Success");
        } else {
            console.error("Database Error:", err.message);
            res.status(500).send("Database Error: " + err.message);
        }
    });
});

app.delete('/siswa/:id', (req, res) => {
    const id = parseInt(req.params.id);
    client.query("DELETE FROM siswa WHERE id = $1", [id], (err, result) => {
      if (!err) {
        res.send("Delete Success");
      } else {
        console.error("Database Error:", err.message);
        res.status(500).send("Database Error: " + err.message);
      }
    });
  });





