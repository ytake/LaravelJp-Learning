const webpack = require('webpack');
const path = require('path');

module.exports = [{
  module: {
    loaders: [
      {
        test: /\.sass$/,
        loaders: ['style-loader', 'css-loader', 'sass-loader']
      }, {
        test: /\.scss$/,
        loaders: ['style-loader', 'css-loader', 'sass-loader'],
        exclude: path.resolve(__dirname, 'resources/assets/scss')
      }, {
        test: /\.css$/,
        loaders: ['style-loader', 'css-loader']
      }, {
        test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: "url-loader?limit=10000&mimetype=application/font-woff"
      }, {
        test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: "file-loader"
      }
    ]
  },
  entry: './resources/assets/scss/main.js',
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public/style/dist')
  }
}];
