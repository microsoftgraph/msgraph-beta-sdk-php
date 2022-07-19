<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosManagedAppProtections\HasPayloadLinks;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HasPayloadLinksPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $payloadIds The payloadIds property
    */
    private ?array $payloadIds = null;
    
    /**
     * Instantiates a new hasPayloadLinksPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HasPayloadLinksPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HasPayloadLinksPostRequestBody {
        return new HasPayloadLinksPostRequestBody();
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
            'payloadIds' => function (ParseNode $n) use ($o) { $o->setPayloadIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the payloadIds property value. The payloadIds property
     * @return array<string>|null
    */
    public function getPayloadIds(): ?array {
        return $this->payloadIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('payloadIds', $this->payloadIds);
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
     * Sets the payloadIds property value. The payloadIds property
     *  @param array<string>|null $value Value to set for the payloadIds property.
    */
    public function setPayloadIds(?array $value ): void {
        $this->payloadIds = $value;
    }

}
