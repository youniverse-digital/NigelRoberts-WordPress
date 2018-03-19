module.exports = {
    projectName: 'nigel-roberts',
    projectDevURL: 'dev.nigelrobertsltd.co.uk',
    buildDir: './build/',
    buildInc: [
        '**/*.php',
        '**/*.html',
        '**/*.svg',
        '**/*.ttf',
        '**/*.otf',
        '**/*.eot',
        '**/*.woff',
        '**/*.woff2',
        'screenshot.png',
        './bundle.js',
        './style.css',
        '!node_modules/**/*',
        '!style.css.map',
        '!/src/**/*'
    ]
}