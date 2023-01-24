<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailActivityStatistics extends ActivityStatistics implements Parsable 
{
    /**
     * Instantiates a new EmailActivityStatistics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.emailActivityStatistics');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailActivityStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailActivityStatistics {
        return new EmailActivityStatistics();
    }

    /**
     * Gets the afterHours property value. Total hours spent on email outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getAfterHours(): ?DateInterval {
        return $this->getBackingStore()->get('afterHours');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'afterHours' => fn(ParseNode $n) => $o->setAfterHours($n->getDateIntervalValue()),
            'readEmail' => fn(ParseNode $n) => $o->setReadEmail($n->getDateIntervalValue()),
            'sentEmail' => fn(ParseNode $n) => $o->setSentEmail($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Gets the readEmail property value. Total hours spent reading email. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getReadEmail(): ?DateInterval {
        return $this->getBackingStore()->get('readEmail');
    }

    /**
     * Gets the sentEmail property value. Total hours spent writing and sending email. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getSentEmail(): ?DateInterval {
        return $this->getBackingStore()->get('sentEmail');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('afterHours', $this->getAfterHours());
        $writer->writeDateIntervalValue('readEmail', $this->getReadEmail());
        $writer->writeDateIntervalValue('sentEmail', $this->getSentEmail());
    }

    /**
     * Sets the afterHours property value. Total hours spent on email outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the afterHours property.
    */
    public function setAfterHours(?DateInterval $value): void {
        $this->getBackingStore()->set('afterHours', $value);
    }

    /**
     * Sets the readEmail property value. Total hours spent reading email. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the readEmail property.
    */
    public function setReadEmail(?DateInterval $value): void {
        $this->getBackingStore()->set('readEmail', $value);
    }

    /**
     * Sets the sentEmail property value. Total hours spent writing and sending email. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the sentEmail property.
    */
    public function setSentEmail(?DateInterval $value): void {
        $this->getBackingStore()->set('sentEmail', $value);
    }

}
