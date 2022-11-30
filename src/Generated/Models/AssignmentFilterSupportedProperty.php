<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AssignmentFilterSupportedProperty implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new assignmentFilterSupportedProperty and sets the default values.
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
        return $this->getBackingStore()->get('dataType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
            'supportedValues' => fn(ParseNode $n) => $o->setSupportedValues($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the isCollection property value. Indicates whether the property is a collection type or not.
     * @return bool|null
    */
    public function getIsCollection(): ?bool {
        return $this->getBackingStore()->get('isCollection');
    }

    /**
     * Gets the name property value. Name of the property.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the propertyRegexConstraint property value. Regex string to do validation on the property value.
     * @return string|null
    */
    public function getPropertyRegexConstraint(): ?string {
        return $this->getBackingStore()->get('propertyRegexConstraint');
    }

    /**
     * Gets the supportedOperators property value. List of all supported operators on this property.
     * @return array<AssignmentFilterOperator>|null
    */
    public function getSupportedOperators(): ?array {
        return $this->getBackingStore()->get('supportedOperators');
    }

    /**
     * Gets the supportedValues property value. List of all supported values for this propery, empty if everything is supported.
     * @return array<string>|null
    */
    public function getSupportedValues(): ?array {
        return $this->getBackingStore()->get('supportedValues');
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
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dataType property value. The data type of the property.
     *  @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the isCollection property value. Indicates whether the property is a collection type or not.
     *  @param bool|null $value Value to set for the isCollection property.
    */
    public function setIsCollection(?bool $value): void {
        $this->getBackingStore()->set('isCollection', $value);
    }

    /**
     * Sets the name property value. Name of the property.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the propertyRegexConstraint property value. Regex string to do validation on the property value.
     *  @param string|null $value Value to set for the propertyRegexConstraint property.
    */
    public function setPropertyRegexConstraint(?string $value): void {
        $this->getBackingStore()->set('propertyRegexConstraint', $value);
    }

    /**
     * Sets the supportedOperators property value. List of all supported operators on this property.
     *  @param array<AssignmentFilterOperator>|null $value Value to set for the supportedOperators property.
    */
    public function setSupportedOperators(?array $value): void {
        $this->getBackingStore()->set('supportedOperators', $value);
    }

    /**
     * Sets the supportedValues property value. List of all supported values for this propery, empty if everything is supported.
     *  @param array<string>|null $value Value to set for the supportedValues property.
    */
    public function setSupportedValues(?array $value): void {
        $this->getBackingStore()->set('supportedValues', $value);
    }

}
