<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AdminCloudLicensing extends Entity implements Parsable 
{
    /**
     * Instantiates a new AdminCloudLicensing and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminCloudLicensing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminCloudLicensing {
        return new AdminCloudLicensing();
    }

    /**
     * Gets the allotments property value. The set of all allotments within the organization. Read-only.
     * @return array<Allotment>|null
    */
    public function getAllotments(): ?array {
        $val = $this->getBackingStore()->get('allotments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Allotment::class);
            /** @var array<Allotment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allotments'");
    }

    /**
     * Gets the assignmentErrors property value. The set of all asynchronous allotment assignment errors that affect the organization. Read-only.
     * @return array<AssignmentError>|null
    */
    public function getAssignmentErrors(): ?array {
        $val = $this->getBackingStore()->get('assignmentErrors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignmentError::class);
            /** @var array<AssignmentError>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentErrors'");
    }

    /**
     * Gets the assignments property value. The set of all license assignments within the organization. Not nullable.
     * @return array<Assignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Assignment::class);
            /** @var array<Assignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allotments' => fn(ParseNode $n) => $o->setAllotments($n->getCollectionOfObjectValues([Allotment::class, 'createFromDiscriminatorValue'])),
            'assignmentErrors' => fn(ParseNode $n) => $o->setAssignmentErrors($n->getCollectionOfObjectValues([AssignmentError::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([Assignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allotments', $this->getAllotments());
        $writer->writeCollectionOfObjectValues('assignmentErrors', $this->getAssignmentErrors());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
    }

    /**
     * Sets the allotments property value. The set of all allotments within the organization. Read-only.
     * @param array<Allotment>|null $value Value to set for the allotments property.
    */
    public function setAllotments(?array $value): void {
        $this->getBackingStore()->set('allotments', $value);
    }

    /**
     * Sets the assignmentErrors property value. The set of all asynchronous allotment assignment errors that affect the organization. Read-only.
     * @param array<AssignmentError>|null $value Value to set for the assignmentErrors property.
    */
    public function setAssignmentErrors(?array $value): void {
        $this->getBackingStore()->set('assignmentErrors', $value);
    }

    /**
     * Sets the assignments property value. The set of all license assignments within the organization. Not nullable.
     * @param array<Assignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

}
