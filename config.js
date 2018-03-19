module.exports = {
    projectName: 'baryon',
    projectDevURL: 'dev.baryon.io',
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