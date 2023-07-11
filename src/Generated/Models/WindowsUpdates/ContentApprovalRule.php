<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentApprovalRule extends ComplianceChangeRule implements Parsable 
{
    /**
     * Instantiates a new contentApprovalRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.contentApprovalRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentApprovalRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentApprovalRule {
        return new ContentApprovalRule();
    }

    /**
     * Gets the contentFilter property value. A filter to determine which content matches the rule on an ongoing basis.
     * @return ContentFilter|null
    */
    public function getContentFilter(): ?ContentFilter {
        $val = $this->getBackingStore()->get('contentFilter');
        if (is_null($val) || $val instanceof ContentFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentFilter'");
    }

    /**
     * Gets the durationBeforeDeploymentStart property value. The time before the deployment starts represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getDurationBeforeDeploymentStart(): ?DateInterval {
        $val = $this->getBackingStore()->get('durationBeforeDeploymentStart');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationBeforeDeploymentStart'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentFilter' => fn(ParseNode $n) => $o->setContentFilter($n->getObjectValue([ContentFilter::class, 'createFromDiscriminatorValue'])),
            'durationBeforeDeploymentStart' => fn(ParseNode $n) => $o->setDurationBeforeDeploymentStart($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentFilter', $this->getContentFilter());
        $writer->writeDateIntervalValue('durationBeforeDeploymentStart', $this->getDurationBeforeDeploymentStart());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the contentFilter property value. A filter to determine which content matches the rule on an ongoing basis.
     * @param ContentFilter|null $value Value to set for the contentFilter property.
    */
    public function setContentFilter(?ContentFilter $value): void {
        $this->getBackingStore()->set('contentFilter', $value);
    }

    /**
     * Sets the durationBeforeDeploymentStart property value. The time before the deployment starts represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the durationBeforeDeploymentStart property.
    */
    public function setDurationBeforeDeploymentStart(?DateInterval $value): void {
        $this->getBackingStore()->set('durationBeforeDeploymentStart', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
