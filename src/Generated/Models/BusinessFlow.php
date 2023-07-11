<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BusinessFlow extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new businessFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessFlow {
        return new BusinessFlow();
    }

    /**
     * Gets the customData property value. The customData property
     * @return string|null
    */
    public function getCustomData(): ?string {
        $val = $this->getBackingStore()->get('customData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customData'");
    }

    /**
     * Gets the deDuplicationId property value. The deDuplicationId property
     * @return string|null
    */
    public function getDeDuplicationId(): ?string {
        $val = $this->getBackingStore()->get('deDuplicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deDuplicationId'");
    }

    /**
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getStringValue()),
            'deDuplicationId' => fn(ParseNode $n) => $o->setDeDuplicationId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([GovernancePolicy::class, 'createFromDiscriminatorValue'])),
            'policyTemplateId' => fn(ParseNode $n) => $o->setPolicyTemplateId($n->getStringValue()),
            'recordVersion' => fn(ParseNode $n) => $o->setRecordVersion($n->getStringValue()),
            'schemaId' => fn(ParseNode $n) => $o->setSchemaId($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([BusinessFlowSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policy property value. The policy property
     * @return GovernancePolicy|null
    */
    public function getPolicy(): ?GovernancePolicy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof GovernancePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the policyTemplateId property value. The policyTemplateId property
     * @return string|null
    */
    public function getPolicyTemplateId(): ?string {
        $val = $this->getBackingStore()->get('policyTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTemplateId'");
    }

    /**
     * Gets the recordVersion property value. The recordVersion property
     * @return string|null
    */
    public function getRecordVersion(): ?string {
        $val = $this->getBackingStore()->get('recordVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordVersion'");
    }

    /**
     * Gets the schemaId property value. The schemaId property
     * @return string|null
    */
    public function getSchemaId(): ?string {
        $val = $this->getBackingStore()->get('schemaId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schemaId'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return BusinessFlowSettings|null
    */
    public function getSettings(): ?BusinessFlowSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof BusinessFlowSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customData', $this->getCustomData());
        $writer->writeStringValue('deDuplicationId', $this->getDeDuplicationId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeStringValue('policyTemplateId', $this->getPolicyTemplateId());
        $writer->writeStringValue('recordVersion', $this->getRecordVersion());
        $writer->writeStringValue('schemaId', $this->getSchemaId());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the customData property value. The customData property
     * @param string|null $value Value to set for the customData property.
    */
    public function setCustomData(?string $value): void {
        $this->getBackingStore()->set('customData', $value);
    }

    /**
     * Sets the deDuplicationId property value. The deDuplicationId property
     * @param string|null $value Value to set for the deDuplicationId property.
    */
    public function setDeDuplicationId(?string $value): void {
        $this->getBackingStore()->set('deDuplicationId', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the policy property value. The policy property
     * @param GovernancePolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?GovernancePolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the policyTemplateId property value. The policyTemplateId property
     * @param string|null $value Value to set for the policyTemplateId property.
    */
    public function setPolicyTemplateId(?string $value): void {
        $this->getBackingStore()->set('policyTemplateId', $value);
    }

    /**
     * Sets the recordVersion property value. The recordVersion property
     * @param string|null $value Value to set for the recordVersion property.
    */
    public function setRecordVersion(?string $value): void {
        $this->getBackingStore()->set('recordVersion', $value);
    }

    /**
     * Sets the schemaId property value. The schemaId property
     * @param string|null $value Value to set for the schemaId property.
    */
    public function setSchemaId(?string $value): void {
        $this->getBackingStore()->set('schemaId', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param BusinessFlowSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?BusinessFlowSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
