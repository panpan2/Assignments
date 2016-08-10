describe('Correct input data successfully register', function() {
    it('Valid input', function () {
        // Generate random email
        var email = Math.random().toString(36).substring(7);
        email += "as@yahoo.de";

        browser.get('http://localhost');
        element(by.model('userData.name')).sendKeys("Pani");
        element(by.model('userData.email')).sendKeys(email);
        element(by.model('userData.phone')).sendKeys("2342342423");

        // enable button by clicking somewhere else first
        element(by.model('userData.name')).click();
        element(by.id('btn')).click();

        expect(element(by.id("thankyou")).isDisplayed()).toBe(true);
    });
});
