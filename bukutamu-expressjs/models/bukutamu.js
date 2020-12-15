'use strict';
const {
  Model
} = require('sequelize');
module.exports = (sequelize, DataTypes) => {
  class Bukutamu extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate(models) {
      // define association here
    }
  };
  Bukutamu.init({
    id: {type: DataTypes.BIGINT, primaryKey: true, autoIncrement: true},
    nama: DataTypes.STRING,
    email: DataTypes.STRING,
    website: DataTypes.STRING,
    komentar: DataTypes.STRING
  }, {
    sequelize,
    timestamps: false,
    modelName: 'Bukutamu',
    tableName: 'bukutamu'
  });
  return Bukutamu;
};