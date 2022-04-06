<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class UpdateWindow implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var Time|null $updateWindowEndTime End of a time window during which agents can receive updates */
    private ?Time $updateWindowEndTime = null;
    
    /** @var Time|null $updateWindowStartTime Start of a time window during which agents can receive updates */
    private ?Time $updateWindowStartTime = null;
    
    /**
     * Instantiates a new updateWindow and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateWindow
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdateWindow {
        return new UpdateWindow();
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
            'updateWindowEndTime' => function (self $o, ParseNode $n) { $o->setUpdateWindowEndTime($n->getTimeValue()); },
            'updateWindowStartTime' => function (self $o, ParseNode $n) { $o->setUpdateWindowStartTime($n->getTimeValue()); },
        ];
    }

    /**
     * Gets the updateWindowEndTime property value. End of a time window during which agents can receive updates
     * @return Time|null
    */
    public function getUpdateWindowEndTime(): ?Time {
        return $this->updateWindowEndTime;
    }

    /**
     * Gets the updateWindowStartTime property value. Start of a time window during which agents can receive updates
     * @return Time|null
    */
    public function getUpdateWindowStartTime(): ?Time {
        return $this->updateWindowStartTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeTimeValue('updateWindowEndTime', $this->updateWindowEndTime);
        $writer->writeTimeValue('updateWindowStartTime', $this->updateWindowStartTime);
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
     * Sets the updateWindowEndTime property value. End of a time window during which agents can receive updates
     *  @param Time|null $value Value to set for the updateWindowEndTime property.
    */
    public function setUpdateWindowEndTime(?Time $value ): void {
        $this->updateWindowEndTime = $value;
    }

    /**
     * Sets the updateWindowStartTime property value. Start of a time window during which agents can receive updates
     *  @param Time|null $value Value to set for the updateWindowStartTime property.
    */
    public function setUpdateWindowStartTime(?Time $value ): void {
        $this->updateWindowStartTime = $value;
    }

}
