<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentPlatformRestrictionConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new DeviceEnrollmentPlatformRestrictionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentPlatformRestrictionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentPlatformRestrictionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentPlatformRestrictionConfiguration {
        return new DeviceEnrollmentPlatformRestrictionConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'platformRestriction' => fn(ParseNode $n) => $o->setPlatformRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(EnrollmentRestrictionPlatformType::class)),
        ]);
    }

    /**
     * Gets the platformRestriction property value. Restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getPlatformRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->getBackingStore()->get('platformRestriction');
    }

    /**
     * Gets the platformType property value. This enum indicates the platform type for which the enrollment restriction applies.
     * @return EnrollmentRestrictionPlatformType|null
    */
    public function getPlatformType(): ?EnrollmentRestrictionPlatformType {
        return $this->getBackingStore()->get('platformType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('platformRestriction', $this->getPlatformRestriction());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
    }

    /**
     * Sets the platformRestriction property value. Restrictions based on platform, platform operating system version, and device ownership
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the platformRestriction property.
    */
    public function setPlatformRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('platformRestriction', $value);
    }

    /**
     * Sets the platformType property value. This enum indicates the platform type for which the enrollment restriction applies.
     * @param EnrollmentRestrictionPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?EnrollmentRestrictionPlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

}
