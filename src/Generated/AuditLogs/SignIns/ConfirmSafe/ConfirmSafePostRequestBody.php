<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\SignIns\ConfirmSafe;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfirmSafePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $requestIds The requestIds property
    */
    private ?array $requestIds = null;
    
    /**
     * Instantiates a new confirmSafePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfirmSafePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfirmSafePostRequestBody {
        return new ConfirmSafePostRequestBody();
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
            'requestIds' => function (ParseNode $n) use ($o) { $o->setRequestIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the requestIds property value. The requestIds property
     * @return array<string>|null
    */
    public function getRequestIds(): ?array {
        return $this->requestIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('requestIds', $this->requestIds);
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
     * Sets the requestIds property value. The requestIds property
     *  @param array<string>|null $value Value to set for the requestIds property.
    */
    public function setRequestIds(?array $value ): void {
        $this->requestIds = $value;
    }

}
