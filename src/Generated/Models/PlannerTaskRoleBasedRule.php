<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlannerTaskRoleBasedRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlannerTaskRoleBasedRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskRoleBasedRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskRoleBasedRule {
        return new PlannerTaskRoleBasedRule();
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
     * Gets the defaultRule property value. Default rule that applies when a property or action-specific rule is not provided. The possible values are: Allow, Block
     * @return string|null
    */
    public function getDefaultRule(): ?string {
        $val = $this->getBackingStore()->get('defaultRule');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultRule'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultRule' => fn(ParseNode $n) => $o->setDefaultRule($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'propertyRule' => fn(ParseNode $n) => $o->setPropertyRule($n->getObjectValue([PlannerTaskPropertyRule::class, 'createFromDiscriminatorValue'])),
            'role' => fn(ParseNode $n) => $o->setRole($n->getObjectValue([PlannerTaskConfigurationRoleBase::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the propertyRule property value. Rules for specific properties and actions.
     * @return PlannerTaskPropertyRule|null
    */
    public function getPropertyRule(): ?PlannerTaskPropertyRule {
        $val = $this->getBackingStore()->get('propertyRule');
        if (is_null($val) || $val instanceof PlannerTaskPropertyRule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'propertyRule'");
    }

    /**
     * Gets the role property value. The role these rules apply to.
     * @return PlannerTaskConfigurationRoleBase|null
    */
    public function getRole(): ?PlannerTaskConfigurationRoleBase {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof PlannerTaskConfigurationRoleBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultRule', $this->getDefaultRule());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('propertyRule', $this->getPropertyRule());
        $writer->writeObjectValue('role', $this->getRole());
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
     * Sets the defaultRule property value. Default rule that applies when a property or action-specific rule is not provided. The possible values are: Allow, Block
     * @param string|null $value Value to set for the defaultRule property.
    */
    public function setDefaultRule(?string $value): void {
        $this->getBackingStore()->set('defaultRule', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the propertyRule property value. Rules for specific properties and actions.
     * @param PlannerTaskPropertyRule|null $value Value to set for the propertyRule property.
    */
    public function setPropertyRule(?PlannerTaskPropertyRule $value): void {
        $this->getBackingStore()->set('propertyRule', $value);
    }

    /**
     * Sets the role property value. The role these rules apply to.
     * @param PlannerTaskConfigurationRoleBase|null $value Value to set for the role property.
    */
    public function setRole(?PlannerTaskConfigurationRoleBase $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}
