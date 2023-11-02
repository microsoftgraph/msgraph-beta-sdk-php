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
     * Gets the alternateUrl property value. If you're configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that points to the traffic manager.
     * @return string|null
    */
    public function getAlternateUrl(): ?string {
        $val = $this->getBackingStore()->get('alternateUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternateUrl'");
    }

    /**
     * Gets the applicationServerTimeout property value. The duration the connector waits for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
     * @return string|null
    */
    public function getApplicationServerTimeout(): ?string {
        $val = $this->getBackingStore()->get('applicationServerTimeout');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationServerTimeout'");
    }

    /**
     * Gets the applicationType property value. Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
     * @return string|null
    */
    public function getApplicationType(): ?string {
        $val = $this->getBackingStore()->get('applicationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationType'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the externalAuthenticationType property value. Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Pass through doesn't require authentication. Possible values are: passthru, aadPreAuthentication.
     * @return ExternalAuthenticationType|null
    */
    public function getExternalAuthenticationType(): ?ExternalAuthenticationType {
        $val = $this->getBackingStore()->get('externalAuthenticationType');
        if (is_null($val) || $val instanceof ExternalAuthenticationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalAuthenticationType'");
    }

    /**
     * Gets the externalUrl property value. The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
     * @return string|null
    */
    public function getExternalUrl(): ?string {
        $val = $this->getBackingStore()->get('externalUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'isAccessibleViaZTNAClient' => fn(ParseNode $n) => $o->setIsAccessibleViaZTNAClient($n->getBooleanValue()),
            'isBackendCertificateValidationEnabled' => fn(ParseNode $n) => $o->setIsBackendCertificateValidationEnabled($n->getBooleanValue()),
            'isDnsResolutionEnabled' => fn(ParseNode $n) => $o->setIsDnsResolutionEnabled($n->getBooleanValue()),
            'isHttpOnlyCookieEnabled' => fn(ParseNode $n) => $o->setIsHttpOnlyCookieEnabled($n->getBooleanValue()),
            'isOnPremPublishingEnabled' => fn(ParseNode $n) => $o->setIsOnPremPublishingEnabled($n->getBooleanValue()),
            'isPersistentCookieEnabled' => fn(ParseNode $n) => $o->setIsPersistentCookieEnabled($n->getBooleanValue()),
            'isSecureCookieEnabled' => fn(ParseNode $n) => $o->setIsSecureCookieEnabled($n->getBooleanValue()),
            'isStateSessionEnabled' => fn(ParseNode $n) => $o->setIsStateSessionEnabled($n->getBooleanValue()),
            'isTranslateHostHeaderEnabled' => fn(ParseNode $n) => $o->setIsTranslateHostHeaderEnabled($n->getBooleanValue()),
            'isTranslateLinksInBodyEnabled' => fn(ParseNode $n) => $o->setIsTranslateLinksInBodyEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onPremisesApplicationSegments' => fn(ParseNode $n) => $o->setOnPremisesApplicationSegments($n->getCollectionOfObjectValues([OnPremisesApplicationSegment::class, 'createFromDiscriminatorValue'])),
            'segmentsConfiguration' => fn(ParseNode $n) => $o->setSegmentsConfiguration($n->getObjectValue([SegmentConfiguration::class, 'createFromDiscriminatorValue'])),
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
        $val = $this->getBackingStore()->get('internalUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internalUrl'");
    }

    /**
     * Gets the isAccessibleViaZTNAClient property value. The isAccessibleViaZTNAClient property
     * @return bool|null
    */
    public function getIsAccessibleViaZTNAClient(): ?bool {
        $val = $this->getBackingStore()->get('isAccessibleViaZTNAClient');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAccessibleViaZTNAClient'");
    }

    /**
     * Gets the isBackendCertificateValidationEnabled property value. Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property is set to true by default. For all existing apps, the property is set to false.
     * @return bool|null
    */
    public function getIsBackendCertificateValidationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isBackendCertificateValidationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBackendCertificateValidationEnabled'");
    }

    /**
     * Gets the isDnsResolutionEnabled property value. The isDnsResolutionEnabled property
     * @return bool|null
    */
    public function getIsDnsResolutionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isDnsResolutionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDnsResolutionEnabled'");
    }

    /**
     * Gets the isHttpOnlyCookieEnabled property value. Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
     * @return bool|null
    */
    public function getIsHttpOnlyCookieEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isHttpOnlyCookieEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHttpOnlyCookieEnabled'");
    }

    /**
     * Gets the isOnPremPublishingEnabled property value. Indicates if the application is currently being published via Application Proxy or not. This is preset by the system. Read-only.
     * @return bool|null
    */
    public function getIsOnPremPublishingEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isOnPremPublishingEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnPremPublishingEnabled'");
    }

    /**
     * Gets the isPersistentCookieEnabled property value. Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Microsoft Entra ID. Default value is false.
     * @return bool|null
    */
    public function getIsPersistentCookieEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isPersistentCookieEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPersistentCookieEnabled'");
    }

    /**
     * Gets the isSecureCookieEnabled property value. Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
     * @return bool|null
    */
    public function getIsSecureCookieEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSecureCookieEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSecureCookieEnabled'");
    }

    /**
     * Gets the isStateSessionEnabled property value. Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
     * @return bool|null
    */
    public function getIsStateSessionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isStateSessionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isStateSessionEnabled'");
    }

    /**
     * Gets the isTranslateHostHeaderEnabled property value. Indicates if the application should translate urls in the response headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
     * @return bool|null
    */
    public function getIsTranslateHostHeaderEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isTranslateHostHeaderEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTranslateHostHeaderEnabled'");
    }

    /**
     * Gets the isTranslateLinksInBodyEnabled property value. Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
     * @return bool|null
    */
    public function getIsTranslateLinksInBodyEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isTranslateLinksInBodyEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTranslateLinksInBodyEnabled'");
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
     * Gets the onPremisesApplicationSegments property value. The onPremisesApplicationSegments property
     * @return array<OnPremisesApplicationSegment>|null
    */
    public function getOnPremisesApplicationSegments(): ?array {
        $val = $this->getBackingStore()->get('onPremisesApplicationSegments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesApplicationSegment::class);
            /** @var array<OnPremisesApplicationSegment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesApplicationSegments'");
    }

    /**
     * Gets the segmentsConfiguration property value. Represents the collection of application segments for an on-premises wildcard application that's published through Microsoft Entra application proxy.
     * @return SegmentConfiguration|null
    */
    public function getSegmentsConfiguration(): ?SegmentConfiguration {
        $val = $this->getBackingStore()->get('segmentsConfiguration');
        if (is_null($val) || $val instanceof SegmentConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'segmentsConfiguration'");
    }

    /**
     * Gets the singleSignOnSettings property value. Represents the single sign-on configuration for the on-premises application.
     * @return OnPremisesPublishingSingleSignOn|null
    */
    public function getSingleSignOnSettings(): ?OnPremisesPublishingSingleSignOn {
        $val = $this->getBackingStore()->get('singleSignOnSettings');
        if (is_null($val) || $val instanceof OnPremisesPublishingSingleSignOn) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleSignOnSettings'");
    }

    /**
     * Gets the useAlternateUrlForTranslationAndRedirect property value. The useAlternateUrlForTranslationAndRedirect property
     * @return bool|null
    */
    public function getUseAlternateUrlForTranslationAndRedirect(): ?bool {
        $val = $this->getBackingStore()->get('useAlternateUrlForTranslationAndRedirect');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useAlternateUrlForTranslationAndRedirect'");
    }

    /**
     * Gets the verifiedCustomDomainCertificatesMetadata property value. Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
     * @return VerifiedCustomDomainCertificatesMetadata|null
    */
    public function getVerifiedCustomDomainCertificatesMetadata(): ?VerifiedCustomDomainCertificatesMetadata {
        $val = $this->getBackingStore()->get('verifiedCustomDomainCertificatesMetadata');
        if (is_null($val) || $val instanceof VerifiedCustomDomainCertificatesMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedCustomDomainCertificatesMetadata'");
    }

    /**
     * Gets the verifiedCustomDomainKeyCredential property value. The associated key credential for the custom domain used.
     * @return KeyCredential|null
    */
    public function getVerifiedCustomDomainKeyCredential(): ?KeyCredential {
        $val = $this->getBackingStore()->get('verifiedCustomDomainKeyCredential');
        if (is_null($val) || $val instanceof KeyCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedCustomDomainKeyCredential'");
    }

    /**
     * Gets the verifiedCustomDomainPasswordCredential property value. The associated password credential for the custom domain used.
     * @return PasswordCredential|null
    */
    public function getVerifiedCustomDomainPasswordCredential(): ?PasswordCredential {
        $val = $this->getBackingStore()->get('verifiedCustomDomainPasswordCredential');
        if (is_null($val) || $val instanceof PasswordCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedCustomDomainPasswordCredential'");
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
        $writer->writeBooleanValue('isAccessibleViaZTNAClient', $this->getIsAccessibleViaZTNAClient());
        $writer->writeBooleanValue('isBackendCertificateValidationEnabled', $this->getIsBackendCertificateValidationEnabled());
        $writer->writeBooleanValue('isDnsResolutionEnabled', $this->getIsDnsResolutionEnabled());
        $writer->writeBooleanValue('isHttpOnlyCookieEnabled', $this->getIsHttpOnlyCookieEnabled());
        $writer->writeBooleanValue('isOnPremPublishingEnabled', $this->getIsOnPremPublishingEnabled());
        $writer->writeBooleanValue('isPersistentCookieEnabled', $this->getIsPersistentCookieEnabled());
        $writer->writeBooleanValue('isSecureCookieEnabled', $this->getIsSecureCookieEnabled());
        $writer->writeBooleanValue('isStateSessionEnabled', $this->getIsStateSessionEnabled());
        $writer->writeBooleanValue('isTranslateHostHeaderEnabled', $this->getIsTranslateHostHeaderEnabled());
        $writer->writeBooleanValue('isTranslateLinksInBodyEnabled', $this->getIsTranslateLinksInBodyEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('onPremisesApplicationSegments', $this->getOnPremisesApplicationSegments());
        $writer->writeObjectValue('segmentsConfiguration', $this->getSegmentsConfiguration());
        $writer->writeObjectValue('singleSignOnSettings', $this->getSingleSignOnSettings());
        $writer->writeBooleanValue('useAlternateUrlForTranslationAndRedirect', $this->getUseAlternateUrlForTranslationAndRedirect());
        $writer->writeObjectValue('verifiedCustomDomainCertificatesMetadata', $this->getVerifiedCustomDomainCertificatesMetadata());
        $writer->writeObjectValue('verifiedCustomDomainKeyCredential', $this->getVerifiedCustomDomainKeyCredential());
        $writer->writeObjectValue('verifiedCustomDomainPasswordCredential', $this->getVerifiedCustomDomainPasswordCredential());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alternateUrl property value. If you're configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that points to the traffic manager.
     * @param string|null $value Value to set for the alternateUrl property.
    */
    public function setAlternateUrl(?string $value): void {
        $this->getBackingStore()->set('alternateUrl', $value);
    }

    /**
     * Sets the applicationServerTimeout property value. The duration the connector waits for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
     * @param string|null $value Value to set for the applicationServerTimeout property.
    */
    public function setApplicationServerTimeout(?string $value): void {
        $this->getBackingStore()->set('applicationServerTimeout', $value);
    }

    /**
     * Sets the applicationType property value. Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
     * @param string|null $value Value to set for the applicationType property.
    */
    public function setApplicationType(?string $value): void {
        $this->getBackingStore()->set('applicationType', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the externalAuthenticationType property value. Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Pass through doesn't require authentication. Possible values are: passthru, aadPreAuthentication.
     * @param ExternalAuthenticationType|null $value Value to set for the externalAuthenticationType property.
    */
    public function setExternalAuthenticationType(?ExternalAuthenticationType $value): void {
        $this->getBackingStore()->set('externalAuthenticationType', $value);
    }

    /**
     * Sets the externalUrl property value. The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
     * @param string|null $value Value to set for the externalUrl property.
    */
    public function setExternalUrl(?string $value): void {
        $this->getBackingStore()->set('externalUrl', $value);
    }

    /**
     * Sets the internalUrl property value. The internal url of the application. For example, https://intranet/.
     * @param string|null $value Value to set for the internalUrl property.
    */
    public function setInternalUrl(?string $value): void {
        $this->getBackingStore()->set('internalUrl', $value);
    }

    /**
     * Sets the isAccessibleViaZTNAClient property value. The isAccessibleViaZTNAClient property
     * @param bool|null $value Value to set for the isAccessibleViaZTNAClient property.
    */
    public function setIsAccessibleViaZTNAClient(?bool $value): void {
        $this->getBackingStore()->set('isAccessibleViaZTNAClient', $value);
    }

    /**
     * Sets the isBackendCertificateValidationEnabled property value. Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property is set to true by default. For all existing apps, the property is set to false.
     * @param bool|null $value Value to set for the isBackendCertificateValidationEnabled property.
    */
    public function setIsBackendCertificateValidationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isBackendCertificateValidationEnabled', $value);
    }

    /**
     * Sets the isDnsResolutionEnabled property value. The isDnsResolutionEnabled property
     * @param bool|null $value Value to set for the isDnsResolutionEnabled property.
    */
    public function setIsDnsResolutionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDnsResolutionEnabled', $value);
    }

    /**
     * Sets the isHttpOnlyCookieEnabled property value. Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
     * @param bool|null $value Value to set for the isHttpOnlyCookieEnabled property.
    */
    public function setIsHttpOnlyCookieEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHttpOnlyCookieEnabled', $value);
    }

    /**
     * Sets the isOnPremPublishingEnabled property value. Indicates if the application is currently being published via Application Proxy or not. This is preset by the system. Read-only.
     * @param bool|null $value Value to set for the isOnPremPublishingEnabled property.
    */
    public function setIsOnPremPublishingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isOnPremPublishingEnabled', $value);
    }

    /**
     * Sets the isPersistentCookieEnabled property value. Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Microsoft Entra ID. Default value is false.
     * @param bool|null $value Value to set for the isPersistentCookieEnabled property.
    */
    public function setIsPersistentCookieEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPersistentCookieEnabled', $value);
    }

    /**
     * Sets the isSecureCookieEnabled property value. Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
     * @param bool|null $value Value to set for the isSecureCookieEnabled property.
    */
    public function setIsSecureCookieEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSecureCookieEnabled', $value);
    }

    /**
     * Sets the isStateSessionEnabled property value. Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
     * @param bool|null $value Value to set for the isStateSessionEnabled property.
    */
    public function setIsStateSessionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isStateSessionEnabled', $value);
    }

    /**
     * Sets the isTranslateHostHeaderEnabled property value. Indicates if the application should translate urls in the response headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
     * @param bool|null $value Value to set for the isTranslateHostHeaderEnabled property.
    */
    public function setIsTranslateHostHeaderEnabled(?bool $value): void {
        $this->getBackingStore()->set('isTranslateHostHeaderEnabled', $value);
    }

    /**
     * Sets the isTranslateLinksInBodyEnabled property value. Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
     * @param bool|null $value Value to set for the isTranslateLinksInBodyEnabled property.
    */
    public function setIsTranslateLinksInBodyEnabled(?bool $value): void {
        $this->getBackingStore()->set('isTranslateLinksInBodyEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onPremisesApplicationSegments property value. The onPremisesApplicationSegments property
     * @param array<OnPremisesApplicationSegment>|null $value Value to set for the onPremisesApplicationSegments property.
    */
    public function setOnPremisesApplicationSegments(?array $value): void {
        $this->getBackingStore()->set('onPremisesApplicationSegments', $value);
    }

    /**
     * Sets the segmentsConfiguration property value. Represents the collection of application segments for an on-premises wildcard application that's published through Microsoft Entra application proxy.
     * @param SegmentConfiguration|null $value Value to set for the segmentsConfiguration property.
    */
    public function setSegmentsConfiguration(?SegmentConfiguration $value): void {
        $this->getBackingStore()->set('segmentsConfiguration', $value);
    }

    /**
     * Sets the singleSignOnSettings property value. Represents the single sign-on configuration for the on-premises application.
     * @param OnPremisesPublishingSingleSignOn|null $value Value to set for the singleSignOnSettings property.
    */
    public function setSingleSignOnSettings(?OnPremisesPublishingSingleSignOn $value): void {
        $this->getBackingStore()->set('singleSignOnSettings', $value);
    }

    /**
     * Sets the useAlternateUrlForTranslationAndRedirect property value. The useAlternateUrlForTranslationAndRedirect property
     * @param bool|null $value Value to set for the useAlternateUrlForTranslationAndRedirect property.
    */
    public function setUseAlternateUrlForTranslationAndRedirect(?bool $value): void {
        $this->getBackingStore()->set('useAlternateUrlForTranslationAndRedirect', $value);
    }

    /**
     * Sets the verifiedCustomDomainCertificatesMetadata property value. Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
     * @param VerifiedCustomDomainCertificatesMetadata|null $value Value to set for the verifiedCustomDomainCertificatesMetadata property.
    */
    public function setVerifiedCustomDomainCertificatesMetadata(?VerifiedCustomDomainCertificatesMetadata $value): void {
        $this->getBackingStore()->set('verifiedCustomDomainCertificatesMetadata', $value);
    }

    /**
     * Sets the verifiedCustomDomainKeyCredential property value. The associated key credential for the custom domain used.
     * @param KeyCredential|null $value Value to set for the verifiedCustomDomainKeyCredential property.
    */
    public function setVerifiedCustomDomainKeyCredential(?KeyCredential $value): void {
        $this->getBackingStore()->set('verifiedCustomDomainKeyCredential', $value);
    }

    /**
     * Sets the verifiedCustomDomainPasswordCredential property value. The associated password credential for the custom domain used.
     * @param PasswordCredential|null $value Value to set for the verifiedCustomDomainPasswordCredential property.
    */
    public function setVerifiedCustomDomainPasswordCredential(?PasswordCredential $value): void {
        $this->getBackingStore()->set('verifiedCustomDomainPasswordCredential', $value);
    }

}
