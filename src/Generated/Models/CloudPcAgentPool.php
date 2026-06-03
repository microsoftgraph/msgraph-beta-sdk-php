<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcAgentPool extends CloudPcPool implements Parsable 
{
    /**
     * Instantiates a new CloudPcAgentPool and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcAgentPool');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAgentPool
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAgentPool {
        return new CloudPcAgentPool();
    }

    /**
     * Gets the billingConfiguration property value. The billingConfiguration property
     * @return CloudPcAgentPoolBillingConfiguration|null
    */
    public function getBillingConfiguration(): ?CloudPcAgentPoolBillingConfiguration {
        $val = $this->getBackingStore()->get('billingConfiguration');
        if (is_null($val) || $val instanceof CloudPcAgentPoolBillingConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'billingConfiguration' => fn(ParseNode $n) => $o->setBillingConfiguration($n->getObjectValue([CloudPcAgentPoolBillingConfiguration::class, 'createFromDiscriminatorValue'])),
            'poolUrl' => fn(ParseNode $n) => $o->setPoolUrl($n->getStringValue()),
            'scalingPolicy' => fn(ParseNode $n) => $o->setScalingPolicy($n->getObjectValue([CloudPcAgentPoolScalingPolicy::class, 'createFromDiscriminatorValue'])),
            'sessionUsage' => fn(ParseNode $n) => $o->setSessionUsage($n->getObjectValue([CloudPcAgentPoolSessionUsage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the poolUrl property value. The endpoint URL used to check out and check in agent sessions. This value becomes available after the pool reaches the active status. Read-only.
     * @return string|null
    */
    public function getPoolUrl(): ?string {
        $val = $this->getBackingStore()->get('poolUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'poolUrl'");
    }

    /**
     * Gets the scalingPolicy property value. The scalingPolicy property
     * @return CloudPcAgentPoolScalingPolicy|null
    */
    public function getScalingPolicy(): ?CloudPcAgentPoolScalingPolicy {
        $val = $this->getBackingStore()->get('scalingPolicy');
        if (is_null($val) || $val instanceof CloudPcAgentPoolScalingPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scalingPolicy'");
    }

    /**
     * Gets the sessionUsage property value. The sessionUsage property
     * @return CloudPcAgentPoolSessionUsage|null
    */
    public function getSessionUsage(): ?CloudPcAgentPoolSessionUsage {
        $val = $this->getBackingStore()->get('sessionUsage');
        if (is_null($val) || $val instanceof CloudPcAgentPoolSessionUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionUsage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('billingConfiguration', $this->getBillingConfiguration());
        $writer->writeStringValue('poolUrl', $this->getPoolUrl());
        $writer->writeObjectValue('scalingPolicy', $this->getScalingPolicy());
        $writer->writeObjectValue('sessionUsage', $this->getSessionUsage());
    }

    /**
     * Sets the billingConfiguration property value. The billingConfiguration property
     * @param CloudPcAgentPoolBillingConfiguration|null $value Value to set for the billingConfiguration property.
    */
    public function setBillingConfiguration(?CloudPcAgentPoolBillingConfiguration $value): void {
        $this->getBackingStore()->set('billingConfiguration', $value);
    }

    /**
     * Sets the poolUrl property value. The endpoint URL used to check out and check in agent sessions. This value becomes available after the pool reaches the active status. Read-only.
     * @param string|null $value Value to set for the poolUrl property.
    */
    public function setPoolUrl(?string $value): void {
        $this->getBackingStore()->set('poolUrl', $value);
    }

    /**
     * Sets the scalingPolicy property value. The scalingPolicy property
     * @param CloudPcAgentPoolScalingPolicy|null $value Value to set for the scalingPolicy property.
    */
    public function setScalingPolicy(?CloudPcAgentPoolScalingPolicy $value): void {
        $this->getBackingStore()->set('scalingPolicy', $value);
    }

    /**
     * Sets the sessionUsage property value. The sessionUsage property
     * @param CloudPcAgentPoolSessionUsage|null $value Value to set for the sessionUsage property.
    */
    public function setSessionUsage(?CloudPcAgentPoolSessionUsage $value): void {
        $this->getBackingStore()->set('sessionUsage', $value);
    }

}
