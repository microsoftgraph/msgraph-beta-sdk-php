<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplicationTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplicationTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationTemplate {
        return new ApplicationTemplate();
    }

    /**
     * Gets the categories property value. The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.  Supports $filter (contains).
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the configurationUris property value. The URIs required for the single sign-on configuration of a preintegrated application.
     * @return array<ConfigurationUri>|null
    */
    public function getConfigurationUris(): ?array {
        $val = $this->getBackingStore()->get('configurationUris');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigurationUri::class);
            /** @var array<ConfigurationUri>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationUris'");
    }

    /**
     * Gets the description property value. A description of the application.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of the application. Supports $filter (contains).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endpoints property value. A collection of string URLs representing various domains that are used by this application.
     * @return array<string>|null
    */
    public function getEndpoints(): ?array {
        $val = $this->getBackingStore()->get('endpoints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpoints'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategories($val);
            },
            'configurationUris' => fn(ParseNode $n) => $o->setConfigurationUris($n->getCollectionOfObjectValues([ConfigurationUri::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endpoints' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEndpoints($val);
            },
            'homePageUrl' => fn(ParseNode $n) => $o->setHomePageUrl($n->getStringValue()),
            'informationalUrls' => fn(ParseNode $n) => $o->setInformationalUrls($n->getObjectValue([InformationalUrls::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'logoUrl' => fn(ParseNode $n) => $o->setLogoUrl($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'riskFactors' => fn(ParseNode $n) => $o->setRiskFactors($n->getObjectValue([ApplicationRiskFactors::class, 'createFromDiscriminatorValue'])),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getObjectValue([ApplicationRiskScore::class, 'createFromDiscriminatorValue'])),
            'supportedClaimConfiguration' => fn(ParseNode $n) => $o->setSupportedClaimConfiguration($n->getObjectValue([SupportedClaimConfiguration::class, 'createFromDiscriminatorValue'])),
            'supportedProvisioningTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedProvisioningTypes($val);
            },
            'supportedSingleSignOnModes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedSingleSignOnModes($val);
            },
        ]);
    }

    /**
     * Gets the homePageUrl property value. The home page URL of the application.
     * @return string|null
    */
    public function getHomePageUrl(): ?string {
        $val = $this->getBackingStore()->get('homePageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homePageUrl'");
    }

    /**
     * Gets the informationalUrls property value. The informationalUrls property
     * @return InformationalUrls|null
    */
    public function getInformationalUrls(): ?InformationalUrls {
        $val = $this->getBackingStore()->get('informationalUrls');
        if (is_null($val) || $val instanceof InformationalUrls) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informationalUrls'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the data for the application was last updated, represented using ISO 8601 format and always in UTC time.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the logoUrl property value. The URL to get the logo for this application.
     * @return string|null
    */
    public function getLogoUrl(): ?string {
        $val = $this->getBackingStore()->get('logoUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logoUrl'");
    }

    /**
     * Gets the publisher property value. The name of the publisher for this application.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the riskFactors property value. General business and operational information about the application provider. Returned only when $select is used.
     * @return ApplicationRiskFactors|null
    */
    public function getRiskFactors(): ?ApplicationRiskFactors {
        $val = $this->getBackingStore()->get('riskFactors');
        if (is_null($val) || $val instanceof ApplicationRiskFactors) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskFactors'");
    }

    /**
     * Gets the riskScore property value. Represents the Microsoft-generated numerical risk score assessment for the application. Supported $orderby on total (for example, $orderBy=riskScore/total desc). Returned only when $select is used.
     * @return ApplicationRiskScore|null
    */
    public function getRiskScore(): ?ApplicationRiskScore {
        $val = $this->getBackingStore()->get('riskScore');
        if (is_null($val) || $val instanceof ApplicationRiskScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskScore'");
    }

    /**
     * Gets the supportedClaimConfiguration property value. The supportedClaimConfiguration property
     * @return SupportedClaimConfiguration|null
    */
    public function getSupportedClaimConfiguration(): ?SupportedClaimConfiguration {
        $val = $this->getBackingStore()->get('supportedClaimConfiguration');
        if (is_null($val) || $val instanceof SupportedClaimConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedClaimConfiguration'");
    }

    /**
     * Gets the supportedProvisioningTypes property value. The list of provisioning modes supported by this application. The only valid value is sync.
     * @return array<string>|null
    */
    public function getSupportedProvisioningTypes(): ?array {
        $val = $this->getBackingStore()->get('supportedProvisioningTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedProvisioningTypes'");
    }

    /**
     * Gets the supportedSingleSignOnModes property value. The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
     * @return array<string>|null
    */
    public function getSupportedSingleSignOnModes(): ?array {
        $val = $this->getBackingStore()->get('supportedSingleSignOnModes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedSingleSignOnModes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('configurationUris', $this->getConfigurationUris());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('endpoints', $this->getEndpoints());
        $writer->writeStringValue('homePageUrl', $this->getHomePageUrl());
        $writer->writeObjectValue('informationalUrls', $this->getInformationalUrls());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('logoUrl', $this->getLogoUrl());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeObjectValue('riskFactors', $this->getRiskFactors());
        $writer->writeObjectValue('riskScore', $this->getRiskScore());
        $writer->writeObjectValue('supportedClaimConfiguration', $this->getSupportedClaimConfiguration());
        $writer->writeCollectionOfPrimitiveValues('supportedProvisioningTypes', $this->getSupportedProvisioningTypes());
        $writer->writeCollectionOfPrimitiveValues('supportedSingleSignOnModes', $this->getSupportedSingleSignOnModes());
    }

    /**
     * Sets the categories property value. The list of categories for the application. Supported values can be: Collaboration, Business Management, Consumer, Content management, CRM, Data services, Developer services, E-commerce, Education, ERP, Finance, Health, Human resources, IT infrastructure, Mail, Management, Marketing, Media, Productivity, Project management, Telecommunications, Tools, Travel, and Web design & hosting.  Supports $filter (contains).
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the configurationUris property value. The URIs required for the single sign-on configuration of a preintegrated application.
     * @param array<ConfigurationUri>|null $value Value to set for the configurationUris property.
    */
    public function setConfigurationUris(?array $value): void {
        $this->getBackingStore()->set('configurationUris', $value);
    }

    /**
     * Sets the description property value. A description of the application.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the application. Supports $filter (contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endpoints property value. A collection of string URLs representing various domains that are used by this application.
     * @param array<string>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value): void {
        $this->getBackingStore()->set('endpoints', $value);
    }

    /**
     * Sets the homePageUrl property value. The home page URL of the application.
     * @param string|null $value Value to set for the homePageUrl property.
    */
    public function setHomePageUrl(?string $value): void {
        $this->getBackingStore()->set('homePageUrl', $value);
    }

    /**
     * Sets the informationalUrls property value. The informationalUrls property
     * @param InformationalUrls|null $value Value to set for the informationalUrls property.
    */
    public function setInformationalUrls(?InformationalUrls $value): void {
        $this->getBackingStore()->set('informationalUrls', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the data for the application was last updated, represented using ISO 8601 format and always in UTC time.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the logoUrl property value. The URL to get the logo for this application.
     * @param string|null $value Value to set for the logoUrl property.
    */
    public function setLogoUrl(?string $value): void {
        $this->getBackingStore()->set('logoUrl', $value);
    }

    /**
     * Sets the publisher property value. The name of the publisher for this application.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the riskFactors property value. General business and operational information about the application provider. Returned only when $select is used.
     * @param ApplicationRiskFactors|null $value Value to set for the riskFactors property.
    */
    public function setRiskFactors(?ApplicationRiskFactors $value): void {
        $this->getBackingStore()->set('riskFactors', $value);
    }

    /**
     * Sets the riskScore property value. Represents the Microsoft-generated numerical risk score assessment for the application. Supported $orderby on total (for example, $orderBy=riskScore/total desc). Returned only when $select is used.
     * @param ApplicationRiskScore|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?ApplicationRiskScore $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the supportedClaimConfiguration property value. The supportedClaimConfiguration property
     * @param SupportedClaimConfiguration|null $value Value to set for the supportedClaimConfiguration property.
    */
    public function setSupportedClaimConfiguration(?SupportedClaimConfiguration $value): void {
        $this->getBackingStore()->set('supportedClaimConfiguration', $value);
    }

    /**
     * Sets the supportedProvisioningTypes property value. The list of provisioning modes supported by this application. The only valid value is sync.
     * @param array<string>|null $value Value to set for the supportedProvisioningTypes property.
    */
    public function setSupportedProvisioningTypes(?array $value): void {
        $this->getBackingStore()->set('supportedProvisioningTypes', $value);
    }

    /**
     * Sets the supportedSingleSignOnModes property value. The list of single sign-on modes supported by this application. The supported values are oidc, password, saml, and notSupported.
     * @param array<string>|null $value Value to set for the supportedSingleSignOnModes property.
    */
    public function setSupportedSingleSignOnModes(?array $value): void {
        $this->getBackingStore()->set('supportedSingleSignOnModes', $value);
    }

}
