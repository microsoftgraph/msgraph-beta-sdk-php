<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesPublishing implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $alternateUrl If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
    */
    private ?string $alternateUrl = null;
    
    /**
     * @var string|null $applicationServerTimeout The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
    */
    private ?string $applicationServerTimeout = null;
    
    /**
     * @var string|null $applicationType Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
    */
    private ?string $applicationType = null;
    
    /**
     * @var ExternalAuthenticationType|null $externalAuthenticationType Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
    */
    private ?ExternalAuthenticationType $externalAuthenticationType = null;
    
    /**
     * @var string|null $externalUrl The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
    */
    private ?string $externalUrl = null;
    
    /**
     * @var string|null $internalUrl The internal url of the application. For example, https://intranet/.
    */
    private ?string $internalUrl = null;
    
    /**
     * @var bool|null $isBackendCertificateValidationEnabled Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
    */
    private ?bool $isBackendCertificateValidationEnabled = null;
    
    /**
     * @var bool|null $isHttpOnlyCookieEnabled Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
    */
    private ?bool $isHttpOnlyCookieEnabled = null;
    
    /**
     * @var bool|null $isOnPremPublishingEnabled Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
    */
    private ?bool $isOnPremPublishingEnabled = null;
    
    /**
     * @var bool|null $isPersistentCookieEnabled Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
    */
    private ?bool $isPersistentCookieEnabled = null;
    
    /**
     * @var bool|null $isSecureCookieEnabled Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
    */
    private ?bool $isSecureCookieEnabled = null;
    
    /**
     * @var bool|null $isStateSessionEnabled Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
    */
    private ?bool $isStateSessionEnabled = null;
    
    /**
     * @var bool|null $isTranslateHostHeaderEnabled Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
    */
    private ?bool $isTranslateHostHeaderEnabled = null;
    
    /**
     * @var bool|null $isTranslateLinksInBodyEnabled Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
    */
    private ?bool $isTranslateLinksInBodyEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<OnPremisesApplicationSegment>|null $onPremisesApplicationSegments The onPremisesApplicationSegments property
    */
    private ?array $onPremisesApplicationSegments = null;
    
    /**
     * @var OnPremisesPublishingSingleSignOn|null $singleSignOnSettings Represents the single sign-on configuration for the on-premises application.
    */
    private ?OnPremisesPublishingSingleSignOn $singleSignOnSettings = null;
    
    /**
     * @var bool|null $useAlternateUrlForTranslationAndRedirect The useAlternateUrlForTranslationAndRedirect property
    */
    private ?bool $useAlternateUrlForTranslationAndRedirect = null;
    
    /**
     * @var VerifiedCustomDomainCertificatesMetadata|null $verifiedCustomDomainCertificatesMetadata Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
    */
    private ?VerifiedCustomDomainCertificatesMetadata $verifiedCustomDomainCertificatesMetadata = null;
    
    /**
     * @var KeyCredential|null $verifiedCustomDomainKeyCredential The associated key credential for the custom domain used.
    */
    private ?KeyCredential $verifiedCustomDomainKeyCredential = null;
    
    /**
     * @var PasswordCredential|null $verifiedCustomDomainPasswordCredential The associated password credential for the custom domain used.
    */
    private ?PasswordCredential $verifiedCustomDomainPasswordCredential = null;
    
    /**
     * Instantiates a new onPremisesPublishing and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alternateUrl property value. If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
     * @return string|null
    */
    public function getAlternateUrl(): ?string {
        return $this->alternateUrl;
    }

    /**
     * Gets the applicationServerTimeout property value. The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
     * @return string|null
    */
    public function getApplicationServerTimeout(): ?string {
        return $this->applicationServerTimeout;
    }

    /**
     * Gets the applicationType property value. Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
     * @return string|null
    */
    public function getApplicationType(): ?string {
        return $this->applicationType;
    }

    /**
     * Gets the externalAuthenticationType property value. Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
     * @return ExternalAuthenticationType|null
    */
    public function getExternalAuthenticationType(): ?ExternalAuthenticationType {
        return $this->externalAuthenticationType;
    }

    /**
     * Gets the externalUrl property value. The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
     * @return string|null
    */
    public function getExternalUrl(): ?string {
        return $this->externalUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alternateUrl' => function (ParseNode $n) use ($o) { $o->setAlternateUrl($n->getStringValue()); },
            'applicationServerTimeout' => function (ParseNode $n) use ($o) { $o->setApplicationServerTimeout($n->getStringValue()); },
            'applicationType' => function (ParseNode $n) use ($o) { $o->setApplicationType($n->getStringValue()); },
            'externalAuthenticationType' => function (ParseNode $n) use ($o) { $o->setExternalAuthenticationType($n->getEnumValue(ExternalAuthenticationType::class)); },
            'externalUrl' => function (ParseNode $n) use ($o) { $o->setExternalUrl($n->getStringValue()); },
            'internalUrl' => function (ParseNode $n) use ($o) { $o->setInternalUrl($n->getStringValue()); },
            'isBackendCertificateValidationEnabled' => function (ParseNode $n) use ($o) { $o->setIsBackendCertificateValidationEnabled($n->getBooleanValue()); },
            'isHttpOnlyCookieEnabled' => function (ParseNode $n) use ($o) { $o->setIsHttpOnlyCookieEnabled($n->getBooleanValue()); },
            'isOnPremPublishingEnabled' => function (ParseNode $n) use ($o) { $o->setIsOnPremPublishingEnabled($n->getBooleanValue()); },
            'isPersistentCookieEnabled' => function (ParseNode $n) use ($o) { $o->setIsPersistentCookieEnabled($n->getBooleanValue()); },
            'isSecureCookieEnabled' => function (ParseNode $n) use ($o) { $o->setIsSecureCookieEnabled($n->getBooleanValue()); },
            'isStateSessionEnabled' => function (ParseNode $n) use ($o) { $o->setIsStateSessionEnabled($n->getBooleanValue()); },
            'isTranslateHostHeaderEnabled' => function (ParseNode $n) use ($o) { $o->setIsTranslateHostHeaderEnabled($n->getBooleanValue()); },
            'isTranslateLinksInBodyEnabled' => function (ParseNode $n) use ($o) { $o->setIsTranslateLinksInBodyEnabled($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'onPremisesApplicationSegments' => function (ParseNode $n) use ($o) { $o->setOnPremisesApplicationSegments($n->getCollectionOfObjectValues(array(OnPremisesApplicationSegment::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnSettings' => function (ParseNode $n) use ($o) { $o->setSingleSignOnSettings($n->getObjectValue(array(OnPremisesPublishingSingleSignOn::class, 'createFromDiscriminatorValue'))); },
            'useAlternateUrlForTranslationAndRedirect' => function (ParseNode $n) use ($o) { $o->setUseAlternateUrlForTranslationAndRedirect($n->getBooleanValue()); },
            'verifiedCustomDomainCertificatesMetadata' => function (ParseNode $n) use ($o) { $o->setVerifiedCustomDomainCertificatesMetadata($n->getObjectValue(array(VerifiedCustomDomainCertificatesMetadata::class, 'createFromDiscriminatorValue'))); },
            'verifiedCustomDomainKeyCredential' => function (ParseNode $n) use ($o) { $o->setVerifiedCustomDomainKeyCredential($n->getObjectValue(array(KeyCredential::class, 'createFromDiscriminatorValue'))); },
            'verifiedCustomDomainPasswordCredential' => function (ParseNode $n) use ($o) { $o->setVerifiedCustomDomainPasswordCredential($n->getObjectValue(array(PasswordCredential::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the internalUrl property value. The internal url of the application. For example, https://intranet/.
     * @return string|null
    */
    public function getInternalUrl(): ?string {
        return $this->internalUrl;
    }

    /**
     * Gets the isBackendCertificateValidationEnabled property value. Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
     * @return bool|null
    */
    public function getIsBackendCertificateValidationEnabled(): ?bool {
        return $this->isBackendCertificateValidationEnabled;
    }

    /**
     * Gets the isHttpOnlyCookieEnabled property value. Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
     * @return bool|null
    */
    public function getIsHttpOnlyCookieEnabled(): ?bool {
        return $this->isHttpOnlyCookieEnabled;
    }

    /**
     * Gets the isOnPremPublishingEnabled property value. Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
     * @return bool|null
    */
    public function getIsOnPremPublishingEnabled(): ?bool {
        return $this->isOnPremPublishingEnabled;
    }

    /**
     * Gets the isPersistentCookieEnabled property value. Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
     * @return bool|null
    */
    public function getIsPersistentCookieEnabled(): ?bool {
        return $this->isPersistentCookieEnabled;
    }

    /**
     * Gets the isSecureCookieEnabled property value. Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
     * @return bool|null
    */
    public function getIsSecureCookieEnabled(): ?bool {
        return $this->isSecureCookieEnabled;
    }

    /**
     * Gets the isStateSessionEnabled property value. Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
     * @return bool|null
    */
    public function getIsStateSessionEnabled(): ?bool {
        return $this->isStateSessionEnabled;
    }

    /**
     * Gets the isTranslateHostHeaderEnabled property value. Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
     * @return bool|null
    */
    public function getIsTranslateHostHeaderEnabled(): ?bool {
        return $this->isTranslateHostHeaderEnabled;
    }

    /**
     * Gets the isTranslateLinksInBodyEnabled property value. Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
     * @return bool|null
    */
    public function getIsTranslateLinksInBodyEnabled(): ?bool {
        return $this->isTranslateLinksInBodyEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the onPremisesApplicationSegments property value. The onPremisesApplicationSegments property
     * @return array<OnPremisesApplicationSegment>|null
    */
    public function getOnPremisesApplicationSegments(): ?array {
        return $this->onPremisesApplicationSegments;
    }

    /**
     * Gets the singleSignOnSettings property value. Represents the single sign-on configuration for the on-premises application.
     * @return OnPremisesPublishingSingleSignOn|null
    */
    public function getSingleSignOnSettings(): ?OnPremisesPublishingSingleSignOn {
        return $this->singleSignOnSettings;
    }

    /**
     * Gets the useAlternateUrlForTranslationAndRedirect property value. The useAlternateUrlForTranslationAndRedirect property
     * @return bool|null
    */
    public function getUseAlternateUrlForTranslationAndRedirect(): ?bool {
        return $this->useAlternateUrlForTranslationAndRedirect;
    }

    /**
     * Gets the verifiedCustomDomainCertificatesMetadata property value. Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
     * @return VerifiedCustomDomainCertificatesMetadata|null
    */
    public function getVerifiedCustomDomainCertificatesMetadata(): ?VerifiedCustomDomainCertificatesMetadata {
        return $this->verifiedCustomDomainCertificatesMetadata;
    }

    /**
     * Gets the verifiedCustomDomainKeyCredential property value. The associated key credential for the custom domain used.
     * @return KeyCredential|null
    */
    public function getVerifiedCustomDomainKeyCredential(): ?KeyCredential {
        return $this->verifiedCustomDomainKeyCredential;
    }

    /**
     * Gets the verifiedCustomDomainPasswordCredential property value. The associated password credential for the custom domain used.
     * @return PasswordCredential|null
    */
    public function getVerifiedCustomDomainPasswordCredential(): ?PasswordCredential {
        return $this->verifiedCustomDomainPasswordCredential;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alternateUrl', $this->alternateUrl);
        $writer->writeStringValue('applicationServerTimeout', $this->applicationServerTimeout);
        $writer->writeStringValue('applicationType', $this->applicationType);
        $writer->writeEnumValue('externalAuthenticationType', $this->externalAuthenticationType);
        $writer->writeStringValue('externalUrl', $this->externalUrl);
        $writer->writeStringValue('internalUrl', $this->internalUrl);
        $writer->writeBooleanValue('isBackendCertificateValidationEnabled', $this->isBackendCertificateValidationEnabled);
        $writer->writeBooleanValue('isHttpOnlyCookieEnabled', $this->isHttpOnlyCookieEnabled);
        $writer->writeBooleanValue('isOnPremPublishingEnabled', $this->isOnPremPublishingEnabled);
        $writer->writeBooleanValue('isPersistentCookieEnabled', $this->isPersistentCookieEnabled);
        $writer->writeBooleanValue('isSecureCookieEnabled', $this->isSecureCookieEnabled);
        $writer->writeBooleanValue('isStateSessionEnabled', $this->isStateSessionEnabled);
        $writer->writeBooleanValue('isTranslateHostHeaderEnabled', $this->isTranslateHostHeaderEnabled);
        $writer->writeBooleanValue('isTranslateLinksInBodyEnabled', $this->isTranslateLinksInBodyEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('onPremisesApplicationSegments', $this->onPremisesApplicationSegments);
        $writer->writeObjectValue('singleSignOnSettings', $this->singleSignOnSettings);
        $writer->writeBooleanValue('useAlternateUrlForTranslationAndRedirect', $this->useAlternateUrlForTranslationAndRedirect);
        $writer->writeObjectValue('verifiedCustomDomainCertificatesMetadata', $this->verifiedCustomDomainCertificatesMetadata);
        $writer->writeObjectValue('verifiedCustomDomainKeyCredential', $this->verifiedCustomDomainKeyCredential);
        $writer->writeObjectValue('verifiedCustomDomainPasswordCredential', $this->verifiedCustomDomainPasswordCredential);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the alternateUrl property value. If you are configuring a traffic manager in front of multiple App Proxy applications, the alternateUrl is the user-friendly URL that will point to the traffic manager.
     *  @param string|null $value Value to set for the alternateUrl property.
    */
    public function setAlternateUrl(?string $value ): void {
        $this->alternateUrl = $value;
    }

    /**
     * Sets the applicationServerTimeout property value. The duration the connector will wait for a response from the backend application before closing the connection. Possible values are default, long. When set to default, the backend application timeout has a length of 85 seconds. When set to long, the backend timeout is increased to 180 seconds. Use long if your server takes more than 85 seconds to respond to requests or if you are unable to access the application and the error status is 'Backend Timeout'. Default value is default.
     *  @param string|null $value Value to set for the applicationServerTimeout property.
    */
    public function setApplicationServerTimeout(?string $value ): void {
        $this->applicationServerTimeout = $value;
    }

    /**
     * Sets the applicationType property value. Indicates if this application is an Application Proxy configured application. This is pre-set by the system. Read-only.
     *  @param string|null $value Value to set for the applicationType property.
    */
    public function setApplicationType(?string $value ): void {
        $this->applicationType = $value;
    }

    /**
     * Sets the externalAuthenticationType property value. Details the pre-authentication setting for the application. Pre-authentication enforces that users must authenticate before accessing the app. Passthru does not require authentication. Possible values are: passthru, aadPreAuthentication.
     *  @param ExternalAuthenticationType|null $value Value to set for the externalAuthenticationType property.
    */
    public function setExternalAuthenticationType(?ExternalAuthenticationType $value ): void {
        $this->externalAuthenticationType = $value;
    }

    /**
     * Sets the externalUrl property value. The published external url for the application. For example, https://intranet-contoso.msappproxy.net/.
     *  @param string|null $value Value to set for the externalUrl property.
    */
    public function setExternalUrl(?string $value ): void {
        $this->externalUrl = $value;
    }

    /**
     * Sets the internalUrl property value. The internal url of the application. For example, https://intranet/.
     *  @param string|null $value Value to set for the internalUrl property.
    */
    public function setInternalUrl(?string $value ): void {
        $this->internalUrl = $value;
    }

    /**
     * Sets the isBackendCertificateValidationEnabled property value. Indicates whether backend SSL certificate validation is enabled for the application. For all new Application Proxy apps, the property will be set to true by default. For all existing apps, the property will be set to false.
     *  @param bool|null $value Value to set for the isBackendCertificateValidationEnabled property.
    */
    public function setIsBackendCertificateValidationEnabled(?bool $value ): void {
        $this->isBackendCertificateValidationEnabled = $value;
    }

    /**
     * Sets the isHttpOnlyCookieEnabled property value. Indicates if the HTTPOnly cookie flag should be set in the HTTP response headers. Set this value to true to have Application Proxy cookies include the HTTPOnly flag in the HTTP response headers. If using Remote Desktop Services, set this value to False. Default value is false.
     *  @param bool|null $value Value to set for the isHttpOnlyCookieEnabled property.
    */
    public function setIsHttpOnlyCookieEnabled(?bool $value ): void {
        $this->isHttpOnlyCookieEnabled = $value;
    }

    /**
     * Sets the isOnPremPublishingEnabled property value. Indicates if the application is currently being published via Application Proxy or not. This is pre-set by the system. Read-only.
     *  @param bool|null $value Value to set for the isOnPremPublishingEnabled property.
    */
    public function setIsOnPremPublishingEnabled(?bool $value ): void {
        $this->isOnPremPublishingEnabled = $value;
    }

    /**
     * Sets the isPersistentCookieEnabled property value. Indicates if the Persistent cookie flag should be set in the HTTP response headers. Keep this value set to false. Only use this setting for applications that can't share cookies between processes. For more information about cookie settings, see Cookie settings for accessing on-premises applications in Azure Active Directory. Default value is false.
     *  @param bool|null $value Value to set for the isPersistentCookieEnabled property.
    */
    public function setIsPersistentCookieEnabled(?bool $value ): void {
        $this->isPersistentCookieEnabled = $value;
    }

    /**
     * Sets the isSecureCookieEnabled property value. Indicates if the Secure cookie flag should be set in the HTTP response headers. Set this value to true to transmit cookies over a secure channel such as an encrypted HTTPS request. Default value is true.
     *  @param bool|null $value Value to set for the isSecureCookieEnabled property.
    */
    public function setIsSecureCookieEnabled(?bool $value ): void {
        $this->isSecureCookieEnabled = $value;
    }

    /**
     * Sets the isStateSessionEnabled property value. Indicates whether validation of the state parameter when the client uses the OAuth 2.0 authorization code grant flow is enabled. This setting allows admins to specify whether they want to enable CSRF protection for their apps.
     *  @param bool|null $value Value to set for the isStateSessionEnabled property.
    */
    public function setIsStateSessionEnabled(?bool $value ): void {
        $this->isStateSessionEnabled = $value;
    }

    /**
     * Sets the isTranslateHostHeaderEnabled property value. Indicates if the application should translate urls in the reponse headers. Keep this value as true unless your application required the original host header in the authentication request. Default value is true.
     *  @param bool|null $value Value to set for the isTranslateHostHeaderEnabled property.
    */
    public function setIsTranslateHostHeaderEnabled(?bool $value ): void {
        $this->isTranslateHostHeaderEnabled = $value;
    }

    /**
     * Sets the isTranslateLinksInBodyEnabled property value. Indicates if the application should translate urls in the application body. Keep this value as false unless you have hardcoded HTML links to other on-premises applications and don't use custom domains. For more information, see Link translation with Application Proxy. Default value is false.
     *  @param bool|null $value Value to set for the isTranslateLinksInBodyEnabled property.
    */
    public function setIsTranslateLinksInBodyEnabled(?bool $value ): void {
        $this->isTranslateLinksInBodyEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the onPremisesApplicationSegments property value. The onPremisesApplicationSegments property
     *  @param array<OnPremisesApplicationSegment>|null $value Value to set for the onPremisesApplicationSegments property.
    */
    public function setOnPremisesApplicationSegments(?array $value ): void {
        $this->onPremisesApplicationSegments = $value;
    }

    /**
     * Sets the singleSignOnSettings property value. Represents the single sign-on configuration for the on-premises application.
     *  @param OnPremisesPublishingSingleSignOn|null $value Value to set for the singleSignOnSettings property.
    */
    public function setSingleSignOnSettings(?OnPremisesPublishingSingleSignOn $value ): void {
        $this->singleSignOnSettings = $value;
    }

    /**
     * Sets the useAlternateUrlForTranslationAndRedirect property value. The useAlternateUrlForTranslationAndRedirect property
     *  @param bool|null $value Value to set for the useAlternateUrlForTranslationAndRedirect property.
    */
    public function setUseAlternateUrlForTranslationAndRedirect(?bool $value ): void {
        $this->useAlternateUrlForTranslationAndRedirect = $value;
    }

    /**
     * Sets the verifiedCustomDomainCertificatesMetadata property value. Details of the certificate associated with the application when a custom domain is in use. null when using the default domain. Read-only.
     *  @param VerifiedCustomDomainCertificatesMetadata|null $value Value to set for the verifiedCustomDomainCertificatesMetadata property.
    */
    public function setVerifiedCustomDomainCertificatesMetadata(?VerifiedCustomDomainCertificatesMetadata $value ): void {
        $this->verifiedCustomDomainCertificatesMetadata = $value;
    }

    /**
     * Sets the verifiedCustomDomainKeyCredential property value. The associated key credential for the custom domain used.
     *  @param KeyCredential|null $value Value to set for the verifiedCustomDomainKeyCredential property.
    */
    public function setVerifiedCustomDomainKeyCredential(?KeyCredential $value ): void {
        $this->verifiedCustomDomainKeyCredential = $value;
    }

    /**
     * Sets the verifiedCustomDomainPasswordCredential property value. The associated password credential for the custom domain used.
     *  @param PasswordCredential|null $value Value to set for the verifiedCustomDomainPasswordCredential property.
    */
    public function setVerifiedCustomDomainPasswordCredential(?PasswordCredential $value ): void {
        $this->verifiedCustomDomainPasswordCredential = $value;
    }

}
