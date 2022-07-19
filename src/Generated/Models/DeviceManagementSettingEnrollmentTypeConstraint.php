<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingEnrollmentTypeConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * @var array<string>|null $enrollmentTypes List of enrollment types
    */
    private ?array $enrollmentTypes = null;
    
    /**
     * Instantiates a new DeviceManagementSettingEnrollmentTypeConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingEnrollmentTypeConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingEnrollmentTypeConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingEnrollmentTypeConstraint {
        return new DeviceManagementSettingEnrollmentTypeConstraint();
    }

    /**
     * Gets the enrollmentTypes property value. List of enrollment types
     * @return array<string>|null
    */
    public function getEnrollmentTypes(): ?array {
        return $this->enrollmentTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrollmentTypes' => function (ParseNode $n) use ($o) { $o->setEnrollmentTypes($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('enrollmentTypes', $this->enrollmentTypes);
    }

    /**
     * Sets the enrollmentTypes property value. List of enrollment types
     *  @param array<string>|null $value Value to set for the enrollmentTypes property.
    */
    public function setEnrollmentTypes(?array $value ): void {
        $this->enrollmentTypes = $value;
    }

}
