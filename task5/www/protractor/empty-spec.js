describe('Fields should not be empty', function() {
    it('name is empty', function () {
        browser.get('http://localhost');
        element(by.model('userData.email')).sendKeys("as@yahoo.de");
        element(by.model('userData.phone')).sendKeys("2342342423");

        expect(element(by.id('btn')).isEnabled()).toBe(false);
    });
    it('email is empty', function () {
        browser.get('http://localhost');
        element(by.model('userData.name')).sendKeys("Pani");
        element(by.model('userData.phone')).sendKeys("2342342423");

        expect(element(by.id('btn')).isEnabled()).toBe(false);
    });
    it('name is empty', function () {
        browser.get('http://localhost');
        element(by.model('userData.name')).sendKeys("pani");
        element(by.model('userData.email')).sendKeys("as@yahoo.de");

        expect(element(by.id('btn')).isEnabled()).toBe(false);
    });
});
