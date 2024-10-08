<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityScoreHistory extends Entity implements Parsable 
{
    /**
     * Instantiates a new SecurityScoreHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityScoreHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityScoreHistory {
        return new SecurityScoreHistory();
    }

    /**
     * Gets the compliantRequirementsCount property value. The number of compliant security requirements at the time.
     * @return int|null
    */
    public function getCompliantRequirementsCount(): ?int {
        $val = $this->getBackingStore()->get('compliantRequirementsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantRequirementsCount'");
    }

    /**
     * Gets the createdDateTime property value. The date the history entry was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantRequirementsCount' => fn(ParseNode $n) => $o->setCompliantRequirementsCount($n->getIntegerValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'score' => fn(ParseNode $n) => $o->setScore($n->getObjectValue([SecurityScoreHistory_score::class, 'createFromDiscriminatorValue'])),
            'totalRequirementsCount' => fn(ParseNode $n) => $o->setTotalRequirementsCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the score property value. The score recorded at the time.
     * @return SecurityScoreHistory_score|null
    */
    public function getScore(): ?SecurityScoreHistory_score {
        $val = $this->getBackingStore()->get('score');
        if (is_null($val) || $val instanceof SecurityScoreHistory_score) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'score'");
    }

    /**
     * Gets the totalRequirementsCount property value. The total number of requirements at the time.
     * @return int|null
    */
    public function getTotalRequirementsCount(): ?int {
        $val = $this->getBackingStore()->get('totalRequirementsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRequirementsCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantRequirementsCount', $this->getCompliantRequirementsCount());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('score', $this->getScore());
        $writer->writeIntegerValue('totalRequirementsCount', $this->getTotalRequirementsCount());
    }

    /**
     * Sets the compliantRequirementsCount property value. The number of compliant security requirements at the time.
     * @param int|null $value Value to set for the compliantRequirementsCount property.
    */
    public function setCompliantRequirementsCount(?int $value): void {
        $this->getBackingStore()->set('compliantRequirementsCount', $value);
    }

    /**
     * Sets the createdDateTime property value. The date the history entry was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the score property value. The score recorded at the time.
     * @param SecurityScoreHistory_score|null $value Value to set for the score property.
    */
    public function setScore(?SecurityScoreHistory_score $value): void {
        $this->getBackingStore()->set('score', $value);
    }

    /**
     * Sets the totalRequirementsCount property value. The total number of requirements at the time.
     * @param int|null $value Value to set for the totalRequirementsCount property.
    */
    public function setTotalRequirementsCount(?int $value): void {
        $this->getBackingStore()->set('totalRequirementsCount', $value);
    }

}
