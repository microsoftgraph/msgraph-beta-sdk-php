<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationUserStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceConfigurationUserStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationUserStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationUserStateSummary {
        return new DeviceConfigurationUserStateSummary();
    }

    /**
     * Gets the compliantUserCount property value. Number of compliant users
     * @return int|null
    */
    public function getCompliantUserCount(): ?int {
        $val = $this->getBackingStore()->get('compliantUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantUserCount'");
    }

    /**
     * Gets the conflictUserCount property value. Number of conflict users
     * @return int|null
    */
    public function getConflictUserCount(): ?int {
        $val = $this->getBackingStore()->get('conflictUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflictUserCount'");
    }

    /**
     * Gets the errorUserCount property value. Number of error users
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        $val = $this->getBackingStore()->get('errorUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorUserCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantUserCount' => fn(ParseNode $n) => $o->setCompliantUserCount($n->getIntegerValue()),
            'conflictUserCount' => fn(ParseNode $n) => $o->setConflictUserCount($n->getIntegerValue()),
            'errorUserCount' => fn(ParseNode $n) => $o->setErrorUserCount($n->getIntegerValue()),
            'nonCompliantUserCount' => fn(ParseNode $n) => $o->setNonCompliantUserCount($n->getIntegerValue()),
            'notApplicableUserCount' => fn(ParseNode $n) => $o->setNotApplicableUserCount($n->getIntegerValue()),
            'remediatedUserCount' => fn(ParseNode $n) => $o->setRemediatedUserCount($n->getIntegerValue()),
            'unknownUserCount' => fn(ParseNode $n) => $o->setUnknownUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the nonCompliantUserCount property value. Number of NonCompliant users
     * @return int|null
    */
    public function getNonCompliantUserCount(): ?int {
        $val = $this->getBackingStore()->get('nonCompliantUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nonCompliantUserCount'");
    }

    /**
     * Gets the notApplicableUserCount property value. Number of not applicable users
     * @return int|null
    */
    public function getNotApplicableUserCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableUserCount'");
    }

    /**
     * Gets the remediatedUserCount property value. Number of remediated users
     * @return int|null
    */
    public function getRemediatedUserCount(): ?int {
        $val = $this->getBackingStore()->get('remediatedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediatedUserCount'");
    }

    /**
     * Gets the unknownUserCount property value. Number of unknown users
     * @return int|null
    */
    public function getUnknownUserCount(): ?int {
        $val = $this->getBackingStore()->get('unknownUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantUserCount', $this->getCompliantUserCount());
        $writer->writeIntegerValue('conflictUserCount', $this->getConflictUserCount());
        $writer->writeIntegerValue('errorUserCount', $this->getErrorUserCount());
        $writer->writeIntegerValue('nonCompliantUserCount', $this->getNonCompliantUserCount());
        $writer->writeIntegerValue('notApplicableUserCount', $this->getNotApplicableUserCount());
        $writer->writeIntegerValue('remediatedUserCount', $this->getRemediatedUserCount());
        $writer->writeIntegerValue('unknownUserCount', $this->getUnknownUserCount());
    }

    /**
     * Sets the compliantUserCount property value. Number of compliant users
     * @param int|null $value Value to set for the compliantUserCount property.
    */
    public function setCompliantUserCount(?int $value): void {
        $this->getBackingStore()->set('compliantUserCount', $value);
    }

    /**
     * Sets the conflictUserCount property value. Number of conflict users
     * @param int|null $value Value to set for the conflictUserCount property.
    */
    public function setConflictUserCount(?int $value): void {
        $this->getBackingStore()->set('conflictUserCount', $value);
    }

    /**
     * Sets the errorUserCount property value. Number of error users
     * @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value): void {
        $this->getBackingStore()->set('errorUserCount', $value);
    }

    /**
     * Sets the nonCompliantUserCount property value. Number of NonCompliant users
     * @param int|null $value Value to set for the nonCompliantUserCount property.
    */
    public function setNonCompliantUserCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantUserCount', $value);
    }

    /**
     * Sets the notApplicableUserCount property value. Number of not applicable users
     * @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableUserCount', $value);
    }

    /**
     * Sets the remediatedUserCount property value. Number of remediated users
     * @param int|null $value Value to set for the remediatedUserCount property.
    */
    public function setRemediatedUserCount(?int $value): void {
        $this->getBackingStore()->set('remediatedUserCount', $value);
    }

    /**
     * Sets the unknownUserCount property value. Number of unknown users
     * @param int|null $value Value to set for the unknownUserCount property.
    */
    public function setUnknownUserCount(?int $value): void {
        $this->getBackingStore()->set('unknownUserCount', $value);
    }

}
