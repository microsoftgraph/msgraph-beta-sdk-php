<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EnrollmentMappings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EnrollmentMappings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentMappings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentMappings {
        return new EnrollmentMappings();
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
            'memberEnrollmentMappings' => fn(ParseNode $n) => $o->setMemberEnrollmentMappings($n->getCollectionOfObjectValues([SectionRoleReferenceValue::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ownerEnrollmentMappings' => fn(ParseNode $n) => $o->setOwnerEnrollmentMappings($n->getCollectionOfObjectValues([SectionRoleReferenceValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the memberEnrollmentMappings property value. The enrollmentMappings member for the class group.
     * @return array<SectionRoleReferenceValue>|null
    */
    public function getMemberEnrollmentMappings(): ?array {
        $val = $this->getBackingStore()->get('memberEnrollmentMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SectionRoleReferenceValue::class);
            /** @var array<SectionRoleReferenceValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberEnrollmentMappings'");
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
     * Gets the ownerEnrollmentMappings property value. The enrollmentMappings owner for the class group.
     * @return array<SectionRoleReferenceValue>|null
    */
    public function getOwnerEnrollmentMappings(): ?array {
        $val = $this->getBackingStore()->get('ownerEnrollmentMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SectionRoleReferenceValue::class);
            /** @var array<SectionRoleReferenceValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerEnrollmentMappings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('memberEnrollmentMappings', $this->getMemberEnrollmentMappings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('ownerEnrollmentMappings', $this->getOwnerEnrollmentMappings());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the memberEnrollmentMappings property value. The enrollmentMappings member for the class group.
     * @param array<SectionRoleReferenceValue>|null $value Value to set for the memberEnrollmentMappings property.
    */
    public function setMemberEnrollmentMappings(?array $value): void {
        $this->getBackingStore()->set('memberEnrollmentMappings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ownerEnrollmentMappings property value. The enrollmentMappings owner for the class group.
     * @param array<SectionRoleReferenceValue>|null $value Value to set for the ownerEnrollmentMappings property.
    */
    public function setOwnerEnrollmentMappings(?array $value): void {
        $this->getBackingStore()->set('ownerEnrollmentMappings', $value);
    }

}
