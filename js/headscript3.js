+ function (a, p, P, b, y) {
    appboy = {};
    appboyQueue = [];
    for (var s =
        "initialize destroy getDeviceId toggleAppboyLogging setLogger openSession changeUser requestImmediateDataFlush requestFeedRefresh subscribeToFeedUpdates requestContentCardsRefresh subscribeToContentCardsUpdates logCardImpressions logCardClick logCardDismissal logFeedDisplayed logContentCardsDisplayed logInAppMessageImpression logInAppMessageClick logInAppMessageButtonClick logInAppMessageHtmlClick subscribeToNewInAppMessages removeSubscription removeAllSubscriptions logCustomEvent logPurchase isPushSupported isPushBlocked isPushGranted isPushPermissionGranted registerAppboyPushMessages unregisterAppboyPushMessages submitFeedback trackLocation stopWebTracking resumeWebTracking wipeData ab ab.User ab.User.Genders ab.User.NotificationSubscriptionTypes ab.User.prototype.getUserId ab.User.prototype.setFirstName ab.User.prototype.setLastName ab.User.prototype.setEmail ab.User.prototype.setGender ab.User.prototype.setDateOfBirth ab.User.prototype.setCountry ab.User.prototype.setHomeCity ab.User.prototype.setLanguage ab.User.prototype.setEmailNotificationSubscriptionType ab.User.prototype.setPushNotificationSubscriptionType ab.User.prototype.setPhoneNumber ab.User.prototype.setAvatarImageUrl ab.User.prototype.setLastKnownLocation ab.User.prototype.setUserAttribute ab.User.prototype.setCustomUserAttribute ab.User.prototype.addToCustomAttributeArray ab.User.prototype.removeFromCustomAttributeArray ab.User.prototype.incrementCustomUserAttribute ab.User.prototype.addAlias ab.InAppMessage ab.InAppMessage.SlideFrom ab.InAppMessage.ClickAction ab.InAppMessage.DismissType ab.InAppMessage.OpenTarget ab.InAppMessage.ImageStyle ab.InAppMessage.TextAlignment ab.InAppMessage.Orientation ab.InAppMessage.CropType ab.InAppMessage.prototype.subscribeToClickedEvent ab.InAppMessage.prototype.subscribeToDismissedEvent ab.InAppMessage.prototype.removeSubscription ab.InAppMessage.prototype.removeAllSubscriptions ab.InAppMessage.Button ab.InAppMessage.Button.prototype.subscribeToClickedEvent ab.InAppMessage.Button.prototype.removeSubscription ab.InAppMessage.Button.prototype.removeAllSubscriptions ab.SlideUpMessage ab.ModalMessage ab.FullScreenMessage ab.HtmlMessage ab.ControlMessage ab.Feed ab.Feed.prototype.getUnreadCardCount ab.ContentCards ab.ContentCards.prototype.getUnviewedCardCount ab.Card ab.ClassicCard ab.CaptionedImage ab.Banner ab.ControlCard ab.WindowUtils display display.automaticallyShowNewInAppMessages display.showInAppMessage display.showFeed display.destroyFeed display.toggleFeed display.showContentCards display.hideContentCards display.toggleContentCards sharedLib"
            .split(" "), i = 0; i < s.length; i++) {
        for (var m = s[i], k = appboy, l = m.split("."), j = 0; j < l.length - 1; j++) k = k[l[j]];
        k[l[j]] = (new Function("return function " + m.replace(/\./g, "_") +
            "(){appboyQueue.push(arguments); return true}"))()
    }
    appboy.getUser = function () {
        return new appboy.ab.User
    };
    appboy.getCachedFeed = function () {
        return new appboy.ab.Feed
    };
    appboy.getCachedContentCards = function () {
        return new appboy.ab.ContentCards
    };
    (y = p.createElement(P)).type = 'text/javascript';
    y.src = 'https://js.appboycdn.com/web-sdk/2.2/appboy.min.js';
    y.async = 1;
    (b = p.getElementsByTagName(P)[0]).parentNode.insertBefore(y, b)
}(window, document, 'script');

appboy.initialize('04eafb9f-17d2-4351-a97a-20a41dea0f67', {
    enableLogging: false,
    baseUrl: 'https://maia.iad-03.braze.com/api/v3',
});

appboy.display.automaticallyShowNewInAppMessages();
appboy.openSession();