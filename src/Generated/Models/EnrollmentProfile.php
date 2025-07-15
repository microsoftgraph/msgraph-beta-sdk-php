<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The enrollmentProfile resource represents a collection of configurations which must be provided pre-enrollment to enable enrolling certain devices whose identities have been pre-staged. Pre-staged device identities are assigned to this type of profile to apply the profile's configurations at enrollment of the corresponding device.
*/
class EnrollmentProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new EnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentProfile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.depEnrollmentBaseProfile': return new DepEnrollmentBaseProfile();
                case '#microsoft.graph.depEnrollmentProfile': return new DepEnrollmentProfile();
                case '#microsoft.graph.depIOSEnrollmentProfile': return new DepIOSEnrollmentProfile();
                case '#microsoft.graph.depMacOSEnrollmentProfile': return new DepMacOSEnrollmentProfile();
                case '#microsoft.graph.depTvOSEnrollmentProfile': return new DepTvOSEnrollmentProfile();
                case '#microsoft.graph.depVisionOSEnrollmentProfile': return new DepVisionOSEnrollmentProfile();
            }
        }
        return new EnrollmentProfile();
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
