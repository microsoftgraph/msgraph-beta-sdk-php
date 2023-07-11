<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchJobBase extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new exactMatchJobBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchJobBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchJobBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.exactMatchLookupJob': return new ExactMatchLookupJob();
                case '#microsoft.graph.exactMatchSession': return new ExactMatchSession();
                case '#microsoft.graph.exactMatchSessionBase': return new ExactMatchSessionBase();
            }
        }
        return new ExactMatchJobBase();
    }

    /**
     * Gets the completionDateTime property value. The completionDateTime property
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionDateTime'");
    }

    /**
     * Gets the creationDateTime property value. The creationDateTime property
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('creationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationDateTime'");
    }

    /**
     * Gets the error property value. The error property
     * @return ClassificationError|null
    */
    public function getError(): ?ClassificationError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof ClassificationError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([ClassificationError::class, 'createFromDiscriminatorValue'])),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the completionDateTime property value. The completionDateTime property
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the creationDateTime property value. The creationDateTime property
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the error property value. The error property
     * @param ClassificationError|null $value Value to set for the error property.
    */
    public function setError(?ClassificationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
