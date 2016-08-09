describe('A sample feature spec', function() {
    it('navigates', function () {
        browser.get('http://angularjs.org');
        expect(browser.getTitle()).toEqual("AngularJS — Superheroic JavaScript MVW Framework");
        browser.pause();
    });
});
