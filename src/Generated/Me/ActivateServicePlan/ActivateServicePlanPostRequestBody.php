<?php

namespace Microsoft\Graph\Beta\Generated\Me\ActivateServicePlan;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ActivateServicePlanPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new activateServicePlanPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivateServicePlanPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivateServicePlanPostRequestBody {
        return new ActivateServicePlanPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'servicePlanId' => fn(ParseNode $n) => $o->setServicePlanId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the servicePlanId property value. The servicePlanId property
     * @return Guid|null
    */
    public function getServicePlanId(): ?Guid {
        return $this->getBackingStore()->get('servicePlanId');
    }

    /**
     * Gets the skuId property value. The skuId property
     * @return Guid|null
    */
    public function getSkuId(): ?Guid {
        return $this->getBackingStore()->get('skuId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('servicePlanId', $this->getServicePlanId());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the servicePlanId property value. The servicePlanId property
     *  @param Guid|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?Guid $value): void {
        $this->getBackingStore()->set('servicePlanId', $value);
    }

    /**
     * Sets the skuId property value. The skuId property
     *  @param Guid|null $value Value to set for the skuId property.
    */
    public function setSkuId(?Guid $value): void {
        $this->getBackingStore()->set('skuId', $value);
    }

}
