<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceManagementApplicabilityRuleOsEdition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementApplicabilityRuleOsEdition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementApplicabilityRuleOsEdition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementApplicabilityRuleOsEdition {
        return new DeviceManagementApplicabilityRuleOsEdition();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osEditionTypes' => fn(ParseNode $n) => $o->setOsEditionTypes($n->getCollectionOfEnumValues(Windows10EditionType::class)),
            'ruleType' => fn(ParseNode $n) => $o->setRuleType($n->getEnumValue(DeviceManagementApplicabilityRuleType::class)),
        ];
    }

    /**
     * Gets the name property value. Name for object.
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
     * Gets the osEditionTypes property value. Applicability rule OS edition type.
     * @return array<Windows10EditionType>|null
    */
    public function getOsEditionTypes(): ?array {
        return $this->getBackingStore()->get('osEditionTypes');
    }

    /**
     * Gets the ruleType property value. Supported Applicability rule types for Device Configuration
     * @return DeviceManagementApplicabilityRuleType|null
    */
    public function getRuleType(): ?DeviceManagementApplicabilityRuleType {
        return $this->getBackingStore()->get('ruleType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfEnumValues('osEditionTypes', $this->getOsEditionTypes());
        $writer->writeEnumValue('ruleType', $this->getRuleType());
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
     * Sets the name property value. Name for object.
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
     * Sets the osEditionTypes property value. Applicability rule OS edition type.
     *  @param array<Windows10EditionType>|null $value Value to set for the osEditionTypes property.
    */
    public function setOsEditionTypes(?array $value): void {
        $this->getBackingStore()->set('osEditionTypes', $value);
    }

    /**
     * Sets the ruleType property value. Supported Applicability rule types for Device Configuration
     *  @param DeviceManagementApplicabilityRuleType|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?DeviceManagementApplicabilityRuleType $value): void {
        $this->getBackingStore()->set('ruleType', $value);
    }

}
