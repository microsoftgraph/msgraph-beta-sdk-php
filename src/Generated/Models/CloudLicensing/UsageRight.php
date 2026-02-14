<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UsageRight extends Entity implements Parsable 
{
    /**
     * Instantiates a new UsageRight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageRight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageRight {
        return new UsageRight();
    }

    /**
     * Gets the allotments property value. The set of allotments associated with the assignments that combine to form this usageRight.
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
     * Gets the assignments property value. The set of assignments that combine to form this usageRight, including both direct assignments and assignments inherited through group membership.
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([Assignment::class, 'createFromDiscriminatorValue'])),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([Service::class, 'createFromDiscriminatorValue'])),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getStringValue()),
            'skuPartNumber' => fn(ParseNode $n) => $o->setSkuPartNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the services property value. Information about the services associated with the usageRight. Not nullable. Read-only. Supports $filter on the planId property.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allotments', $this->getAllotments());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeStringValue('skuPartNumber', $this->getSkuPartNumber());
    }

    /**
     * Sets the allotments property value. The set of allotments associated with the assignments that combine to form this usageRight.
     * @param array<Allotment>|null $value Value to set for the allotments property.
    */
    public function setAllotments(?array $value): void {
        $this->getBackingStore()->set('allotments', $value);
    }

    /**
     * Sets the assignments property value. The set of assignments that combine to form this usageRight, including both direct assignments and assignments inherited through group membership.
     * @param array<Assignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the services property value. Information about the services associated with the usageRight. Not nullable. Read-only. Supports $filter on the planId property.
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

}
