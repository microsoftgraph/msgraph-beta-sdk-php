<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Constraint that enforces the enrollment types applied to a setting
*/
class DeviceManagementSettingEnrollmentTypeConstraint extends DeviceManagementConstraint implements Parsable 
{
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
        $val = $this->getBackingStore()->get('enrollmentTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrollmentTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnrollmentTypes($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('enrollmentTypes', $this->getEnrollmentTypes());
    }

    /**
     * Sets the enrollmentTypes property value. List of enrollment types
     * @param array<string>|null $value Value to set for the enrollmentTypes property.
    */
    public function setEnrollmentTypes(?array $value): void {
        $this->getBackingStore()->set('enrollmentTypes', $value);
    }

}
