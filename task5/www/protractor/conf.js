exports.config = {
    seleniumAddress:
        'http://localhost:24444/wd/hub',
        specs: ['title-spec.js', 'empty-spec.js', 'non-string-spec.js']
}
