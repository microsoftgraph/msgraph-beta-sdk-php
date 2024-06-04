<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The EnrollmentTimeDeviceMembershipTargetResult entity represents the results of the set/get EnrollmentTimeDeviceMembershipTarget request. The set/get EnrollmentTimeDeviceMembershipTarget API validates the device membership targets specified by the admin to ensure that they exist, that they are of the proper type, and any other target requirements are met such as that the Intune Device Provisioning First Party App is an owner of the target. Failures other than validation will result in 500 else validationSucceeded will be true or false if any of the validation fails for EnrollmentTimeDeviceMembershipTarget.
*/
class EnrollmentTimeDeviceMembershipTargetResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EnrollmentTimeDeviceMembershipTargetResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentTimeDeviceMembershipTargetResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentTimeDeviceMembershipTargetResult {
        return new EnrollmentTimeDeviceMembershipTargetResult();
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
     * Gets the enrollmentTimeDeviceMembershipTargetValidationStatuses property value. A list of validation status of the memberships targetted to profile. This collection can contain a maximum of 1 elements.
     * @return array<EnrollmentTimeDeviceMembershipTargetStatus>|null
    */
    public function getEnrollmentTimeDeviceMembershipTargetValidationStatuses(): ?array {
        $val = $this->getBackingStore()->get('enrollmentTimeDeviceMembershipTargetValidationStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EnrollmentTimeDeviceMembershipTargetStatus::class);
            /** @var array<EnrollmentTimeDeviceMembershipTargetStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentTimeDeviceMembershipTargetValidationStatuses'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enrollmentTimeDeviceMembershipTargetValidationStatuses' => fn(ParseNode $n) => $o->setEnrollmentTimeDeviceMembershipTargetValidationStatuses($n->getCollectionOfObjectValues([EnrollmentTimeDeviceMembershipTargetStatus::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'validationSucceeded' => fn(ParseNode $n) => $o->setValidationSucceeded($n->getBooleanValue()),
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
     * Gets the validationSucceeded property value. Indicates if validations succeeded for the device membership target. When 'true', the device membership target validation found no issues. When 'false', the device membership target validation found issues. default - false
     * @return bool|null
    */
    public function getValidationSucceeded(): ?bool {
        $val = $this->getBackingStore()->get('validationSucceeded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validationSucceeded'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('enrollmentTimeDeviceMembershipTargetValidationStatuses', $this->getEnrollmentTimeDeviceMembershipTargetValidationStatuses());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('validationSucceeded', $this->getValidationSucceeded());
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
     * Sets the enrollmentTimeDeviceMembershipTargetValidationStatuses property value. A list of validation status of the memberships targetted to profile. This collection can contain a maximum of 1 elements.
     * @param array<EnrollmentTimeDeviceMembershipTargetStatus>|null $value Value to set for the enrollmentTimeDeviceMembershipTargetValidationStatuses property.
    */
    public function setEnrollmentTimeDeviceMembershipTargetValidationStatuses(?array $value): void {
        $this->getBackingStore()->set('enrollmentTimeDeviceMembershipTargetValidationStatuses', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the validationSucceeded property value. Indicates if validations succeeded for the device membership target. When 'true', the device membership target validation found no issues. When 'false', the device membership target validation found issues. default - false
     * @param bool|null $value Value to set for the validationSucceeded property.
    */
    public function setValidationSucceeded(?bool $value): void {
        $this->getBackingStore()->set('validationSucceeded', $value);
    }

}
