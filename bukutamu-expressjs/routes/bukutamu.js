var express = require('express');
var router = express.Router();

const db = require("../models");
const Bukutamu = db.Bukutamu;
const Op = db.Sequelize.Op;

/* GET users listing. */
router.get('/', function(req, res, next) {
    Bukutamu.findAll()
    .then(data => {
      res.send(data);
    })
    .catch(err => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while retrieving bukutamu."
      });
    });
});

router.post('/', function(req, res, next){
    const komentar = Bukutamu.create({ 
        nama: req.body.nama,
        email: req.body.email,
        website: req.body.website,
        komentar: req.body.komentar
    }).then(data => {
        res.send(data);
    });
});

module.exports = router;
