<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntraAccessDriftDetail extends AccessDriftDetail implements Parsable 
{
    /**
     * Instantiates a new EntraAccessDriftDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntraAccessDriftDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntraAccessDriftDetail {
        return new EntraAccessDriftDetail();
    }

    /**
     * Gets the accessPackage property value. The accessPackage property
     * @return DriftAccessPackageInfo|null
    */
    public function getAccessPackage(): ?DriftAccessPackageInfo {
        $val = $this->getBackingStore()->get('accessPackage');
        if (is_null($val) || $val instanceof DriftAccessPackageInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackage'");
    }

    /**
     * Gets the assignedRole property value. The assignedRole property
     * @return string|null
    */
    public function getAssignedRole(): ?string {
        $val = $this->getBackingStore()->get('assignedRole');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedRole'");
    }

    /**
     * Gets the expectedRole property value. The expectedRole property
     * @return string|null
    */
    public function getExpectedRole(): ?string {
        $val = $this->getBackingStore()->get('expectedRole');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expectedRole'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([DriftAccessPackageInfo::class, 'createFromDiscriminatorValue'])),
            'assignedRole' => fn(ParseNode $n) => $o->setAssignedRole($n->getStringValue()),
            'expectedRole' => fn(ParseNode $n) => $o->setExpectedRole($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the accessPackage property value. The accessPackage property
     * @param DriftAccessPackageInfo|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?DriftAccessPackageInfo $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the assignedRole property value. The assignedRole property
     * @param string|null $value Value to set for the assignedRole property.
    */
    public function setAssignedRole(?string $value): void {
        $this->getBackingStore()->set('assignedRole', $value);
    }

    /**
     * Sets the expectedRole property value. The expectedRole property
     * @param string|null $value Value to set for the expectedRole property.
    */
    public function setExpectedRole(?string $value): void {
        $this->getBackingStore()->set('expectedRole', $value);
    }

}
