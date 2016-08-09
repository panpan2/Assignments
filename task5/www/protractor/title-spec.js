describe('Check application title', function() {
    it('navigates', function () {
        browser.get('http://localhost');
        expect(browser.getTitle()).toEqual("Register");
    });
});
