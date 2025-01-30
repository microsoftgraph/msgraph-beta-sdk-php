<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The depTvOSEnrollmentProfile resource represents an Apple Device Enrollment Program (DEP) enrollment profile specific to Apple TV device configuration. This type of profile must be assigned to Apple TV devices before the devices can enroll via DEP. However, This entity type will only be used as a navigation property to fetch the display name of the profile while getting the exitsing depOnboardingSetting entity, it won't support any operations, as the new entity is supported in device configuration(DCV2) graph calls
*/
class DepTvOSEnrollmentProfile extends EnrollmentProfile implements Parsable 
{
    /**
     * Instantiates a new DepTvOSEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.depTvOSEnrollmentProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepTvOSEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepTvOSEnrollmentProfile {
        return new DepTvOSEnrollmentProfile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
