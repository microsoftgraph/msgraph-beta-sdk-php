<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ActivateServicePlan;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivateServicePlanPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $servicePlanId The servicePlanId property
    */
    private ?string $servicePlanId = null;
    
    /**
     * @var string|null $skuId The skuId property
    */
    private ?string $skuId = null;
    
    /**
     * Instantiates a new activateServicePlanPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'servicePlanId' => function (ParseNode $n) use ($o) { $o->setServicePlanId($n->getStringValue()); },
            'skuId' => function (ParseNode $n) use ($o) { $o->setSkuId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the servicePlanId property value. The servicePlanId property
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        return $this->servicePlanId;
    }

    /**
     * Gets the skuId property value. The skuId property
     * @return string|null
    */
    public function getSkuId(): ?string {
        return $this->skuId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('servicePlanId', $this->servicePlanId);
        $writer->writeStringValue('skuId', $this->skuId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the servicePlanId property value. The servicePlanId property
     *  @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value ): void {
        $this->servicePlanId = $value;
    }

    /**
     * Sets the skuId property value. The skuId property
     *  @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value ): void {
        $this->skuId = $value;
    }

}
