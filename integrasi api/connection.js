const {Client} = require('pg')

const client = new Client ({
    host: "localhost",
    user: "postgres",
    port: 5432,
    password: "postgres",
    database: "SISWA"
})

module.exports = client