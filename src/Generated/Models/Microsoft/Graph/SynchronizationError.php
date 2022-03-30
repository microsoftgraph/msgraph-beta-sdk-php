<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationError implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var string|null $message  */
    private ?string $message = null;
    
    /** @var bool|null $tenantActionable  */
    private ?bool $tenantActionable = null;
    
    /**
     * Instantiates a new synchronizationError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationError
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationError {
        return new SynchronizationError();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getStringValue()); },
            'tenantActionable' => function (self $o, ParseNode $n) { $o->setTenantActionable($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the message property value. 
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the tenantActionable property value. 
     * @return bool|null
    */
    public function getTenantActionable(): ?bool {
        return $this->tenantActionable;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('message', $this->message);
        $writer->writeBooleanValue('tenantActionable', $this->tenantActionable);
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
     * Sets the code property value. 
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the message property value. 
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the tenantActionable property value. 
     *  @param bool|null $value Value to set for the tenantActionable property.
    */
    public function setTenantActionable(?bool $value ): void {
        $this->tenantActionable = $value;
    }

}
