<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ResizeCloudPc;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResizeCloudPcPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $targetServicePlanId The targetServicePlanId property
    */
    private ?string $targetServicePlanId = null;
    
    /**
     * Instantiates a new resizeCloudPcPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResizeCloudPcPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResizeCloudPcPostRequestBody {
        return new ResizeCloudPcPostRequestBody();
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
            'targetServicePlanId' => function (ParseNode $n) use ($o) { $o->setTargetServicePlanId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the targetServicePlanId property value. The targetServicePlanId property
     * @return string|null
    */
    public function getTargetServicePlanId(): ?string {
        return $this->targetServicePlanId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('targetServicePlanId', $this->targetServicePlanId);
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
     * Sets the targetServicePlanId property value. The targetServicePlanId property
     *  @param string|null $value Value to set for the targetServicePlanId property.
    */
    public function setTargetServicePlanId(?string $value ): void {
        $this->targetServicePlanId = $value;
    }

}
