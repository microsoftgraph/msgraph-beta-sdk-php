<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BusinessFlow extends Entity 
{
    /** @var string|null $customData  */
    private ?string $customData = null;
    
    /** @var string|null $deDuplicationId  */
    private ?string $deDuplicationId = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var GovernancePolicy|null $policy  */
    private ?GovernancePolicy $policy = null;
    
    /** @var string|null $policyTemplateId  */
    private ?string $policyTemplateId = null;
    
    /** @var string|null $recordVersion  */
    private ?string $recordVersion = null;
    
    /** @var string|null $schemaId  */
    private ?string $schemaId = null;
    
    /** @var BusinessFlowSettings|null $settings  */
    private ?BusinessFlowSettings $settings = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): BusinessFlow {
        return new BusinessFlow();
    }

    /**
     * Gets the customData property value. 
     * @return string|null
    */
    public function getCustomData(): ?string {
        return $this->customData;
    }

    /**
     * Gets the deDuplicationId property value. 
     * @return string|null
    */
    public function getDeDuplicationId(): ?string {
        return $this->deDuplicationId;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'customData' => function (self $o, ParseNode $n) { $o->setCustomData($n->getStringValue()); },
            'deDuplicationId' => function (self $o, ParseNode $n) { $o->setDeDuplicationId($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'policy' => function (self $o, ParseNode $n) { $o->setPolicy($n->getObjectValue(GovernancePolicy::class)); },
            'policyTemplateId' => function (self $o, ParseNode $n) { $o->setPolicyTemplateId($n->getStringValue()); },
            'recordVersion' => function (self $o, ParseNode $n) { $o->setRecordVersion($n->getStringValue()); },
            'schemaId' => function (self $o, ParseNode $n) { $o->setSchemaId($n->getStringValue()); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(BusinessFlowSettings::class)); },
        ]);
    }

    /**
     * Gets the policy property value. 
     * @return GovernancePolicy|null
    */
    public function getPolicy(): ?GovernancePolicy {
        return $this->policy;
    }

    /**
     * Gets the policyTemplateId property value. 
     * @return string|null
    */
    public function getPolicyTemplateId(): ?string {
        return $this->policyTemplateId;
    }

    /**
     * Gets the recordVersion property value. 
     * @return string|null
    */
    public function getRecordVersion(): ?string {
        return $this->recordVersion;
    }

    /**
     * Gets the schemaId property value. 
     * @return string|null
    */
    public function getSchemaId(): ?string {
        return $this->schemaId;
    }

    /**
     * Gets the settings property value. 
     * @return BusinessFlowSettings|null
    */
    public function getSettings(): ?BusinessFlowSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customData', $this->customData);
        $writer->writeStringValue('deDuplicationId', $this->deDuplicationId);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('policy', $this->policy);
        $writer->writeStringValue('policyTemplateId', $this->policyTemplateId);
        $writer->writeStringValue('recordVersion', $this->recordVersion);
        $writer->writeStringValue('schemaId', $this->schemaId);
        $writer->writeObjectValue('settings', $this->settings);
    }

    /**
     * Sets the customData property value. 
     *  @param string|null $value Value to set for the customData property.
    */
    public function setCustomData(?string $value ): void {
        $this->customData = $value;
    }

    /**
     * Sets the deDuplicationId property value. 
     *  @param string|null $value Value to set for the deDuplicationId property.
    */
    public function setDeDuplicationId(?string $value ): void {
        $this->deDuplicationId = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the policy property value. 
     *  @param GovernancePolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?GovernancePolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the policyTemplateId property value. 
     *  @param string|null $value Value to set for the policyTemplateId property.
    */
    public function setPolicyTemplateId(?string $value ): void {
        $this->policyTemplateId = $value;
    }

    /**
     * Sets the recordVersion property value. 
     *  @param string|null $value Value to set for the recordVersion property.
    */
    public function setRecordVersion(?string $value ): void {
        $this->recordVersion = $value;
    }

    /**
     * Sets the schemaId property value. 
     *  @param string|null $value Value to set for the schemaId property.
    */
    public function setSchemaId(?string $value ): void {
        $this->schemaId = $value;
    }

    /**
     * Sets the settings property value. 
     *  @param BusinessFlowSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?BusinessFlowSettings $value ): void {
        $this->settings = $value;
    }

}
