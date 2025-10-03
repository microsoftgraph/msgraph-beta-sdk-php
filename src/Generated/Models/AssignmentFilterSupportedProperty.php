<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents the information about the property which is supported in crafting the rule of AssignmentFilter.
*/
class AssignmentFilterSupportedProperty implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AssignmentFilterSupportedProperty and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterSupportedProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterSupportedProperty {
        return new AssignmentFilterSupportedProperty();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dataType property value. The data type of the property.
     * @return string|null
    */
    public function getDataType(): ?string {
        $val = $this->getBackingStore()->get('dataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getStringValue()),
            'isCollection' => fn(ParseNode $n) => $o->setIsCollection($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'propertyRegexConstraint' => fn(ParseNode $n) => $o->setPropertyRegexConstraint($n->getStringValue()),
            'supportedOperators' => fn(ParseNode $n) => $o->setSupportedOperators($n->getCollectionOfEnumValues(AssignmentFilterOperator::class)),
            'supportedValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedValues($val);
            },
        ];
    }

    /**
     * Gets the isCollection property value. Indicates whether the property is a collection type or not.
     * @return bool|null
    */
    public function getIsCollection(): ?bool {
        $val = $this->getBackingStore()->get('isCollection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCollection'");
    }

    /**
     * Gets the name property value. Name of the property.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the propertyRegexConstraint property value. Regex string to do validation on the property value.
     * @return string|null
    */
    public function getPropertyRegexConstraint(): ?string {
        $val = $this->getBackingStore()->get('propertyRegexConstraint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'propertyRegexConstraint'");
    }

    /**
     * Gets the supportedOperators property value. List of all supported operators on this property.
     * @return array<AssignmentFilterOperator>|null
    */
    public function getSupportedOperators(): ?array {
        $val = $this->getBackingStore()->get('supportedOperators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignmentFilterOperator::class);
            /** @var array<AssignmentFilterOperator>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedOperators'");
    }

    /**
     * Gets the supportedValues property value. List of all supported values for this property, empty if everything is supported.
     * @return array<string>|null
    */
    public function getSupportedValues(): ?array {
        $val = $this->getBackingStore()->get('supportedValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedValues'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataType', $this->getDataType());
        $writer->writeBooleanValue('isCollection', $this->getIsCollection());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('propertyRegexConstraint', $this->getPropertyRegexConstraint());
        $writer->writeCollectionOfEnumValues('supportedOperators', $this->getSupportedOperators());
        $writer->writeCollectionOfPrimitiveValues('supportedValues', $this->getSupportedValues());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dataType property value. The data type of the property.
     * @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the isCollection property value. Indicates whether the property is a collection type or not.
     * @param bool|null $value Value to set for the isCollection property.
    */
    public function setIsCollection(?bool $value): void {
        $this->getBackingStore()->set('isCollection', $value);
    }

    /**
     * Sets the name property value. Name of the property.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the propertyRegexConstraint property value. Regex string to do validation on the property value.
     * @param string|null $value Value to set for the propertyRegexConstraint property.
    */
    public function setPropertyRegexConstraint(?string $value): void {
        $this->getBackingStore()->set('propertyRegexConstraint', $value);
    }

    /**
     * Sets the supportedOperators property value. List of all supported operators on this property.
     * @param array<AssignmentFilterOperator>|null $value Value to set for the supportedOperators property.
    */
    public function setSupportedOperators(?array $value): void {
        $this->getBackingStore()->set('supportedOperators', $value);
    }

    /**
     * Sets the supportedValues property value. List of all supported values for this property, empty if everything is supported.
     * @param array<string>|null $value Value to set for the supportedValues property.
    */
    public function setSupportedValues(?array $value): void {
        $this->getBackingStore()->set('supportedValues', $value);
    }

}
