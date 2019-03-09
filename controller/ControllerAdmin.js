const connection = require('../koneksi');
const response = require('../res');
const hash = require('password-hash');
const jwt =  require('jsonwebtoken');
const express = require('express');
const app = express();
app.set('view engine', 'ejs');

app.index = function(req,res){
    res.render('data_user');
};

exports.getuser =  async function(req,res){
    connection.query("SELECT * FROM tbl_user",function(error,rows,fields){
        try{
            res.render('data_user');
        }catch(error){
            console.log(error)
        }
    
})
};

exports.showuser = function(req,res){
    let nim = req.params.nim;
    connection.query("SELECT * FROM tbl_user WHERE nim = ?",[nim],
    function(error,rows,fields){
        if(error){
            console.log(error)
        }else{
            response.ok(rows,res)
        }
    });
};

exports.storeuser = function(req,res){
    let nim = req.body.nim;
    let nama = req.body.nama;
    let email = req.body.email;
    let password = req.body.password;
    let hashpassword = hash.generate(password)
    connection.query('INSERT INTO tbl_user (nim,nama,email,password) values (?,?,?,?)',[nim,nama,email,hashpassword], 
    function(error,rows,fields){
        if(error){
            console.log(error)
        }else{
            response.ok("cerhasil input mahasiswa",res)
        }
    });
};

exports.updateuser= function(req,res){
    let nim = req.body.nim;
    let nama = req.body.nama;
    let email = req.body.email;
    connection.query('UPDATE tbl_user SET nama = ?, email = ? WHERE nim =?',[nama,email,nim],
    function(error,rows,fields){
        if(error){
            console.log(error)
        }else{
            response.ok("data berhasil diubah", res);
        }
    });
};

exports.deleteuser= function(req,res){
    let nim = req.body.nim;
    connection.query('DELETE FROM tbl_user WHERE nim = ?',[nim],
    function(error,rows,fields){
        if(error){
            console.log(error)
        }else{
            response.ok('Delet mahasiswa Berhasil',res)
        }
    });
} ;

exports.login = function(req, res){
    const user = {
      id: 1, 
      username: 'brad',
      email: 'brad@gmail.com'
    }
    jwt.sign({user}, 'secretkey', { expiresIn: '30s' }, (err, token) => {
      res.json({
        token
      });
    });
  }



    