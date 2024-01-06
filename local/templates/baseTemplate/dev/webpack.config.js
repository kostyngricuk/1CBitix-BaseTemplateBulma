const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require("clean-webpack-plugin");

module.exports = {
    mode: "development",
    entry: {
        libs: path.resolve(__dirname, "libs.js"),
        template: path.resolve(__dirname, "template.js"),
    },
    output: {
        path: path.resolve(__dirname, "..", "dist"),
        filename: "baseTemplate.[name].js",
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                ],
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                    'sass-loader'
                ]
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'baseTemplate.[name].css'
        }),
        new CleanWebpackPlugin()
    ]
};