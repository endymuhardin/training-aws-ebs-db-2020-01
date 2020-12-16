require('dotenv').config();

dbConfig  = {
  "development": {
    "username": process.env.RDS_USERNAME || "bukutamu",
    "password": process.env.RDS_PASSWORD || "bukutamu123",
    "database": process.env.RDS_DB_NAME || "bukutamu_expresssequelize",
    "host": process.env.RDS_HOSTNAME || "127.0.0.1",
    "dialect": "mysql"
  },
  "test": {
    "username": "root",
    "password": null,
    "database": "database_test",
    "host": "127.0.0.1",
    "dialect": "mysql"
  },
  "production": {
    "username": "root",
    "password": null,
    "database": "database_production",
    "host": "127.0.0.1",
    "dialect": "mysql"
  }
};

module.exports = dbConfig;