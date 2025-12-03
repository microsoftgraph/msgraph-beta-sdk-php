<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class OrganizationalBrandingThemeLocalization implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OrganizationalBrandingThemeLocalization and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalBrandingThemeLocalization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalBrandingThemeLocalization {
        return new OrganizationalBrandingThemeLocalization();
    }

    /**
     * Gets the accountResetCredentials property value. Represents 'Can't access your account?' and 'Reset it now' hyperlinks of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A destination URL can be updated. Optional.
     * @return LoginPageBrandingVisualElement|null
    */
    public function getAccountResetCredentials(): ?LoginPageBrandingVisualElement {
        $val = $this->getBackingStore()->get('accountResetCredentials');
        if (is_null($val) || $val instanceof LoginPageBrandingVisualElement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountResetCredentials'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backgroundImage property value. Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster. Optional.
     * @return StreamInterface|null
    */
    public function getBackgroundImage(): ?StreamInterface {
        $val = $this->getBackingStore()->get('backgroundImage');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backgroundImage'");
    }

    /**
     * Gets the backgroundImageRelativeUrl property value. A relative url for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getBackgroundImageRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('backgroundImageRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backgroundImageRelativeUrl'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bannerLogo property value. A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG not larger than 245 x 36 pixels. We recommend using a transparent image with no padding around the logo. Optional.
     * @return StreamInterface|null
    */
    public function getBannerLogo(): ?StreamInterface {
        $val = $this->getBackingStore()->get('bannerLogo');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bannerLogo'");
    }

    /**
     * Gets the bannerLogoRelativeUrl property value. A relative url for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getBannerLogoRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('bannerLogoRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bannerLogoRelativeUrl'");
    }

    /**
     * Gets the cannotAccessYourAccount property value. Represents 'Can't access your account?' hyperlink of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A display text can be updated. Optional.
     * @return LoginPageBrandingVisualElement|null
    */
    public function getCannotAccessYourAccount(): ?LoginPageBrandingVisualElement {
        $val = $this->getBackingStore()->get('cannotAccessYourAccount');
        if (is_null($val) || $val instanceof LoginPageBrandingVisualElement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cannotAccessYourAccount'");
    }

    /**
     * Gets the cdnHosts property value. A list of available CDN base urls that are serving the assets of the current resource. There are several CDNs used to provide redundancy hence eliminating Single Point of Failure for blob properties of this resource. Read-only. Optional.
     * @return array<string>|null
    */
    public function getCdnHosts(): ?array {
        $val = $this->getBackingStore()->get('cdnHosts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cdnHosts'");
    }

    /**
     * Gets the contentCustomization property value. Represents the various content options to be customized throughout the authentication flow for a tenant. NOTE: Supported by Microsoft Entra ID for customer tenants only. Optional.
     * @return ContentCustomization|null
    */
    public function getContentCustomization(): ?ContentCustomization {
        $val = $this->getBackingStore()->get('contentCustomization');
        if (is_null($val) || $val instanceof ContentCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCustomization'");
    }

    /**
     * Gets the customCSS property value. CSS styling that appears on the sign-in page. The allowed format is .css format only and not larger than 25KB. Optional.
     * @return StreamInterface|null
    */
    public function getCustomCSS(): ?StreamInterface {
        $val = $this->getBackingStore()->get('customCSS');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customCSS'");
    }

    /**
     * Gets the customCSSRelativeUrl property value. A relative url for the customCSS property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getCustomCSSRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('customCSSRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customCSSRelativeUrl'");
    }

    /**
     * Gets the favicon property value. A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant. Optional.
     * @return StreamInterface|null
    */
    public function getFavicon(): ?StreamInterface {
        $val = $this->getBackingStore()->get('favicon');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'favicon'");
    }

    /**
     * Gets the faviconRelativeUrl property value. A relative url for the favicon property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getFaviconRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('faviconRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'faviconRelativeUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountResetCredentials' => fn(ParseNode $n) => $o->setAccountResetCredentials($n->getObjectValue([LoginPageBrandingVisualElement::class, 'createFromDiscriminatorValue'])),
            'backgroundImage' => fn(ParseNode $n) => $o->setBackgroundImage($n->getBinaryContent()),
            'backgroundImageRelativeUrl' => fn(ParseNode $n) => $o->setBackgroundImageRelativeUrl($n->getStringValue()),
            'bannerLogo' => fn(ParseNode $n) => $o->setBannerLogo($n->getBinaryContent()),
            'bannerLogoRelativeUrl' => fn(ParseNode $n) => $o->setBannerLogoRelativeUrl($n->getStringValue()),
            'cannotAccessYourAccount' => fn(ParseNode $n) => $o->setCannotAccessYourAccount($n->getObjectValue([LoginPageBrandingVisualElement::class, 'createFromDiscriminatorValue'])),
            'cdnHosts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCdnHosts($val);
            },
            'contentCustomization' => fn(ParseNode $n) => $o->setContentCustomization($n->getObjectValue([ContentCustomization::class, 'createFromDiscriminatorValue'])),
            'customCSS' => fn(ParseNode $n) => $o->setCustomCSS($n->getBinaryContent()),
            'customCSSRelativeUrl' => fn(ParseNode $n) => $o->setCustomCSSRelativeUrl($n->getStringValue()),
            'favicon' => fn(ParseNode $n) => $o->setFavicon($n->getBinaryContent()),
            'faviconRelativeUrl' => fn(ParseNode $n) => $o->setFaviconRelativeUrl($n->getStringValue()),
            'forgotMyPassword' => fn(ParseNode $n) => $o->setForgotMyPassword($n->getObjectValue([LoginPageBrandingVisualElement::class, 'createFromDiscriminatorValue'])),
            'headerBackgroundColor' => fn(ParseNode $n) => $o->setHeaderBackgroundColor($n->getStringValue()),
            'headerLogo' => fn(ParseNode $n) => $o->setHeaderLogo($n->getBinaryContent()),
            'headerLogoRelativeUrl' => fn(ParseNode $n) => $o->setHeaderLogoRelativeUrl($n->getStringValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'loginPageLayoutConfiguration' => fn(ParseNode $n) => $o->setLoginPageLayoutConfiguration($n->getObjectValue([LoginPageLayoutConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pageBackgroundColor' => fn(ParseNode $n) => $o->setPageBackgroundColor($n->getStringValue()),
            'privacyAndCookies' => fn(ParseNode $n) => $o->setPrivacyAndCookies($n->getObjectValue([LoginPageBrandingVisualElement::class, 'createFromDiscriminatorValue'])),
            'resetItNow' => fn(ParseNode $n) => $o->setResetItNow($n->getObjectValue([LoginPageBrandingVisualElement::class, 'createFromDiscriminatorValue'])),
            'signInPageText' => fn(ParseNode $n) => $o->setSignInPageText($n->getStringValue()),
            'squareLogo' => fn(ParseNode $n) => $o->setSquareLogo($n->getBinaryContent()),
            'squareLogoDark' => fn(ParseNode $n) => $o->setSquareLogoDark($n->getBinaryContent()),
            'squareLogoDarkRelativeUrl' => fn(ParseNode $n) => $o->setSquareLogoDarkRelativeUrl($n->getStringValue()),
            'squareLogoRelativeUrl' => fn(ParseNode $n) => $o->setSquareLogoRelativeUrl($n->getStringValue()),
            'termsOfUse' => fn(ParseNode $n) => $o->setTermsOfUse($n->getObjectValue([LoginPageBrandingVisualElement::class, 'createFromDiscriminatorValue'])),
            'usernameHintText' => fn(ParseNode $n) => $o->setUsernameHintText($n->getStringValue()),
        ];
    }

    /**
     * Gets the forgotMyPassword property value. Represents 'Forgot my password' hyperlink of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A display text can be updated. Optional.
     * @return LoginPageBrandingVisualElement|null
    */
    public function getForgotMyPassword(): ?LoginPageBrandingVisualElement {
        $val = $this->getBackingStore()->get('forgotMyPassword');
        if (is_null($val) || $val instanceof LoginPageBrandingVisualElement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forgotMyPassword'");
    }

    /**
     * Gets the headerBackgroundColor property value. The RGB color to apply to customize the color of the header. Optional.
     * @return string|null
    */
    public function getHeaderBackgroundColor(): ?string {
        $val = $this->getBackingStore()->get('headerBackgroundColor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headerBackgroundColor'");
    }

    /**
     * Gets the headerLogo property value. A company logo that appears in the header of the sign-in page. The allowed types are PNG or JPEG not larger than 245 x 36 pixels. We recommend using a transparent image with no padding around the logo. Optional.
     * @return StreamInterface|null
    */
    public function getHeaderLogo(): ?StreamInterface {
        $val = $this->getBackingStore()->get('headerLogo');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headerLogo'");
    }

    /**
     * Gets the headerLogoRelativeUrl property value. A relative url for the headerLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getHeaderLogoRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('headerLogoRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headerLogoRelativeUrl'");
    }

    /**
     * Gets the locale property value. An identifier that represents the locale specified using culture names. Culture names follow the RFC 1766 standard in the format 'languagecode2-country/regioncode2'. The portion 'languagecode2' is a lowercase two-letter code derived from ISO 639-1 and 'country/regioncode2' is an uppercase two-letter code derived from ISO 3166. For example, U.S. English is en-US. You can't create the default branding by setting the value of locale to the String types 0 or default.  NOTE: Multiple branding for a single locale are currently not supported.
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the loginPageLayoutConfiguration property value. Represents the layout configuration to be displayed on the login page for a tenant. Optional.
     * @return LoginPageLayoutConfiguration|null
    */
    public function getLoginPageLayoutConfiguration(): ?LoginPageLayoutConfiguration {
        $val = $this->getBackingStore()->get('loginPageLayoutConfiguration');
        if (is_null($val) || $val instanceof LoginPageLayoutConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginPageLayoutConfiguration'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the pageBackgroundColor property value. Color that appears in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF. Optional.
     * @return string|null
    */
    public function getPageBackgroundColor(): ?string {
        $val = $this->getBackingStore()->get('pageBackgroundColor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pageBackgroundColor'");
    }

    /**
     * Gets the privacyAndCookies property value. Represents 'Privacy & cookies' hyperlink in the footer of sign-in page that can be customized for a theme. A destination URL and a display text can be updated. Optional.
     * @return LoginPageBrandingVisualElement|null
    */
    public function getPrivacyAndCookies(): ?LoginPageBrandingVisualElement {
        $val = $this->getBackingStore()->get('privacyAndCookies');
        if (is_null($val) || $val instanceof LoginPageBrandingVisualElement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyAndCookies'");
    }

    /**
     * Gets the resetItNow property value. Represents 'Reset it now' hyperlink of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A display text can be updated. Optional.
     * @return LoginPageBrandingVisualElement|null
    */
    public function getResetItNow(): ?LoginPageBrandingVisualElement {
        $val = $this->getBackingStore()->get('resetItNow');
        if (is_null($val) || $val instanceof LoginPageBrandingVisualElement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resetItNow'");
    }

    /**
     * Gets the signInPageText property value. Text that appears at the bottom of the sign-in box. Use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be in Unicode format and not exceed 1024 characters. Optional.
     * @return string|null
    */
    public function getSignInPageText(): ?string {
        $val = $this->getBackingStore()->get('signInPageText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInPageText'");
    }

    /**
     * Gets the squareLogo property value. A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo. Optional.
     * @return StreamInterface|null
    */
    public function getSquareLogo(): ?StreamInterface {
        $val = $this->getBackingStore()->get('squareLogo');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'squareLogo'");
    }

    /**
     * Gets the squareLogoDark property value. A square dark version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo. Optional.
     * @return StreamInterface|null
    */
    public function getSquareLogoDark(): ?StreamInterface {
        $val = $this->getBackingStore()->get('squareLogoDark');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'squareLogoDark'");
    }

    /**
     * Gets the squareLogoDarkRelativeUrl property value. A relative url for the squareLogoDark property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getSquareLogoDarkRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('squareLogoDarkRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'squareLogoDarkRelativeUrl'");
    }

    /**
     * Gets the squareLogoRelativeUrl property value. A relative url for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @return string|null
    */
    public function getSquareLogoRelativeUrl(): ?string {
        $val = $this->getBackingStore()->get('squareLogoRelativeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'squareLogoRelativeUrl'");
    }

    /**
     * Gets the termsOfUse property value. Represents the Terms of Use hyperlink that can be customized in the footer of the login page for a theme. A destination URL and a display text can be updated. Optional.
     * @return LoginPageBrandingVisualElement|null
    */
    public function getTermsOfUse(): ?LoginPageBrandingVisualElement {
        $val = $this->getBackingStore()->get('termsOfUse');
        if (is_null($val) || $val instanceof LoginPageBrandingVisualElement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsOfUse'");
    }

    /**
     * Gets the usernameHintText property value. A string that appears as the hint in the username text box on the sign-in screen. This text must be Unicode, contain no links or code, and can't exceed 64 characters. Optional.
     * @return string|null
    */
    public function getUsernameHintText(): ?string {
        $val = $this->getBackingStore()->get('usernameHintText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usernameHintText'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accountResetCredentials', $this->getAccountResetCredentials());
        $writer->writeBinaryContent('backgroundImage', $this->getBackgroundImage());
        $writer->writeStringValue('backgroundImageRelativeUrl', $this->getBackgroundImageRelativeUrl());
        $writer->writeBinaryContent('bannerLogo', $this->getBannerLogo());
        $writer->writeStringValue('bannerLogoRelativeUrl', $this->getBannerLogoRelativeUrl());
        $writer->writeObjectValue('cannotAccessYourAccount', $this->getCannotAccessYourAccount());
        $writer->writeCollectionOfPrimitiveValues('cdnHosts', $this->getCdnHosts());
        $writer->writeObjectValue('contentCustomization', $this->getContentCustomization());
        $writer->writeBinaryContent('customCSS', $this->getCustomCSS());
        $writer->writeStringValue('customCSSRelativeUrl', $this->getCustomCSSRelativeUrl());
        $writer->writeBinaryContent('favicon', $this->getFavicon());
        $writer->writeStringValue('faviconRelativeUrl', $this->getFaviconRelativeUrl());
        $writer->writeObjectValue('forgotMyPassword', $this->getForgotMyPassword());
        $writer->writeStringValue('headerBackgroundColor', $this->getHeaderBackgroundColor());
        $writer->writeBinaryContent('headerLogo', $this->getHeaderLogo());
        $writer->writeStringValue('headerLogoRelativeUrl', $this->getHeaderLogoRelativeUrl());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeObjectValue('loginPageLayoutConfiguration', $this->getLoginPageLayoutConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('pageBackgroundColor', $this->getPageBackgroundColor());
        $writer->writeObjectValue('privacyAndCookies', $this->getPrivacyAndCookies());
        $writer->writeObjectValue('resetItNow', $this->getResetItNow());
        $writer->writeStringValue('signInPageText', $this->getSignInPageText());
        $writer->writeBinaryContent('squareLogo', $this->getSquareLogo());
        $writer->writeBinaryContent('squareLogoDark', $this->getSquareLogoDark());
        $writer->writeStringValue('squareLogoDarkRelativeUrl', $this->getSquareLogoDarkRelativeUrl());
        $writer->writeStringValue('squareLogoRelativeUrl', $this->getSquareLogoRelativeUrl());
        $writer->writeObjectValue('termsOfUse', $this->getTermsOfUse());
        $writer->writeStringValue('usernameHintText', $this->getUsernameHintText());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountResetCredentials property value. Represents 'Can't access your account?' and 'Reset it now' hyperlinks of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A destination URL can be updated. Optional.
     * @param LoginPageBrandingVisualElement|null $value Value to set for the accountResetCredentials property.
    */
    public function setAccountResetCredentials(?LoginPageBrandingVisualElement $value): void {
        $this->getBackingStore()->set('accountResetCredentials', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backgroundImage property value. Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster. Optional.
     * @param StreamInterface|null $value Value to set for the backgroundImage property.
    */
    public function setBackgroundImage(?StreamInterface $value): void {
        $this->getBackingStore()->set('backgroundImage', $value);
    }

    /**
     * Sets the backgroundImageRelativeUrl property value. A relative url for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the backgroundImageRelativeUrl property.
    */
    public function setBackgroundImageRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('backgroundImageRelativeUrl', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bannerLogo property value. A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG not larger than 245 x 36 pixels. We recommend using a transparent image with no padding around the logo. Optional.
     * @param StreamInterface|null $value Value to set for the bannerLogo property.
    */
    public function setBannerLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('bannerLogo', $value);
    }

    /**
     * Sets the bannerLogoRelativeUrl property value. A relative url for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the bannerLogoRelativeUrl property.
    */
    public function setBannerLogoRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('bannerLogoRelativeUrl', $value);
    }

    /**
     * Sets the cannotAccessYourAccount property value. Represents 'Can't access your account?' hyperlink of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A display text can be updated. Optional.
     * @param LoginPageBrandingVisualElement|null $value Value to set for the cannotAccessYourAccount property.
    */
    public function setCannotAccessYourAccount(?LoginPageBrandingVisualElement $value): void {
        $this->getBackingStore()->set('cannotAccessYourAccount', $value);
    }

    /**
     * Sets the cdnHosts property value. A list of available CDN base urls that are serving the assets of the current resource. There are several CDNs used to provide redundancy hence eliminating Single Point of Failure for blob properties of this resource. Read-only. Optional.
     * @param array<string>|null $value Value to set for the cdnHosts property.
    */
    public function setCdnHosts(?array $value): void {
        $this->getBackingStore()->set('cdnHosts', $value);
    }

    /**
     * Sets the contentCustomization property value. Represents the various content options to be customized throughout the authentication flow for a tenant. NOTE: Supported by Microsoft Entra ID for customer tenants only. Optional.
     * @param ContentCustomization|null $value Value to set for the contentCustomization property.
    */
    public function setContentCustomization(?ContentCustomization $value): void {
        $this->getBackingStore()->set('contentCustomization', $value);
    }

    /**
     * Sets the customCSS property value. CSS styling that appears on the sign-in page. The allowed format is .css format only and not larger than 25KB. Optional.
     * @param StreamInterface|null $value Value to set for the customCSS property.
    */
    public function setCustomCSS(?StreamInterface $value): void {
        $this->getBackingStore()->set('customCSS', $value);
    }

    /**
     * Sets the customCSSRelativeUrl property value. A relative url for the customCSS property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the customCSSRelativeUrl property.
    */
    public function setCustomCSSRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('customCSSRelativeUrl', $value);
    }

    /**
     * Sets the favicon property value. A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant. Optional.
     * @param StreamInterface|null $value Value to set for the favicon property.
    */
    public function setFavicon(?StreamInterface $value): void {
        $this->getBackingStore()->set('favicon', $value);
    }

    /**
     * Sets the faviconRelativeUrl property value. A relative url for the favicon property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the faviconRelativeUrl property.
    */
    public function setFaviconRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('faviconRelativeUrl', $value);
    }

    /**
     * Sets the forgotMyPassword property value. Represents 'Forgot my password' hyperlink of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A display text can be updated. Optional.
     * @param LoginPageBrandingVisualElement|null $value Value to set for the forgotMyPassword property.
    */
    public function setForgotMyPassword(?LoginPageBrandingVisualElement $value): void {
        $this->getBackingStore()->set('forgotMyPassword', $value);
    }

    /**
     * Sets the headerBackgroundColor property value. The RGB color to apply to customize the color of the header. Optional.
     * @param string|null $value Value to set for the headerBackgroundColor property.
    */
    public function setHeaderBackgroundColor(?string $value): void {
        $this->getBackingStore()->set('headerBackgroundColor', $value);
    }

    /**
     * Sets the headerLogo property value. A company logo that appears in the header of the sign-in page. The allowed types are PNG or JPEG not larger than 245 x 36 pixels. We recommend using a transparent image with no padding around the logo. Optional.
     * @param StreamInterface|null $value Value to set for the headerLogo property.
    */
    public function setHeaderLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('headerLogo', $value);
    }

    /**
     * Sets the headerLogoRelativeUrl property value. A relative url for the headerLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the headerLogoRelativeUrl property.
    */
    public function setHeaderLogoRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('headerLogoRelativeUrl', $value);
    }

    /**
     * Sets the locale property value. An identifier that represents the locale specified using culture names. Culture names follow the RFC 1766 standard in the format 'languagecode2-country/regioncode2'. The portion 'languagecode2' is a lowercase two-letter code derived from ISO 639-1 and 'country/regioncode2' is an uppercase two-letter code derived from ISO 3166. For example, U.S. English is en-US. You can't create the default branding by setting the value of locale to the String types 0 or default.  NOTE: Multiple branding for a single locale are currently not supported.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the loginPageLayoutConfiguration property value. Represents the layout configuration to be displayed on the login page for a tenant. Optional.
     * @param LoginPageLayoutConfiguration|null $value Value to set for the loginPageLayoutConfiguration property.
    */
    public function setLoginPageLayoutConfiguration(?LoginPageLayoutConfiguration $value): void {
        $this->getBackingStore()->set('loginPageLayoutConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pageBackgroundColor property value. Color that appears in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF. Optional.
     * @param string|null $value Value to set for the pageBackgroundColor property.
    */
    public function setPageBackgroundColor(?string $value): void {
        $this->getBackingStore()->set('pageBackgroundColor', $value);
    }

    /**
     * Sets the privacyAndCookies property value. Represents 'Privacy & cookies' hyperlink in the footer of sign-in page that can be customized for a theme. A destination URL and a display text can be updated. Optional.
     * @param LoginPageBrandingVisualElement|null $value Value to set for the privacyAndCookies property.
    */
    public function setPrivacyAndCookies(?LoginPageBrandingVisualElement $value): void {
        $this->getBackingStore()->set('privacyAndCookies', $value);
    }

    /**
     * Sets the resetItNow property value. Represents 'Reset it now' hyperlink of self-service password reset (SSPR) that can be customized on the sign-in page for a theme. A display text can be updated. Optional.
     * @param LoginPageBrandingVisualElement|null $value Value to set for the resetItNow property.
    */
    public function setResetItNow(?LoginPageBrandingVisualElement $value): void {
        $this->getBackingStore()->set('resetItNow', $value);
    }

    /**
     * Sets the signInPageText property value. Text that appears at the bottom of the sign-in box. Use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be in Unicode format and not exceed 1024 characters. Optional.
     * @param string|null $value Value to set for the signInPageText property.
    */
    public function setSignInPageText(?string $value): void {
        $this->getBackingStore()->set('signInPageText', $value);
    }

    /**
     * Sets the squareLogo property value. A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo. Optional.
     * @param StreamInterface|null $value Value to set for the squareLogo property.
    */
    public function setSquareLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('squareLogo', $value);
    }

    /**
     * Sets the squareLogoDark property value. A square dark version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo. Optional.
     * @param StreamInterface|null $value Value to set for the squareLogoDark property.
    */
    public function setSquareLogoDark(?StreamInterface $value): void {
        $this->getBackingStore()->set('squareLogoDark', $value);
    }

    /**
     * Sets the squareLogoDarkRelativeUrl property value. A relative url for the squareLogoDark property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the squareLogoDarkRelativeUrl property.
    */
    public function setSquareLogoDarkRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('squareLogoDarkRelativeUrl', $value);
    }

    /**
     * Sets the squareLogoRelativeUrl property value. A relative url for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only. Optional.
     * @param string|null $value Value to set for the squareLogoRelativeUrl property.
    */
    public function setSquareLogoRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('squareLogoRelativeUrl', $value);
    }

    /**
     * Sets the termsOfUse property value. Represents the Terms of Use hyperlink that can be customized in the footer of the login page for a theme. A destination URL and a display text can be updated. Optional.
     * @param LoginPageBrandingVisualElement|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?LoginPageBrandingVisualElement $value): void {
        $this->getBackingStore()->set('termsOfUse', $value);
    }

    /**
     * Sets the usernameHintText property value. A string that appears as the hint in the username text box on the sign-in screen. This text must be Unicode, contain no links or code, and can't exceed 64 characters. Optional.
     * @param string|null $value Value to set for the usernameHintText property.
    */
    public function setUsernameHintText(?string $value): void {
        $this->getBackingStore()->set('usernameHintText', $value);
    }

}
