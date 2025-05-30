<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\SetEnrollmentTimeDeviceMembershipTarget;

use Microsoft\Graph\Beta\Generated\Models\EnrollmentTimeDeviceMembershipTarget;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SetEnrollmentTimeDeviceMembershipTargetPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SetEnrollmentTimeDeviceMembershipTargetPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetEnrollmentTimeDeviceMembershipTargetPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetEnrollmentTimeDeviceMembershipTargetPostRequestBody {
        return new SetEnrollmentTimeDeviceMembershipTargetPostRequestBody();
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
     * Gets the enrollmentTimeDeviceMembershipTargets property value. The enrollmentTimeDeviceMembershipTargets property
     * @return array<EnrollmentTimeDeviceMembershipTarget>|null
    */
    public function getEnrollmentTimeDeviceMembershipTargets(): ?array {
        $val = $this->getBackingStore()->get('enrollmentTimeDeviceMembershipTargets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EnrollmentTimeDeviceMembershipTarget::class);
            /** @var array<EnrollmentTimeDeviceMembershipTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentTimeDeviceMembershipTargets'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enrollmentTimeDeviceMembershipTargets' => fn(ParseNode $n) => $o->setEnrollmentTimeDeviceMembershipTargets($n->getCollectionOfObjectValues([EnrollmentTimeDeviceMembershipTarget::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('enrollmentTimeDeviceMembershipTargets', $this->getEnrollmentTimeDeviceMembershipTargets());
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
     * Sets the enrollmentTimeDeviceMembershipTargets property value. The enrollmentTimeDeviceMembershipTargets property
     * @param array<EnrollmentTimeDeviceMembershipTarget>|null $value Value to set for the enrollmentTimeDeviceMembershipTargets property.
    */
    public function setEnrollmentTimeDeviceMembershipTargets(?array $value): void {
        $this->getBackingStore()->set('enrollmentTimeDeviceMembershipTargets', $value);
    }

}
