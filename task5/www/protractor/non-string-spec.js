describe('Fields should be valid string inputs', function() {
    it('name has numbers', function () {
        browser.get('http://localhost');
        element(by.model('userData.name')).sendKeys("Pani5");
        element(by.model('userData.email')).sendKeys("as@yahoo.de");
        element(by.model('userData.phone')).sendKeys("2342342423");

        // enable button by clicking somewhere else first
        element(by.model('userData.name')).click();
        element(by.id('btn')).click();

        expect(element(by.id("thankyou")).isDisplayed()).toBe(false);
    });
    it('email form is wrong', function () {
        browser.get('http://localhost');
        element(by.model('userData.name')).sendKeys("Pani");
        element(by.model('userData.email')).sendKeys("as@e");
        element(by.model('userData.phone')).sendKeys("2342342423");

        expect(element(by.id('btn')).isEnabled()).toBe(false);
    });
    it('email form is wrong', function () {
        browser.get('http://localhost');
        element(by.model('userData.name')).sendKeys("pani");
        element(by.model('userData.email')).sendKeys("as");
        element(by.model('userData.phone')).sendKeys("2342342423");

        expect(element(by.id('btn')).isEnabled()).toBe(false);
    });
});
