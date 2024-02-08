<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatActivityStatistics extends ActivityStatistics implements Parsable 
{
    /**
     * Instantiates a new ChatActivityStatistics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.chatActivityStatistics');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatActivityStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatActivityStatistics {
        return new ChatActivityStatistics();
    }

    /**
     * Gets the afterHours property value. Time spent on chats outside of working hours, which is based on the user's Microsoft Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getAfterHours(): ?DateInterval {
        $val = $this->getBackingStore()->get('afterHours');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'afterHours'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'afterHours' => fn(ParseNode $n) => $o->setAfterHours($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('afterHours', $this->getAfterHours());
    }

    /**
     * Sets the afterHours property value. Time spent on chats outside of working hours, which is based on the user's Microsoft Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the afterHours property.
    */
    public function setAfterHours(?DateInterval $value): void {
        $this->getBackingStore()->set('afterHours', $value);
    }

}
