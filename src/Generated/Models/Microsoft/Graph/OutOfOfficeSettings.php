<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutOfOfficeSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isOutOfOffice True if either:It is currently in the out of office time window configured on the Outlook or Teams client.There is currently an event on the user's calendar that's marked as Show as Out of OfficeOtherwise, false. */
    private ?bool $isOutOfOffice = null;
    
    /** @var string|null $message The out of office message that the user configured on Outlook client (Automatic Replies (Out of Office)) or the Teams client (Schedule out of office). */
    private ?string $message = null;
    
    /**
     * Instantiates a new outOfOfficeSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutOfOfficeSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OutOfOfficeSettings {
        return new OutOfOfficeSettings();
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
            'isOutOfOffice' => function (self $o, ParseNode $n) { $o->setIsOutOfOffice($n->getBooleanValue()); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isOutOfOffice property value. True if either:It is currently in the out of office time window configured on the Outlook or Teams client.There is currently an event on the user's calendar that's marked as Show as Out of OfficeOtherwise, false.
     * @return bool|null
    */
    public function getIsOutOfOffice(): ?bool {
        return $this->isOutOfOffice;
    }

    /**
     * Gets the message property value. The out of office message that the user configured on Outlook client (Automatic Replies (Out of Office)) or the Teams client (Schedule out of office).
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isOutOfOffice', $this->isOutOfOffice);
        $writer->writeStringValue('message', $this->message);
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
     * Sets the isOutOfOffice property value. True if either:It is currently in the out of office time window configured on the Outlook or Teams client.There is currently an event on the user's calendar that's marked as Show as Out of OfficeOtherwise, false.
     *  @param bool|null $value Value to set for the isOutOfOffice property.
    */
    public function setIsOutOfOffice(?bool $value ): void {
        $this->isOutOfOffice = $value;
    }

    /**
     * Sets the message property value. The out of office message that the user configured on Outlook client (Automatic Replies (Out of Office)) or the Teams client (Schedule out of office).
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

}
