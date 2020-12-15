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

module.exports = router;
