<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceComplianceScriptValidationResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceComplianceScriptValidationResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptValidationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptValidationResult {
        return new DeviceComplianceScriptValidationResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleErrors' => fn(ParseNode $n) => $o->setRuleErrors($n->getCollectionOfObjectValues([DeviceComplianceScriptRuleError::class, 'createFromDiscriminatorValue'])),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([DeviceComplianceScriptRule::class, 'createFromDiscriminatorValue'])),
            'scriptErrors' => fn(ParseNode $n) => $o->setScriptErrors($n->getCollectionOfObjectValues([DeviceComplianceScriptError::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the ruleErrors property value. Errors in json for the script for rules.
     * @return array<DeviceComplianceScriptRuleError>|null
    */
    public function getRuleErrors(): ?array {
        return $this->getBackingStore()->get('ruleErrors');
    }

    /**
     * Gets the rules property value. Parsed rules from json.
     * @return array<DeviceComplianceScriptRule>|null
    */
    public function getRules(): ?array {
        return $this->getBackingStore()->get('rules');
    }

    /**
     * Gets the scriptErrors property value. Errors in json for the script.
     * @return array<DeviceComplianceScriptError>|null
    */
    public function getScriptErrors(): ?array {
        return $this->getBackingStore()->get('scriptErrors');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('ruleErrors', $this->getRuleErrors());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeCollectionOfObjectValues('scriptErrors', $this->getScriptErrors());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ruleErrors property value. Errors in json for the script for rules.
     * @param array<DeviceComplianceScriptRuleError>|null $value Value to set for the ruleErrors property.
    */
    public function setRuleErrors(?array $value): void {
        $this->getBackingStore()->set('ruleErrors', $value);
    }

    /**
     * Sets the rules property value. Parsed rules from json.
     * @param array<DeviceComplianceScriptRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

    /**
     * Sets the scriptErrors property value. Errors in json for the script.
     * @param array<DeviceComplianceScriptError>|null $value Value to set for the scriptErrors property.
    */
    public function setScriptErrors(?array $value): void {
        $this->getBackingStore()->set('scriptErrors', $value);
    }

}
