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

class ConditionalAccessApplications implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConditionalAccessApplications and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessApplications {
        return new ConditionalAccessApplications();
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
     * Gets the applicationFilter property value. Filter that defines the dynamic-application-syntax rule to include/exclude cloud applications. A filter can use custom security attributes to include/exclude applications.
     * @return ConditionalAccessFilter|null
    */
    public function getApplicationFilter(): ?ConditionalAccessFilter {
        $val = $this->getBackingStore()->get('applicationFilter');
        if (is_null($val) || $val instanceof ConditionalAccessFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationFilter'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeApplications property value. Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @return array<string>|null
    */
    public function getExcludeApplications(): ?array {
        $val = $this->getBackingStore()->get('excludeApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeApplications'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationFilter' => fn(ParseNode $n) => $o->setApplicationFilter($n->getObjectValue([ConditionalAccessFilter::class, 'createFromDiscriminatorValue'])),
            'excludeApplications' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeApplications($val);
            },
            'globalSecureAccess' => fn(ParseNode $n) => $o->setGlobalSecureAccess($n->getObjectValue([ConditionalAccessGlobalSecureAccess::class, 'createFromDiscriminatorValue'])),
            'includeApplications' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncludeApplications($val);
            },
            'includeAuthenticationContextClassReferences' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncludeAuthenticationContextClassReferences($val);
            },
            'includeUserActions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncludeUserActions($val);
            },
            'networkAccess' => fn(ParseNode $n) => $o->setNetworkAccess($n->getObjectValue([ConditionalAccessNetworkAccess::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the globalSecureAccess property value. Represents traffic profile for Global Secure Access. This property is deprecated and will stop returning data on June 1, 2025. Use new Global Secure Access applications instead.
     * @return ConditionalAccessGlobalSecureAccess|null
    */
    public function getGlobalSecureAccess(): ?ConditionalAccessGlobalSecureAccess {
        $val = $this->getBackingStore()->get('globalSecureAccess');
        if (is_null($val) || $val instanceof ConditionalAccessGlobalSecureAccess) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'globalSecureAccess'");
    }

    /**
     * Gets the includeApplications property value. Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @return array<string>|null
    */
    public function getIncludeApplications(): ?array {
        $val = $this->getBackingStore()->get('includeApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeApplications'");
    }

    /**
     * Gets the includeAuthenticationContextClassReferences property value. Authentication context class references include. Supported values are c1 through c25.
     * @return array<string>|null
    */
    public function getIncludeAuthenticationContextClassReferences(): ?array {
        $val = $this->getBackingStore()->get('includeAuthenticationContextClassReferences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeAuthenticationContextClassReferences'");
    }

    /**
     * Gets the includeUserActions property value. User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     * @return array<string>|null
    */
    public function getIncludeUserActions(): ?array {
        $val = $this->getBackingStore()->get('includeUserActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeUserActions'");
    }

    /**
     * Gets the networkAccess property value. Represents traffic profile for Global Secure Access. This property is deprecated and will stop returning data on June 1, 2025. Use new Global Secure Access applications instead.
     * @return ConditionalAccessNetworkAccess|null
    */
    public function getNetworkAccess(): ?ConditionalAccessNetworkAccess {
        $val = $this->getBackingStore()->get('networkAccess');
        if (is_null($val) || $val instanceof ConditionalAccessNetworkAccess) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkAccess'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applicationFilter', $this->getApplicationFilter());
        $writer->writeCollectionOfPrimitiveValues('excludeApplications', $this->getExcludeApplications());
        $writer->writeObjectValue('globalSecureAccess', $this->getGlobalSecureAccess());
        $writer->writeCollectionOfPrimitiveValues('includeApplications', $this->getIncludeApplications());
        $writer->writeCollectionOfPrimitiveValues('includeAuthenticationContextClassReferences', $this->getIncludeAuthenticationContextClassReferences());
        $writer->writeCollectionOfPrimitiveValues('includeUserActions', $this->getIncludeUserActions());
        $writer->writeObjectValue('networkAccess', $this->getNetworkAccess());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the applicationFilter property value. Filter that defines the dynamic-application-syntax rule to include/exclude cloud applications. A filter can use custom security attributes to include/exclude applications.
     * @param ConditionalAccessFilter|null $value Value to set for the applicationFilter property.
    */
    public function setApplicationFilter(?ConditionalAccessFilter $value): void {
        $this->getBackingStore()->set('applicationFilter', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the excludeApplications property value. Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @param array<string>|null $value Value to set for the excludeApplications property.
    */
    public function setExcludeApplications(?array $value): void {
        $this->getBackingStore()->set('excludeApplications', $value);
    }

    /**
     * Sets the globalSecureAccess property value. Represents traffic profile for Global Secure Access. This property is deprecated and will stop returning data on June 1, 2025. Use new Global Secure Access applications instead.
     * @param ConditionalAccessGlobalSecureAccess|null $value Value to set for the globalSecureAccess property.
    */
    public function setGlobalSecureAccess(?ConditionalAccessGlobalSecureAccess $value): void {
        $this->getBackingStore()->set('globalSecureAccess', $value);
    }

    /**
     * Sets the includeApplications property value. Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @param array<string>|null $value Value to set for the includeApplications property.
    */
    public function setIncludeApplications(?array $value): void {
        $this->getBackingStore()->set('includeApplications', $value);
    }

    /**
     * Sets the includeAuthenticationContextClassReferences property value. Authentication context class references include. Supported values are c1 through c25.
     * @param array<string>|null $value Value to set for the includeAuthenticationContextClassReferences property.
    */
    public function setIncludeAuthenticationContextClassReferences(?array $value): void {
        $this->getBackingStore()->set('includeAuthenticationContextClassReferences', $value);
    }

    /**
     * Sets the includeUserActions property value. User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     * @param array<string>|null $value Value to set for the includeUserActions property.
    */
    public function setIncludeUserActions(?array $value): void {
        $this->getBackingStore()->set('includeUserActions', $value);
    }

    /**
     * Sets the networkAccess property value. Represents traffic profile for Global Secure Access. This property is deprecated and will stop returning data on June 1, 2025. Use new Global Secure Access applications instead.
     * @param ConditionalAccessNetworkAccess|null $value Value to set for the networkAccess property.
    */
    public function setNetworkAccess(?ConditionalAccessNetworkAccess $value): void {
        $this->getBackingStore()->set('networkAccess', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
