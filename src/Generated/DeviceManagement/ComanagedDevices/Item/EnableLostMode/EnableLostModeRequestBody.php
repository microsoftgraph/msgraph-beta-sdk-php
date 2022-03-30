<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\EnableLostMode;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnableLostModeRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $footer  */
    private ?string $footer = null;
    
    /** @var string|null $message  */
    private ?string $message = null;
    
    /** @var string|null $phoneNumber  */
    private ?string $phoneNumber = null;
    
    /**
     * Instantiates a new enableLostModeRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnableLostModeRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EnableLostModeRequestBody {
        return new EnableLostModeRequestBody();
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
        return  [
            'footer' => function (self $o, ParseNode $n) { $o->setFooter($n->getStringValue()); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getStringValue()); },
            'phoneNumber' => function (self $o, ParseNode $n) { $o->setPhoneNumber($n->getStringValue()); },
        ];
    }

    /**
     * Gets the footer property value. 
     * @return string|null
    */
    public function getFooter(): ?string {
        return $this->footer;
    }

    /**
     * Gets the message property value. 
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the phoneNumber property value. 
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('footer', $this->footer);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
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
     * Sets the footer property value. 
     *  @param string|null $value Value to set for the footer property.
    */
    public function setFooter(?string $value ): void {
        $this->footer = $value;
    }

    /**
     * Sets the message property value. 
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the phoneNumber property value. 
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

}
