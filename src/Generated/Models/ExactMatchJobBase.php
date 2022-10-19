<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchJobBase extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completionDateTime The completionDateTime property
    */
    private ?DateTime $completionDateTime = null;
    
    /**
     * @var DateTime|null $creationDateTime The creationDateTime property
    */
    private ?DateTime $creationDateTime = null;
    
    /**
     * @var ClassificationError|null $error The error property
    */
    private ?ClassificationError $error = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The lastUpdatedDateTime property
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime The startDateTime property
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new exactMatchJobBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exactMatchJobBase');
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
        return $this->completionDateTime;
    }

    /**
     * Gets the creationDateTime property value. The creationDateTime property
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the error property value. The error property
     * @return ClassificationError|null
    */
    public function getError(): ?ClassificationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completionDateTime', $this->completionDateTime);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the completionDateTime property value. The completionDateTime property
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
    }

    /**
     * Sets the creationDateTime property value. The creationDateTime property
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the error property value. The error property
     *  @param ClassificationError|null $value Value to set for the error property.
    */
    public function setError(?ClassificationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
