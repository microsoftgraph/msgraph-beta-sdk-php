<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Allotment extends Entity implements Parsable 
{
    /**
     * Instantiates a new Allotment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Allotment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Allotment {
        return new Allotment();
    }

    /**
     * Gets the allottedUnits property value. The number of licenses contained within the allotment. Not nullable. Read-only.
     * @return int|null
    */
    public function getAllottedUnits(): ?int {
        $val = $this->getBackingStore()->get('allottedUnits');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allottedUnits'");
    }

    /**
     * Gets the assignableTo property value. The assignableTo property
     * @return AssigneeTypes|null
    */
    public function getAssignableTo(): ?AssigneeTypes {
        $val = $this->getBackingStore()->get('assignableTo');
        if (is_null($val) || $val instanceof AssigneeTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignableTo'");
    }

    /**
     * Gets the assignments property value. The list of license assignments that consume licenses from this allotment. Not nullable.
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
     * Gets the consumedUnits property value. The number of licenses that are currently consumed by assignments from this allotment. Not nullable. Read-only.
     * @return int|null
    */
    public function getConsumedUnits(): ?int {
        $val = $this->getBackingStore()->get('consumedUnits');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumedUnits'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allottedUnits' => fn(ParseNode $n) => $o->setAllottedUnits($n->getIntegerValue()),
            'assignableTo' => fn(ParseNode $n) => $o->setAssignableTo($n->getEnumValue(AssigneeTypes::class)),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([Assignment::class, 'createFromDiscriminatorValue'])),
            'consumedUnits' => fn(ParseNode $n) => $o->setConsumedUnits($n->getIntegerValue()),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([Service::class, 'createFromDiscriminatorValue'])),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getStringValue()),
            'skuPartNumber' => fn(ParseNode $n) => $o->setSkuPartNumber($n->getStringValue()),
            'subscriptions' => fn(ParseNode $n) => $o->setSubscriptions($n->getCollectionOfObjectValues([Subscription::class, 'createFromDiscriminatorValue'])),
            'waitingMembers' => fn(ParseNode $n) => $o->setWaitingMembers($n->getCollectionOfObjectValues([WaitingMember::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the services property value. The list of services that might be enabled or disabled for assignments from this allotment. Not nullable. Read-only.
     * @return array<Service>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Service::class);
            /** @var array<Service>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Gets the skuId property value. Unique identifier (GUID) for the service SKU that is equal to the skuId property on the related subscribedSku object. Read-only. Supports $filter.
     * @return string|null
    */
    public function getSkuId(): ?string {
        $val = $this->getBackingStore()->get('skuId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuId'");
    }

    /**
     * Gets the skuPartNumber property value. Unique SKU display name that is equal to the skuPartNumber on the related subscribedSku object; for example, AAD_Premium. Read-only.
     * @return string|null
    */
    public function getSkuPartNumber(): ?string {
        $val = $this->getBackingStore()->get('skuPartNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuPartNumber'");
    }

    /**
     * Gets the subscriptions property value. Basic information about the subscriptions that supports this allotment.
     * @return array<Subscription>|null
    */
    public function getSubscriptions(): ?array {
        $val = $this->getBackingStore()->get('subscriptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Subscription::class);
            /** @var array<Subscription>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptions'");
    }

    /**
     * Gets the waitingMembers property value. List of over-assigned users who are in the waiting room for an allotment due to license capacity limits.
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
        parent::serialize($writer);
        $writer->writeIntegerValue('allottedUnits', $this->getAllottedUnits());
        $writer->writeEnumValue('assignableTo', $this->getAssignableTo());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeIntegerValue('consumedUnits', $this->getConsumedUnits());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeStringValue('skuPartNumber', $this->getSkuPartNumber());
        $writer->writeCollectionOfObjectValues('subscriptions', $this->getSubscriptions());
        $writer->writeCollectionOfObjectValues('waitingMembers', $this->getWaitingMembers());
    }

    /**
     * Sets the allottedUnits property value. The number of licenses contained within the allotment. Not nullable. Read-only.
     * @param int|null $value Value to set for the allottedUnits property.
    */
    public function setAllottedUnits(?int $value): void {
        $this->getBackingStore()->set('allottedUnits', $value);
    }

    /**
     * Sets the assignableTo property value. The assignableTo property
     * @param AssigneeTypes|null $value Value to set for the assignableTo property.
    */
    public function setAssignableTo(?AssigneeTypes $value): void {
        $this->getBackingStore()->set('assignableTo', $value);
    }

    /**
     * Sets the assignments property value. The list of license assignments that consume licenses from this allotment. Not nullable.
     * @param array<Assignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the consumedUnits property value. The number of licenses that are currently consumed by assignments from this allotment. Not nullable. Read-only.
     * @param int|null $value Value to set for the consumedUnits property.
    */
    public function setConsumedUnits(?int $value): void {
        $this->getBackingStore()->set('consumedUnits', $value);
    }

    /**
     * Sets the services property value. The list of services that might be enabled or disabled for assignments from this allotment. Not nullable. Read-only.
     * @param array<Service>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the skuId property value. Unique identifier (GUID) for the service SKU that is equal to the skuId property on the related subscribedSku object. Read-only. Supports $filter.
     * @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value): void {
        $this->getBackingStore()->set('skuId', $value);
    }

    /**
     * Sets the skuPartNumber property value. Unique SKU display name that is equal to the skuPartNumber on the related subscribedSku object; for example, AAD_Premium. Read-only.
     * @param string|null $value Value to set for the skuPartNumber property.
    */
    public function setSkuPartNumber(?string $value): void {
        $this->getBackingStore()->set('skuPartNumber', $value);
    }

    /**
     * Sets the subscriptions property value. Basic information about the subscriptions that supports this allotment.
     * @param array<Subscription>|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?array $value): void {
        $this->getBackingStore()->set('subscriptions', $value);
    }

    /**
     * Sets the waitingMembers property value. List of over-assigned users who are in the waiting room for an allotment due to license capacity limits.
     * @param array<WaitingMember>|null $value Value to set for the waitingMembers property.
    */
    public function setWaitingMembers(?array $value): void {
        $this->getBackingStore()->set('waitingMembers', $value);
    }

}
