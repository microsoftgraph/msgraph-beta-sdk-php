<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchJobBase extends Entity 
{
    /** @var DateTime|null $completionDateTime  */
    private ?DateTime $completionDateTime = null;
    
    /** @var DateTime|null $creationDateTime  */
    private ?DateTime $creationDateTime = null;
    
    /** @var ClassificationError|null $error  */
    private ?ClassificationError $error = null;
    
    /** @var DateTime|null $lastUpdatedDateTime  */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /** @var DateTime|null $startDateTime  */
    private ?DateTime $startDateTime = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchJobBase {
        return new ExactMatchJobBase();
    }

    /**
     * Gets the completionDateTime property value. 
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->completionDateTime;
    }

    /**
     * Gets the creationDateTime property value. 
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the error property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'completionDateTime' => function (self $o, ParseNode $n) { $o->setCompletionDateTime($n->getDateTimeValue()); },
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(ClassificationError::class)); },
            'lastUpdatedDateTime' => function (self $o, ParseNode $n) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the startDateTime property value. 
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
     * Sets the completionDateTime property value. 
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
    }

    /**
     * Sets the creationDateTime property value. 
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the error property value. 
     *  @param ClassificationError|null $value Value to set for the error property.
    */
    public function setError(?ClassificationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. 
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
