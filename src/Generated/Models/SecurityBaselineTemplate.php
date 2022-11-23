<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineTemplate extends DeviceManagementTemplate implements Parsable 
{
    /**
     * Instantiates a new SecurityBaselineTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.securityBaselineTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineTemplate {
        return new SecurityBaselineTemplate();
    }

    /**
     * Gets the categoryDeviceStateSummaries property value. The security baseline per category device state summary
     * @return array<SecurityBaselineCategoryStateSummary>|null
    */
    public function getCategoryDeviceStateSummaries(): ?array {
        return $this->getBackingStore()->get('categoryDeviceStateSummaries');
    }

    /**
     * Gets the deviceStates property value. The security baseline device states
     * @return array<SecurityBaselineDeviceState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->getBackingStore()->get('deviceStates');
    }

    /**
     * Gets the deviceStateSummary property value. The security baseline device state summary
     * @return SecurityBaselineStateSummary|null
    */
    public function getDeviceStateSummary(): ?SecurityBaselineStateSummary {
        return $this->getBackingStore()->get('deviceStateSummary');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categoryDeviceStateSummaries' => fn(ParseNode $n) => $o->setCategoryDeviceStateSummaries($n->getCollectionOfObjectValues([SecurityBaselineCategoryStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([SecurityBaselineDeviceState::class, 'createFromDiscriminatorValue'])),
            'deviceStateSummary' => fn(ParseNode $n) => $o->setDeviceStateSummary($n->getObjectValue([SecurityBaselineStateSummary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('categoryDeviceStateSummaries', $this->getCategoryDeviceStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceStates', $this->getDeviceStates());
        $writer->writeObjectValue('deviceStateSummary', $this->getDeviceStateSummary());
    }

    /**
     * Sets the categoryDeviceStateSummaries property value. The security baseline per category device state summary
     *  @param array<SecurityBaselineCategoryStateSummary>|null $value Value to set for the categoryDeviceStateSummaries property.
    */
    public function setCategoryDeviceStateSummaries(?array $value): void {
        $this->getBackingStore()->set('categoryDeviceStateSummaries', $value);
    }

    /**
     * Sets the deviceStates property value. The security baseline device states
     *  @param array<SecurityBaselineDeviceState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value): void {
        $this->getBackingStore()->set('deviceStates', $value);
    }

    /**
     * Sets the deviceStateSummary property value. The security baseline device state summary
     *  @param SecurityBaselineStateSummary|null $value Value to set for the deviceStateSummary property.
    */
    public function setDeviceStateSummary(?SecurityBaselineStateSummary $value): void {
        $this->getBackingStore()->set('deviceStateSummary', $value);
    }

}
