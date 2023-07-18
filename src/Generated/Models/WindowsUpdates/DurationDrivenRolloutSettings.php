<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DurationDrivenRolloutSettings extends GradualRolloutSettings implements Parsable 
{
    /**
     * Instantiates a new durationDrivenRolloutSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.durationDrivenRolloutSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DurationDrivenRolloutSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DurationDrivenRolloutSettings {
        return new DurationDrivenRolloutSettings();
    }

    /**
     * Gets the durationUntilDeploymentEnd property value. The target duration of the rollout. Given durationBetweenOffers and durationUntilDeploymentEnd, the system will automatically calculate how many devices are in each offering.
     * @return DateInterval|null
    */
    public function getDurationUntilDeploymentEnd(): ?DateInterval {
        $val = $this->getBackingStore()->get('durationUntilDeploymentEnd');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationUntilDeploymentEnd'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'durationUntilDeploymentEnd' => fn(ParseNode $n) => $o->setDurationUntilDeploymentEnd($n->getDateIntervalValue()),
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
        $writer->writeDateIntervalValue('durationUntilDeploymentEnd', $this->getDurationUntilDeploymentEnd());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the durationUntilDeploymentEnd property value. The target duration of the rollout. Given durationBetweenOffers and durationUntilDeploymentEnd, the system will automatically calculate how many devices are in each offering.
     * @param DateInterval|null $value Value to set for the durationUntilDeploymentEnd property.
    */
    public function setDurationUntilDeploymentEnd(?DateInterval $value): void {
        $this->getBackingStore()->set('durationUntilDeploymentEnd', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
