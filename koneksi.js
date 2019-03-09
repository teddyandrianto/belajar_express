let mysql = require('mysql');
const bodyParser = require('body-parser');

let  con= mysql.createConnection({
    host : "localhost",
    user : "root",
    password : "",
    database : "db_rpl_gdc"
});

con.connect(function(err){
    if(err) throw err;
    console.log("koneksi db berhasil")
});

module.exports = con;