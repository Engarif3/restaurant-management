const Encore = require("@symfony/webpack-encore");
const path = require("path");

Encore
  // Set the directory where all compiled assets will be stored
  .setOutputPath("public/build/")
  // Set the public path used by the web server to access the output path
  .setPublicPath("/build")
  // Enable single runtime file for performance reasons
  .enableSingleRuntimeChunk()

  // Add your main JavaScript entry point
  .addEntry("app", "./assets/app.js") // The path to your JavaScript file

  // Enable SCSS or CSS support (if you're using SCSS or plain CSS)
  .enableSassLoader()

  // Enable PostCSS for Tailwind CSS
  .enablePostCssLoader()

  // Enable source maps in development mode
  .enableSourceMaps(!Encore.isProduction())

  // Enable versioning for caching purposes in production mode
  .enableVersioning(Encore.isProduction())

  // Clean output before build
  .cleanupOutputBeforeBuild()

  // Add the Tailwind CSS file as a style entry (Optional)
  .addStyleEntry("styles", "./assets/styles/app.css"); // The path to your CSS file

module.exports = Encore.getWebpackConfig();
