<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesPublishing implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesPublishing and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onPremisesPublishing');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesPublishing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesPublishing {
        return new OnPremisesPublishing();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the alternateUrl property value. If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
     * @return string|null
    */
    public function getAlternateUrl(): ?string {
        return $this->getBackingStore()->get('alternateUrl');
    }

    /**
     * Gets the applicationServerTimeout property value. The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
     * @return string|null
    */
    public function getApplicationServerTimeout(): ?string {
        return $this->getBackingStore()->get('applicationServerTimeout');
    }

    /**
     * Gets the applicationType property value. Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
     * @return string|null
    */
    public function getApplicationType(): ?string {
        return $this->getBackingStore()->get('applicationType');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the externalAuthenticationType property value. Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
     * @return ExternalAuthenticationType|null
    */
    public function getExternalAuthenticationType(): ?ExternalAuthenticationType {
        return $this->getBackingStore()->get('externalAuthenticationType');
    }

    /**
     * Gets the externalUrl property value. The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
     * @return string|null
    */
    public function getExternalUrl(): ?string {
        return $this->getBackingStore()->get('externalUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alternateUrl' => fn(ParseNode $n) => $o->setAlternateUrl($n->getStringValue()),
            'applicationServerTimeout' => fn(ParseNode $n) => $o->setApplicationServerTimeout($n->getStringValue()),
            'applicationType' => fn(ParseNode $n) => $o->setApplicationType($n->getStringValue()),
            'externalAuthenticationType' => fn(ParseNode $n) => $o->setExternalAuthenticationType($n->getEnumValue(ExternalAuthenticationType::class)),
            'externalUrl' => fn(ParseNode $n) => $o->setExternalUrl($n->getStringValue()),
            'internalUrl' => fn(ParseNode $n) => $o->setInternalUrl($n->getStringValue()),
            'isBackendCertificateValidationEnabled' => fn(ParseNode $n) => $o->setIsBackendCertificateValidationEnabled($n->getBooleanValue()),
            'isHttpOnlyCookieEnabled' => fn(ParseNode $n) => $o->setIsHttpOnlyCookieEnabled($n->getBooleanValue()),
            'isOnPremPublishingEnabled' => fn(ParseNode $n) => $o->setIsOnPremPublishingEnabled($n->getBooleanValue()),
            'isPersistentCookieEnabled' => fn(ParseNode $n) => $o->setIsPersistentCookieEnabled($n->getBooleanValue()),
            'isSecureCookieEnabled' => fn(ParseNode $n) => $o->setIsSecureCookieEnabled($n->getBooleanValue()),
            'isStateSessionEnabled' => fn(ParseNode $n) => $o->setIsStateSessionEnabled($n->getBooleanValue()),
            'isTranslateHostHeaderEnabled' => fn(ParseNode $n) => $o->setIsTranslateHostHeaderEnabled($n->getBooleanValue()),
            'isTranslateLinksInBodyEnabled' => fn(ParseNode $n) => $o->setIsTranslateLinksInBodyEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onPremisesApplicationSegments' => fn(ParseNode $n) => $o->setOnPremisesApplicationSegments($n->getCollectionOfObjectValues([OnPremisesApplicationSegment::class, 'createFromDiscriminatorValue'])),
            'singleSignOnSettings' => fn(ParseNode $n) => $o->setSingleSignOnSettings($n->getObjectValue([OnPremisesPublishingSingleSignOn::class, 'createFromDiscriminatorValue'])),
            'useAlternateUrlForTranslationAndRedirect' => fn(ParseNode $n) => $o->setUseAlternateUrlForTranslationAndRedirect($n->getBooleanValue()),
            'verifiedCustomDomainCertificatesMetadata' => fn(ParseNode $n) => $o->setVerifiedCustomDomainCertificatesMetadata($n->getObjectValue([VerifiedCustomDomainCertificatesMetadata::class, 'createFromDiscriminatorValue'])),
            'verifiedCustomDomainKeyCredential' => fn(ParseNode $n) => $o->setVerifiedCustomDomainKeyCredential($n->getObjectValue([KeyCredential::class, 'createFromDiscriminatorValue'])),
            'verifiedCustomDomainPasswordCredential' => fn(ParseNode $n) => $o->setVerifiedCustomDomainPasswordCredential($n->getObjectValue([PasswordCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the internalUrl property value. The internal url of the application. For example, https://intranet/.
     * @return string|null
    */
    public function getInternalUrl(): ?string {
        return $this->getBackingStore()->get('internalUrl');
    }

    /**
     * Gets the isBackendCertificateValidationEnabled property value. Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
     * @return bool|null
    */
    public function getIsBackendCertificateValidationEnabled(): ?bool {
        return $this->getBackingStore()->get('isBackendCertificateValidationEnabled');
    }

    /**
     * Gets the isHttpOnlyCookieEnabled property value. Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
     * @return bool|null
    */
    public function getIsHttpOnlyCookieEnabled(): ?bool {
        return $this->getBackingStore()->get('isHttpOnlyCookieEnabled');
    }

    /**
     * Gets the isOnPremPublishingEnabled property value. Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
     * @return bool|null
    */
    public function getIsOnPremPublishingEnabled(): ?bool {
        return $this->getBackingStore()->get('isOnPremPublishingEnabled');
    }

    /**
     * Gets the isPersistentCookieEnabled property value. Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
     * @return bool|null
    */
    public function getIsPersistentCookieEnabled(): ?bool {
        return $this->getBackingStore()->get('isPersistentCookieEnabled');
    }

    /**
     * Gets the isSecureCookieEnabled property value. Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
     * @return bool|null
    */
    public function getIsSecureCookieEnabled(): ?bool {
        return $this->getBackingStore()->get('isSecureCookieEnabled');
    }

    /**
     * Gets the isStateSessionEnabled property value. Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
     * @return bool|null
    */
    public function getIsStateSessionEnabled(): ?bool {
        return $this->getBackingStore()->get('isStateSessionEnabled');
    }

    /**
     * Gets the isTranslateHostHeaderEnabled property value. Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
     * @return bool|null
    */
    public function getIsTranslateHostHeaderEnabled(): ?bool {
        return $this->getBackingStore()->get('isTranslateHostHeaderEnabled');
    }

    /**
     * Gets the isTranslateLinksInBodyEnabled property value. Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
     * @return bool|null
    */
    public function getIsTranslateLinksInBodyEnabled(): ?bool {
        return $this->getBackingStore()->get('isTranslateLinksInBodyEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the onPremisesApplicationSegments property value. Represents the application segment collection for an on-premises wildcard application.
     * @return array<OnPremisesApplicationSegment>|null
    */
    public function getOnPremisesApplicationSegments(): ?array {
        return $this->getBackingStore()->get('onPremisesApplicationSegments');
    }

    /**
     * Gets the singleSignOnSettings property value. Represents the single sign-on configuration for the on-premises application.
     * @return OnPremisesPublishingSingleSignOn|null
    */
    public function getSingleSignOnSettings(): ?OnPremisesPublishingSingleSignOn {
        return $this->getBackingStore()->get('singleSignOnSettings');
    }

    /**
     * Gets the useAlternateUrlForTranslationAndRedirect property value. The useAlternateUrlForTranslationAndRedirect property
     * @return bool|null
    */
    public function getUseAlternateUrlForTranslationAndRedirect(): ?bool {
        return $this->getBackingStore()->get('useAlternateUrlForTranslationAndRedirect');
    }

    /**
     * Gets the verifiedCustomDomainCertificatesMetadata property value. Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
     * @return VerifiedCustomDomainCertificatesMetadata|null
    */
    public function getVerifiedCustomDomainCertificatesMetadata(): ?VerifiedCustomDomainCertificatesMetadata {
        return $this->getBackingStore()->get('verifiedCustomDomainCertificatesMetadata');
    }

    /**
     * Gets the verifiedCustomDomainKeyCredential property value. The associated key credential for the custom domain used.
     * @return KeyCredential|null
    */
    public function getVerifiedCustomDomainKeyCredential(): ?KeyCredential {
        return $this->getBackingStore()->get('verifiedCustomDomainKeyCredential');
    }

    /**
     * Gets the verifiedCustomDomainPasswordCredential property value. The associated password credential for the custom domain used.
     * @return PasswordCredential|null
    */
    public function getVerifiedCustomDomainPasswordCredential(): ?PasswordCredential {
        return $this->getBackingStore()->get('verifiedCustomDomainPasswordCredential');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alternateUrl', $this->getAlternateUrl());
        $writer->writeStringValue('applicationServerTimeout', $this->getApplicationServerTimeout());
        $writer->writeStringValue('applicationType', $this->getApplicationType());
        $writer->writeEnumValue('externalAuthenticationType', $this->getExternalAuthenticationType());
        $writer->writeStringValue('externalUrl', $this->getExternalUrl());
        $writer->writeStringValue('internalUrl', $this->getInternalUrl());
        $writer->writeBooleanValue('isBackendCertificateValidationEnabled', $this->getIsBackendCertificateValidationEnabled());
        $writer->writeBooleanValue('isHttpOnlyCookieEnabled', $this->getIsHttpOnlyCookieEnabled());
        $writer->writeBooleanValue('isOnPremPublishingEnabled', $this->getIsOnPremPublishingEnabled());
        $writer->writeBooleanValue('isPersistentCookieEnabled', $this->getIsPersistentCookieEnabled());
        $writer->writeBooleanValue('isSecureCookieEnabled', $this->getIsSecureCookieEnabled());
        $writer->writeBooleanValue('isStateSessionEnabled', $this->getIsStateSessionEnabled());
        $writer->writeBooleanValue('isTranslateHostHeaderEnabled', $this->getIsTranslateHostHeaderEnabled());
        $writer->writeBooleanValue('isTranslateLinksInBodyEnabled', $this->getIsTranslateLinksInBodyEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('onPremisesApplicationSegments', $this->getOnPremisesApplicationSegments());
        $writer->writeObjectValue('singleSignOnSettings', $this->getSingleSignOnSettings());
        $writer->writeBooleanValue('useAlternateUrlForTranslationAndRedirect', $this->getUseAlternateUrlForTranslationAndRedirect());
        $writer->writeObjectValue('verifiedCustomDomainCertificatesMetadata', $this->getVerifiedCustomDomainCertificatesMetadata());
        $writer->writeObjectValue('verifiedCustomDomainKeyCredential', $this->getVerifiedCustomDomainKeyCredential());
        $writer->writeObjectValue('verifiedCustomDomainPasswordCredential', $this->getVerifiedCustomDomainPasswordCredential());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alternateUrl property value. If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
     *  @param string|null $value Value to set for the alternateUrl property.
    */
    public function setAlternateUrl(?string $value): void {
        $this->getBackingStore()->set('alternateUrl', $value);
    }

    /**
     * Sets the applicationServerTimeout property value. The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
     *  @param string|null $value Value to set for the applicationServerTimeout property.
    */
    public function setApplicationServerTimeout(?string $value): void {
        $this->getBackingStore()->set('applicationServerTimeout', $value);
    }

    /**
     * Sets the applicationType property value. Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
     *  @param string|null $value Value to set for the applicationType property.
    */
    public function setApplicationType(?string $value): void {
        $this->getBackingStore()->set('applicationType', $value);
    }

    /**
     * Sets the externalAuthenticationType property value. Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
     *  @param ExternalAuthenticationType|null $value Value to set for the externalAuthenticationType property.
    */
    public function setExternalAuthenticationType(?ExternalAuthenticationType $value): void {
        $this->getBackingStore()->set('externalAuthenticationType', $value);
    }

    /**
     * Sets the externalUrl property value. The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
     *  @param string|null $value Value to set for the externalUrl property.
    */
    public function setExternalUrl(?string $value): void {
        $this->getBackingStore()->set('externalUrl', $value);
    }

    /**
     * Sets the internalUrl property value. The internal url of the application. For example, https://intranet/.
     *  @param string|null $value Value to set for the internalUrl property.
    */
    public function setInternalUrl(?string $value): void {
        $this->getBackingStore()->set('internalUrl', $value);
    }

    /**
     * Sets the isBackendCertificateValidationEnabled property value. Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
     *  @param bool|null $value Value to set for the isBackendCertificateValidationEnabled property.
    */
    public function setIsBackendCertificateValidationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isBackendCertificateValidationEnabled', $value);
    }

    /**
     * Sets the isHttpOnlyCookieEnabled property value. Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
     *  @param bool|null $value Value to set for the isHttpOnlyCookieEnabled property.
    */
    public function setIsHttpOnlyCookieEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHttpOnlyCookieEnabled', $value);
    }

    /**
     * Sets the isOnPremPublishingEnabled property value. Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
     *  @param bool|null $value Value to set for the isOnPremPublishingEnabled property.
    */
    public function setIsOnPremPublishingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isOnPremPublishingEnabled', $value);
    }

    /**
     * Sets the isPersistentCookieEnabled property value. Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
     *  @param bool|null $value Value to set for the isPersistentCookieEnabled property.
    */
    public function setIsPersistentCookieEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPersistentCookieEnabled', $value);
    }

    /**
     * Sets the isSecureCookieEnabled property value. Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
     *  @param bool|null $value Value to set for the isSecureCookieEnabled property.
    */
    public function setIsSecureCookieEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSecureCookieEnabled', $value);
    }

    /**
     * Sets the isStateSessionEnabled property value. Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
     *  @param bool|null $value Value to set for the isStateSessionEnabled property.
    */
    public function setIsStateSessionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isStateSessionEnabled', $value);
    }

    /**
     * Sets the isTranslateHostHeaderEnabled property value. Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
     *  @param bool|null $value Value to set for the isTranslateHostHeaderEnabled property.
    */
    public function setIsTranslateHostHeaderEnabled(?bool $value): void {
        $this->getBackingStore()->set('isTranslateHostHeaderEnabled', $value);
    }

    /**
     * Sets the isTranslateLinksInBodyEnabled property value. Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
     *  @param bool|null $value Value to set for the isTranslateLinksInBodyEnabled property.
    */
    public function setIsTranslateLinksInBodyEnabled(?bool $value): void {
        $this->getBackingStore()->set('isTranslateLinksInBodyEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onPremisesApplicationSegments property value. Represents the application segment collection for an on-premises wildcard application.
     *  @param array<OnPremisesApplicationSegment>|null $value Value to set for the onPremisesApplicationSegments property.
    */
    public function setOnPremisesApplicationSegments(?array $value): void {
        $this->getBackingStore()->set('onPremisesApplicationSegments', $value);
    }

    /**
     * Sets the singleSignOnSettings property value. Represents the single sign-on configuration for the on-premises application.
     *  @param OnPremisesPublishingSingleSignOn|null $value Value to set for the singleSignOnSettings property.
    */
    public function setSingleSignOnSettings(?OnPremisesPublishingSingleSignOn $value): void {
        $this->getBackingStore()->set('singleSignOnSettings', $value);
    }

    /**
     * Sets the useAlternateUrlForTranslationAndRedirect property value. The useAlternateUrlForTranslationAndRedirect property
     *  @param bool|null $value Value to set for the useAlternateUrlForTranslationAndRedirect property.
    */
    public function setUseAlternateUrlForTranslationAndRedirect(?bool $value): void {
        $this->getBackingStore()->set('useAlternateUrlForTranslationAndRedirect', $value);
    }

    /**
     * Sets the verifiedCustomDomainCertificatesMetadata property value. Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
     *  @param VerifiedCustomDomainCertificatesMetadata|null $value Value to set for the verifiedCustomDomainCertificatesMetadata property.
    */
    public function setVerifiedCustomDomainCertificatesMetadata(?VerifiedCustomDomainCertificatesMetadata $value): void {
        $this->getBackingStore()->set('verifiedCustomDomainCertificatesMetadata', $value);
    }

    /**
     * Sets the verifiedCustomDomainKeyCredential property value. The associated key credential for the custom domain used.
     *  @param KeyCredential|null $value Value to set for the verifiedCustomDomainKeyCredential property.
    */
    public function setVerifiedCustomDomainKeyCredential(?KeyCredential $value): void {
        $this->getBackingStore()->set('verifiedCustomDomainKeyCredential', $value);
    }

    /**
     * Sets the verifiedCustomDomainPasswordCredential property value. The associated password credential for the custom domain used.
     *  @param PasswordCredential|null $value Value to set for the verifiedCustomDomainPasswordCredential property.
    */
    public function setVerifiedCustomDomainPasswordCredential(?PasswordCredential $value): void {
        $this->getBackingStore()->set('verifiedCustomDomainPasswordCredential', $value);
    }

}
