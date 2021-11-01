/* eslint-disable no-undef */
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const nodeEnv = process.env.NODE_ENV || 'production';

module.exports = {
    devtool: 'source-map',
    entry: {
        js: [
            'babel-polyfill',
            './app/code/Training/Base/view/frontend/webanana/js/bananacode.js',
        ],
        styles: './app/code/Training/Base/view/frontend/webanana/css/bananacode.scss'
    },
    output: {
        filename: '../app/code/Training/Base/view/frontend/web/[name]/bananacode.[name]',
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../app/code/Training/Base/view/frontend/web/css/bananacode.css',
        }),
    ],
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                options: {
                    presets: ["@babel/preset-env"]
                }
            },
            {
                test: /scripts\/lib\/modernizr\.js$/,
                loader: 'imports-loader?this=>window!exports-loader?window.Modernizr'
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf|svg)$/,
                use: [
                    'file-loader',
                ],
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader
                    },
                    'css-loader?url=false',
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: () => [require('autoprefixer'), require('postcss-nested')]
                        }
                    },
                    'sass-loader',
                ],
            },
        ]
    },
    mode: nodeEnv,
    optimization: {
        minimize: true
    },
    stats: 'errors-only'
};