<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IndustryDataRunActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new industryDataRunActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndustryDataRunActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndustryDataRunActivity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.inboundFlowActivity': return new InboundFlowActivity();
                case '#microsoft.graph.industryData.outboundFlowActivity': return new OutboundFlowActivity();
            }
        }
        return new IndustryDataRunActivity();
    }

    /**
     * Gets the activity property value. The flow that was run by this activity.
     * @return IndustryDataActivity|null
    */
    public function getActivity(): ?IndustryDataActivity {
        return $this->getBackingStore()->get('activity');
    }

    /**
     * Gets the blockingError property value. An error object to diagnose critical failures in an activity.
     * @return PublicError|null
    */
    public function getBlockingError(): ?PublicError {
        return $this->getBackingStore()->get('blockingError');
    }

    /**
     * Gets the displayName property value. The name of the running flow.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getObjectValue([IndustryDataActivity::class, 'createFromDiscriminatorValue'])),
            'blockingError' => fn(ParseNode $n) => $o->setBlockingError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IndustryDataActivityStatus::class)),
        ]);
    }

    /**
     * Gets the status property value. The status property
     * @return IndustryDataActivityStatus|null
    */
    public function getStatus(): ?IndustryDataActivityStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activity', $this->getActivity());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the activity property value. The flow that was run by this activity.
     * @param IndustryDataActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?IndustryDataActivity $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the blockingError property value. An error object to diagnose critical failures in an activity.
     * @param PublicError|null $value Value to set for the blockingError property.
    */
    public function setBlockingError(?PublicError $value): void {
        $this->getBackingStore()->set('blockingError', $value);
    }

    /**
     * Sets the displayName property value. The name of the running flow.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param IndustryDataActivityStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IndustryDataActivityStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
