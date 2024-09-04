<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerSecurityScore extends Entity implements Parsable 
{
    /**
     * Instantiates a new PartnerSecurityScore and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerSecurityScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerSecurityScore {
        return new PartnerSecurityScore();
    }

    /**
     * Gets the currentScore property value. The current security score for the partner.
     * @return float|null
    */
    public function getCurrentScore(): ?float {
        $val = $this->getBackingStore()->get('currentScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentScore'");
    }

    /**
     * Gets the customerInsights property value. Contains customer-specific information for certain requirements.
     * @return array<CustomerInsight>|null
    */
    public function getCustomerInsights(): ?array {
        $val = $this->getBackingStore()->get('customerInsights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomerInsight::class);
            /** @var array<CustomerInsight>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerInsights'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'currentScore' => fn(ParseNode $n) => $o->setCurrentScore($n->getFloatValue()),
            'customerInsights' => fn(ParseNode $n) => $o->setCustomerInsights($n->getCollectionOfObjectValues([CustomerInsight::class, 'createFromDiscriminatorValue'])),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([SecurityScoreHistory::class, 'createFromDiscriminatorValue'])),
            'lastRefreshDateTime' => fn(ParseNode $n) => $o->setLastRefreshDateTime($n->getDateTimeValue()),
            'maxScore' => fn(ParseNode $n) => $o->setMaxScore($n->getFloatValue()),
            'requirements' => fn(ParseNode $n) => $o->setRequirements($n->getCollectionOfObjectValues([SecurityRequirement::class, 'createFromDiscriminatorValue'])),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the history property value. Contains a list of recent score changes.
     * @return array<SecurityScoreHistory>|null
    */
    public function getHistory(): ?array {
        $val = $this->getBackingStore()->get('history');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityScoreHistory::class);
            /** @var array<SecurityScoreHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'history'");
    }

    /**
     * Gets the lastRefreshDateTime property value. The last time the data was checked.
     * @return DateTime|null
    */
    public function getLastRefreshDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRefreshDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRefreshDateTime'");
    }

    /**
     * Gets the maxScore property value. The maximum score possible.
     * @return float|null
    */
    public function getMaxScore(): ?float {
        $val = $this->getBackingStore()->get('maxScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxScore'");
    }

    /**
     * Gets the requirements property value. Contains the list of security requirements that make up the score.
     * @return array<SecurityRequirement>|null
    */
    public function getRequirements(): ?array {
        $val = $this->getBackingStore()->get('requirements');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityRequirement::class);
            /** @var array<SecurityRequirement>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirements'");
    }

    /**
     * Gets the updatedDateTime property value. The last time the security score or related properties changed.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('currentScore', $this->getCurrentScore());
        $writer->writeCollectionOfObjectValues('customerInsights', $this->getCustomerInsights());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeDateTimeValue('lastRefreshDateTime', $this->getLastRefreshDateTime());
        $writer->writeFloatValue('maxScore', $this->getMaxScore());
        $writer->writeCollectionOfObjectValues('requirements', $this->getRequirements());
        $writer->writeDateTimeValue('updatedDateTime', $this->getUpdatedDateTime());
    }

    /**
     * Sets the currentScore property value. The current security score for the partner.
     * @param float|null $value Value to set for the currentScore property.
    */
    public function setCurrentScore(?float $value): void {
        $this->getBackingStore()->set('currentScore', $value);
    }

    /**
     * Sets the customerInsights property value. Contains customer-specific information for certain requirements.
     * @param array<CustomerInsight>|null $value Value to set for the customerInsights property.
    */
    public function setCustomerInsights(?array $value): void {
        $this->getBackingStore()->set('customerInsights', $value);
    }

    /**
     * Sets the history property value. Contains a list of recent score changes.
     * @param array<SecurityScoreHistory>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->getBackingStore()->set('history', $value);
    }

    /**
     * Sets the lastRefreshDateTime property value. The last time the data was checked.
     * @param DateTime|null $value Value to set for the lastRefreshDateTime property.
    */
    public function setLastRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshDateTime', $value);
    }

    /**
     * Sets the maxScore property value. The maximum score possible.
     * @param float|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?float $value): void {
        $this->getBackingStore()->set('maxScore', $value);
    }

    /**
     * Sets the requirements property value. Contains the list of security requirements that make up the score.
     * @param array<SecurityRequirement>|null $value Value to set for the requirements property.
    */
    public function setRequirements(?array $value): void {
        $this->getBackingStore()->set('requirements', $value);
    }

    /**
     * Sets the updatedDateTime property value. The last time the security score or related properties changed.
     * @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedDateTime', $value);
    }

}
