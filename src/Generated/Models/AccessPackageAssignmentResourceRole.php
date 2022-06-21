<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentResourceRole extends Entity 
{
    /** @var array<AccessPackageAssignment>|null $accessPackageAssignments The access package assignments resulting in this role assignment. Read-only. Nullable. */
    private ?array $accessPackageAssignments = null;
    
    /** @var AccessPackageResourceRole|null $accessPackageResourceRole Read-only. Nullable. */
    private ?AccessPackageResourceRole $accessPackageResourceRole = null;
    
    /** @var AccessPackageResourceScope|null $accessPackageResourceScope Read-only. Nullable. */
    private ?AccessPackageResourceScope $accessPackageResourceScope = null;
    
    /** @var AccessPackageSubject|null $accessPackageSubject Read-only. Nullable. Supports $filter (eq) on objectId and $expand query parameters. */
    private ?AccessPackageSubject $accessPackageSubject = null;
    
    /** @var string|null $originId A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole. */
    private ?string $originId = null;
    
    /** @var string|null $originSystem The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole. */
    private ?string $originSystem = null;
    
    /** @var string|null $status The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system. */
    private ?string $status = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentResourceRole {
        return new AccessPackageAssignmentResourceRole();
    }

    /**
     * Gets the accessPackageAssignments property value. The access package assignments resulting in this role assignment. Read-only. Nullable.
     * @return array<AccessPackageAssignment>|null
    */
    public function getAccessPackageAssignments(): ?array {
        return $this->accessPackageAssignments;
    }

    /**
     * Gets the accessPackageResourceRole property value. Read-only. Nullable.
     * @return AccessPackageResourceRole|null
    */
    public function getAccessPackageResourceRole(): ?AccessPackageResourceRole {
        return $this->accessPackageResourceRole;
    }

    /**
     * Gets the accessPackageResourceScope property value. Read-only. Nullable.
     * @return AccessPackageResourceScope|null
    */
    public function getAccessPackageResourceScope(): ?AccessPackageResourceScope {
        return $this->accessPackageResourceScope;
    }

    /**
     * Gets the accessPackageSubject property value. Read-only. Nullable. Supports $filter (eq) on objectId and $expand query parameters.
     * @return AccessPackageSubject|null
    */
    public function getAccessPackageSubject(): ?AccessPackageSubject {
        return $this->accessPackageSubject;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignments' => function (self $o, ParseNode $n) { $o->setAccessPackageAssignments($n->getCollectionOfObjectValues(AccessPackageAssignment::class)); },
            'accessPackageResourceRole' => function (self $o, ParseNode $n) { $o->setAccessPackageResourceRole($n->getObjectValue(AccessPackageResourceRole::class)); },
            'accessPackageResourceScope' => function (self $o, ParseNode $n) { $o->setAccessPackageResourceScope($n->getObjectValue(AccessPackageResourceScope::class)); },
            'accessPackageSubject' => function (self $o, ParseNode $n) { $o->setAccessPackageSubject($n->getObjectValue(AccessPackageSubject::class)); },
            'originId' => function (self $o, ParseNode $n) { $o->setOriginId($n->getStringValue()); },
            'originSystem' => function (self $o, ParseNode $n) { $o->setOriginSystem($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the originId property value. A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole.
     * @return string|null
    */
    public function getOriginId(): ?string {
        return $this->originId;
    }

    /**
     * Gets the originSystem property value. The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        return $this->originSystem;
    }

    /**
     * Gets the status property value. The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageAssignments', $this->accessPackageAssignments);
        $writer->writeObjectValue('accessPackageResourceRole', $this->accessPackageResourceRole);
        $writer->writeObjectValue('accessPackageResourceScope', $this->accessPackageResourceScope);
        $writer->writeObjectValue('accessPackageSubject', $this->accessPackageSubject);
        $writer->writeStringValue('originId', $this->originId);
        $writer->writeStringValue('originSystem', $this->originSystem);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the accessPackageAssignments property value. The access package assignments resulting in this role assignment. Read-only. Nullable.
     *  @param array<AccessPackageAssignment>|null $value Value to set for the accessPackageAssignments property.
    */
    public function setAccessPackageAssignments(?array $value ): void {
        $this->accessPackageAssignments = $value;
    }

    /**
     * Sets the accessPackageResourceRole property value. Read-only. Nullable.
     *  @param AccessPackageResourceRole|null $value Value to set for the accessPackageResourceRole property.
    */
    public function setAccessPackageResourceRole(?AccessPackageResourceRole $value ): void {
        $this->accessPackageResourceRole = $value;
    }

    /**
     * Sets the accessPackageResourceScope property value. Read-only. Nullable.
     *  @param AccessPackageResourceScope|null $value Value to set for the accessPackageResourceScope property.
    */
    public function setAccessPackageResourceScope(?AccessPackageResourceScope $value ): void {
        $this->accessPackageResourceScope = $value;
    }

    /**
     * Sets the accessPackageSubject property value. Read-only. Nullable. Supports $filter (eq) on objectId and $expand query parameters.
     *  @param AccessPackageSubject|null $value Value to set for the accessPackageSubject property.
    */
    public function setAccessPackageSubject(?AccessPackageSubject $value ): void {
        $this->accessPackageSubject = $value;
    }

    /**
     * Sets the originId property value. A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole.
     *  @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value ): void {
        $this->originId = $value;
    }

    /**
     * Sets the originSystem property value. The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole.
     *  @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value ): void {
        $this->originSystem = $value;
    }

    /**
     * Sets the status property value. The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
