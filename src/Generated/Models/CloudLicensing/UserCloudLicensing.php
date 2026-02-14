<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserCloudLicensing implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserCloudLicensing and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserCloudLicensing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserCloudLicensing {
        return new UserCloudLicensing();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the assignmentErrors property value. The assignmentErrors property
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
     * Gets the assignments property value. The assignments property
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentErrors' => fn(ParseNode $n) => $o->setAssignmentErrors($n->getCollectionOfObjectValues([AssignmentError::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([Assignment::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'usageRights' => fn(ParseNode $n) => $o->setUsageRights($n->getCollectionOfObjectValues([UsageRight::class, 'createFromDiscriminatorValue'])),
            'waitingMembers' => fn(ParseNode $n) => $o->setWaitingMembers($n->getCollectionOfObjectValues([WaitingMember::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the usageRights property value. The usageRights property
     * @return array<UsageRight>|null
    */
    public function getUsageRights(): ?array {
        $val = $this->getBackingStore()->get('usageRights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UsageRight::class);
            /** @var array<UsageRight>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageRights'");
    }

    /**
     * Gets the waitingMembers property value. The waitingMembers property
     * @return array<WaitingMember>|null
    */
    public function getWaitingMembers(): ?array {
        $val = $this->getBackingStore()->get('waitingMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WaitingMember::class);
            /** @var array<WaitingMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'waitingMembers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assignmentErrors', $this->getAssignmentErrors());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('usageRights', $this->getUsageRights());
        $writer->writeCollectionOfObjectValues('waitingMembers', $this->getWaitingMembers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignmentErrors property value. The assignmentErrors property
     * @param array<AssignmentError>|null $value Value to set for the assignmentErrors property.
    */
    public function setAssignmentErrors(?array $value): void {
        $this->getBackingStore()->set('assignmentErrors', $value);
    }

    /**
     * Sets the assignments property value. The assignments property
     * @param array<Assignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the usageRights property value. The usageRights property
     * @param array<UsageRight>|null $value Value to set for the usageRights property.
    */
    public function setUsageRights(?array $value): void {
        $this->getBackingStore()->set('usageRights', $value);
    }

    /**
     * Sets the waitingMembers property value. The waitingMembers property
     * @param array<WaitingMember>|null $value Value to set for the waitingMembers property.
    */
    public function setWaitingMembers(?array $value): void {
        $this->getBackingStore()->set('waitingMembers', $value);
    }

}
