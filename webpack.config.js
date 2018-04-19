const path = require('path');

module.exports = {
    // mode: "production",
    mode: "development",
    entry: './src/js/app.js',
    output: {
        filename: "bundle.js",
        path: path.join(__dirname, 'dist/js')
    },
    devtool: 'source-map'
};