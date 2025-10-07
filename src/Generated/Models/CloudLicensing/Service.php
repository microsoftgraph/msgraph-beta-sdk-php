<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\CloudLicensing;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Service implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Service and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Service
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Service {
        return new Service();
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
            'assignableTo' => fn(ParseNode $n) => $o->setAssignableTo($n->getEnumValue(AssigneeTypes::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'planName' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
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
     * Gets the planId property value. The unique identifier of the service plan that is equal to the servicePlanId property on the related servicePlanInfo objects.
     * @return string|null
    */
    public function getPlanId(): ?string {
        $val = $this->getBackingStore()->get('planId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planId'");
    }

    /**
     * Gets the planName property value. The name of the service plan that is equal to the servicePlanName property on the related servicePlanInfo objects.
     * @return string|null
    */
    public function getPlanName(): ?string {
        $val = $this->getBackingStore()->get('planName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignableTo', $this->getAssignableTo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeStringValue('planName', $this->getPlanName());
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
     * Sets the assignableTo property value. The assignableTo property
     * @param AssigneeTypes|null $value Value to set for the assignableTo property.
    */
    public function setAssignableTo(?AssigneeTypes $value): void {
        $this->getBackingStore()->set('assignableTo', $value);
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
     * Sets the planId property value. The unique identifier of the service plan that is equal to the servicePlanId property on the related servicePlanInfo objects.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the planName property value. The name of the service plan that is equal to the servicePlanName property on the related servicePlanInfo objects.
     * @param string|null $value Value to set for the planName property.
    */
    public function setPlanName(?string $value): void {
        $this->getBackingStore()->set('planName', $value);
    }

}
