const connection = require('../koneksi');
const express = require('express');
const admin = require('../controller/ControllerAdmin');
const app = express();
const session = require('express-session');
const bodyParser = require('body-parser');
const md5 = require('md5');
const hash = require('password-hash');
const path = require('path');
const jwt =  require('jsonwebtoken');
const secret = {secret:'jsismagic'};
app.set('view engine', 'ejs');
app.use(session({
	secret: 'gsgfd',
	resave: true,
	saveUninitialized: true
}));
app.use(bodyParser.urlencoded({extended : true}));
app.use(bodyParser.json());
app.use(express.static('public'));
app.get('/login', function(req, res){
   res.render('login_form');
});

app.post('/auth', function(request, response) {
	let nim = request.body.nim;
    let password = md5(request.body.password);
	if (nim && password) {
		connection.query('SELECT * FROM tbl_user WHERE nim = ? AND password = ?', [nim, password], function(error, results, fields) {
			if (results.length = 1) {
				request.session.loggedin = true;
                request.session.nim = nim;
                request.session.nama = results[0]['nama'];
                response.redirect('/user');
			} else {
				response.send('Incorrect Username and/or Password!');
			}			
			response.end();
		});
	} else {
		response.send('Please enter Username and Password!');
		response.end();
	}
});

/* GET home page. */
app.get('/user', function(req, res) {
    if(req.session.loggedin){
    connection.query("SELECT * FROM tbl_user",function(error,rows,fields){
        try{
            res.render('data_user',{
                data: rows,
                login: req.session.nama
            });
        }catch(error){
            console.log(error)
        }
    });
    }else{
        res.redirect('/login');
    }
});

app.get('/logout', function(request,response){
    request.session.destroy();
    response.redirect('/login');
})

app.post('/user', function(req, res) {
    if(req.session.loggedin){
    let nim = req.body.nim;
    let nama = req.body.nama;
    let email = req.body.email;
    let password =  md5(req.body.password)
    connection.query('INSERT INTO tbl_user (nim,nama,email,password) values (?,?,?,?)',[nim,nama,email,password],function(error,rows,fields){
        try{
           res.redirect('/user');
        }catch(error){
            console.log(error)
        }
    });
    }else{
        res.redirect('/login');
    }
});

app.post('/user/password', function(req, res) {
    if(req.session.loggedin){
    let id_user = req.body.id_user;
    let password =  md5(req.body.password);
    console.log(id_user);
    connection.query('UPDATE tbl_user SET password = ? WHERE id_user =?',[password,id_user],
    function(error,rows,fields){
        try{
           res.redirect('/user');
        }catch(error){
            console.log(error)
        }
    });
    }else{
        res.redirect('/login');
    }
});

//jsonwebtoken

app.post('/loginjwt',function (req, res) {
	
		var password= md5(req.body.password);
		var nim= req.body.nim;    
	connection.query('SELECT * FROM tbl_user WHERE nim = ? AND password = ?', [nim, password],function(err,rows){
		if(err) {
			res.json({"Error" : true, "Message" : "Error executing MySQL query"});
		}
		else {
            
			if(rows.length==1){
                var data = {
                    id_user: rows[0]['id_user'],
                    nim: rows[0]['nim'],
                    email: rows[0]['email'],
                    nama: rows[0]['nama'],
                    role: rows[0]['role'] 
                };
                var token = jwt.sign(data, secret.secret, {
					expiresIn: 1440
                });
                var id_user= rows[0].id_user;

				connection.query("INSERT INTO tbl_access_token (id_user,access_token) values (?,?)",[id_user,token], function(err,rows){
					if(err) {
						res.json({"Error" : true, "Message" : "Error executing MySQL query"});
					} else {
						res.json({
							success: true,
							message: 'Token generated',
							token: token,
							currUser: id_user
						});
           				 } // return info including token
           				});
			}
			else {
				res.json({"Error" : true, "Message" : "wrong email/password combination"});
			}

		}
	});
});

app.post('/verifyToken' , function (req, res,next) {
    console.log(req.body.token);
	var token = req.body.token || req.query.token || req.headers['x-acces-token'];
	 if (token) {
        jwt.verify(token, secret.secret, function (err, currUser) {
			if (err) {
				res.send(err);
			} else {
				res.redirect('/login');
				next();
			}
		});
	}
	 else {
		// send not found error
		//res.send(401, " ");
		res.status(401).send("Invalid Acces");
	}
});



// router.get('/user', admin.getuser);
// router.get('/user/:nim', admin.showuser);
// router.post('/user', admin.storeuser);
// router.put('/user', admin.updateuser);
// router.delete('/user', admin.deleteuser);

module.exports = app;
