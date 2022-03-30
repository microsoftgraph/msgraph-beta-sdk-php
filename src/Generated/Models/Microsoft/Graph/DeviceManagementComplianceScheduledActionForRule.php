<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementComplianceScheduledActionForRule extends Entity 
{
    /** @var string|null $ruleName Name of the rule which this scheduled action applies to. */
    private ?string $ruleName = null;
    
    /** @var array<DeviceManagementComplianceActionItem>|null $scheduledActionConfigurations The list of scheduled action configurations for this compliance policy. This collection can contain a maximum of 100 elements. */
    private ?array $scheduledActionConfigurations = null;
    
    /**
     * Instantiates a new deviceManagementComplianceScheduledActionForRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementComplianceScheduledActionForRule
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementComplianceScheduledActionForRule {
        return new DeviceManagementComplianceScheduledActionForRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'ruleName' => function (self $o, ParseNode $n) { $o->setRuleName($n->getStringValue()); },
            'scheduledActionConfigurations' => function (self $o, ParseNode $n) { $o->setScheduledActionConfigurations($n->getCollectionOfObjectValues(DeviceManagementComplianceActionItem::class)); },
        ]);
    }

    /**
     * Gets the ruleName property value. Name of the rule which this scheduled action applies to.
     * @return string|null
    */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * Gets the scheduledActionConfigurations property value. The list of scheduled action configurations for this compliance policy. This collection can contain a maximum of 100 elements.
     * @return array<DeviceManagementComplianceActionItem>|null
    */
    public function getScheduledActionConfigurations(): ?array {
        return $this->scheduledActionConfigurations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('ruleName', $this->ruleName);
        $writer->writeCollectionOfObjectValues('scheduledActionConfigurations', $this->scheduledActionConfigurations);
    }

    /**
     * Sets the ruleName property value. Name of the rule which this scheduled action applies to.
     *  @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value ): void {
        $this->ruleName = $value;
    }

    /**
     * Sets the scheduledActionConfigurations property value. The list of scheduled action configurations for this compliance policy. This collection can contain a maximum of 100 elements.
     *  @param array<DeviceManagementComplianceActionItem>|null $value Value to set for the scheduledActionConfigurations property.
    */
    public function setScheduledActionConfigurations(?array $value ): void {
        $this->scheduledActionConfigurations = $value;
    }

}
