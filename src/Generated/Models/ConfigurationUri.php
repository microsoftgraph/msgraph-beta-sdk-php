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

class ConfigurationUri implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConfigurationUri and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationUri
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationUri {
        return new ConfigurationUri();
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
     * Gets the appliesToSingleSignOnMode property value. The single sign-on mode that the URI is configured for. Possible values are: saml, password.
     * @return string|null
    */
    public function getAppliesToSingleSignOnMode(): ?string {
        $val = $this->getBackingStore()->get('appliesToSingleSignOnMode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesToSingleSignOnMode'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the examples property value. The various formats that the URI should follow.
     * @return array<string>|null
    */
    public function getExamples(): ?array {
        $val = $this->getBackingStore()->get('examples');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'examples'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appliesToSingleSignOnMode' => fn(ParseNode $n) => $o->setAppliesToSingleSignOnMode($n->getStringValue()),
            'examples' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExamples($val);
            },
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getEnumValue(UriUsageType::class)),
            'values' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValues($val);
            },
        ];
    }

    /**
     * Gets the isRequired property value. Indicates whether this URI is required for the single sign-on configuration.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequired'");
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
     * Gets the usage property value. The usage property
     * @return UriUsageType|null
    */
    public function getUsage(): ?UriUsageType {
        $val = $this->getBackingStore()->get('usage');
        if (is_null($val) || $val instanceof UriUsageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usage'");
    }

    /**
     * Gets the values property value. The suggested values for the URI. Developers may need to customize these values for their tenant.
     * @return array<string>|null
    */
    public function getValues(): ?array {
        $val = $this->getBackingStore()->get('values');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appliesToSingleSignOnMode', $this->getAppliesToSingleSignOnMode());
        $writer->writeCollectionOfPrimitiveValues('examples', $this->getExamples());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('usage', $this->getUsage());
        $writer->writeCollectionOfPrimitiveValues('values', $this->getValues());
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
     * Sets the appliesToSingleSignOnMode property value. The single sign-on mode that the URI is configured for. Possible values are: saml, password.
     * @param string|null $value Value to set for the appliesToSingleSignOnMode property.
    */
    public function setAppliesToSingleSignOnMode(?string $value): void {
        $this->getBackingStore()->set('appliesToSingleSignOnMode', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the examples property value. The various formats that the URI should follow.
     * @param array<string>|null $value Value to set for the examples property.
    */
    public function setExamples(?array $value): void {
        $this->getBackingStore()->set('examples', $value);
    }

    /**
     * Sets the isRequired property value. Indicates whether this URI is required for the single sign-on configuration.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the usage property value. The usage property
     * @param UriUsageType|null $value Value to set for the usage property.
    */
    public function setUsage(?UriUsageType $value): void {
        $this->getBackingStore()->set('usage', $value);
    }

    /**
     * Sets the values property value. The suggested values for the URI. Developers may need to customize these values for their tenant.
     * @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
