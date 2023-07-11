<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentResourceRole extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageAssignmentResourceRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentResourceRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentResourceRole {
        return new AccessPackageAssignmentResourceRole();
    }

    /**
     * Gets the accessPackageAssignments property value. The access package assignments resulting in this role assignment. Read-only. Nullable.
     * @return array<AccessPackageAssignment>|null
    */
    public function getAccessPackageAssignments(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignment::class);
            /** @var array<AccessPackageAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignments'");
    }

    /**
     * Gets the accessPackageResourceRole property value. The accessPackageResourceRole property
     * @return AccessPackageResourceRole|null
    */
    public function getAccessPackageResourceRole(): ?AccessPackageResourceRole {
        $val = $this->getBackingStore()->get('accessPackageResourceRole');
        if (is_null($val) || $val instanceof AccessPackageResourceRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceRole'");
    }

    /**
     * Gets the accessPackageResourceScope property value. The accessPackageResourceScope property
     * @return AccessPackageResourceScope|null
    */
    public function getAccessPackageResourceScope(): ?AccessPackageResourceScope {
        $val = $this->getBackingStore()->get('accessPackageResourceScope');
        if (is_null($val) || $val instanceof AccessPackageResourceScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceScope'");
    }

    /**
     * Gets the accessPackageSubject property value. Read-only. Nullable. Supports $filter (eq) on objectId and $expand query parameters.
     * @return AccessPackageSubject|null
    */
    public function getAccessPackageSubject(): ?AccessPackageSubject {
        $val = $this->getBackingStore()->get('accessPackageSubject');
        if (is_null($val) || $val instanceof AccessPackageSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageSubject'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignments' => fn(ParseNode $n) => $o->setAccessPackageAssignments($n->getCollectionOfObjectValues([AccessPackageAssignment::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceRole' => fn(ParseNode $n) => $o->setAccessPackageResourceRole($n->getObjectValue([AccessPackageResourceRole::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceScope' => fn(ParseNode $n) => $o->setAccessPackageResourceScope($n->getObjectValue([AccessPackageResourceScope::class, 'createFromDiscriminatorValue'])),
            'accessPackageSubject' => fn(ParseNode $n) => $o->setAccessPackageSubject($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
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
     * Gets the originId property value. A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole.
     * @return string|null
    */
    public function getOriginId(): ?string {
        $val = $this->getBackingStore()->get('originId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originId'");
    }

    /**
     * Gets the originSystem property value. The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        $val = $this->getBackingStore()->get('originSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originSystem'");
    }

    /**
     * Gets the status property value. The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageAssignments', $this->getAccessPackageAssignments());
        $writer->writeObjectValue('accessPackageResourceRole', $this->getAccessPackageResourceRole());
        $writer->writeObjectValue('accessPackageResourceScope', $this->getAccessPackageResourceScope());
        $writer->writeObjectValue('accessPackageSubject', $this->getAccessPackageSubject());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the accessPackageAssignments property value. The access package assignments resulting in this role assignment. Read-only. Nullable.
     * @param array<AccessPackageAssignment>|null $value Value to set for the accessPackageAssignments property.
    */
    public function setAccessPackageAssignments(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignments', $value);
    }

    /**
     * Sets the accessPackageResourceRole property value. The accessPackageResourceRole property
     * @param AccessPackageResourceRole|null $value Value to set for the accessPackageResourceRole property.
    */
    public function setAccessPackageResourceRole(?AccessPackageResourceRole $value): void {
        $this->getBackingStore()->set('accessPackageResourceRole', $value);
    }

    /**
     * Sets the accessPackageResourceScope property value. The accessPackageResourceScope property
     * @param AccessPackageResourceScope|null $value Value to set for the accessPackageResourceScope property.
    */
    public function setAccessPackageResourceScope(?AccessPackageResourceScope $value): void {
        $this->getBackingStore()->set('accessPackageResourceScope', $value);
    }

    /**
     * Sets the accessPackageSubject property value. Read-only. Nullable. Supports $filter (eq) on objectId and $expand query parameters.
     * @param AccessPackageSubject|null $value Value to set for the accessPackageSubject property.
    */
    public function setAccessPackageSubject(?AccessPackageSubject $value): void {
        $this->getBackingStore()->set('accessPackageSubject', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the originId property value. A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole.
     * @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole.
     * @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

    /**
     * Sets the status property value. The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
