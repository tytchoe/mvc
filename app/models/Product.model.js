module.exports = (sequelize, Sequelize) => {
    const Product = sequelize.define("Product", {
      Name: {
        type: Sequelize.STRING
      },
      Color: {
        type: Sequelize.STRING
      },
      Price: {
        type: Sequelize.INT
      }
    });
  
    return Product;
  };