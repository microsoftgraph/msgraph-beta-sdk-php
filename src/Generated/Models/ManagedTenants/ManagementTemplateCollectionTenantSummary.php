<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateCollectionTenantSummary extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new managementTemplateCollectionTenantSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateCollectionTenantSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateCollectionTenantSummary {
        return new ManagementTemplateCollectionTenantSummary();
    }

    /**
     * Gets the completeStepsCount property value. The completeStepsCount property
     * @return int|null
    */
    public function getCompleteStepsCount(): ?int {
        $val = $this->getBackingStore()->get('completeStepsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completeStepsCount'");
    }

    /**
     * Gets the completeUsersCount property value. The completeUsersCount property
     * @return int|null
    */
    public function getCompleteUsersCount(): ?int {
        $val = $this->getBackingStore()->get('completeUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completeUsersCount'");
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        $val = $this->getBackingStore()->get('createdByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByUserId'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the dismissedStepsCount property value. The dismissedStepsCount property
     * @return int|null
    */
    public function getDismissedStepsCount(): ?int {
        $val = $this->getBackingStore()->get('dismissedStepsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dismissedStepsCount'");
    }

    /**
     * Gets the excludedUsersCount property value. The excludedUsersCount property
     * @return int|null
    */
    public function getExcludedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('excludedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedUsersCount'");
    }

    /**
     * Gets the excludedUsersDistinctCount property value. The excludedUsersDistinctCount property
     * @return int|null
    */
    public function getExcludedUsersDistinctCount(): ?int {
        $val = $this->getBackingStore()->get('excludedUsersDistinctCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedUsersDistinctCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completeStepsCount' => fn(ParseNode $n) => $o->setCompleteStepsCount($n->getIntegerValue()),
            'completeUsersCount' => fn(ParseNode $n) => $o->setCompleteUsersCount($n->getIntegerValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'dismissedStepsCount' => fn(ParseNode $n) => $o->setDismissedStepsCount($n->getIntegerValue()),
            'excludedUsersCount' => fn(ParseNode $n) => $o->setExcludedUsersCount($n->getIntegerValue()),
            'excludedUsersDistinctCount' => fn(ParseNode $n) => $o->setExcludedUsersDistinctCount($n->getIntegerValue()),
            'incompleteStepsCount' => fn(ParseNode $n) => $o->setIncompleteStepsCount($n->getIntegerValue()),
            'incompleteUsersCount' => fn(ParseNode $n) => $o->setIncompleteUsersCount($n->getIntegerValue()),
            'ineligibleStepsCount' => fn(ParseNode $n) => $o->setIneligibleStepsCount($n->getIntegerValue()),
            'isComplete' => fn(ParseNode $n) => $o->setIsComplete($n->getBooleanValue()),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'managementTemplateCollectionDisplayName' => fn(ParseNode $n) => $o->setManagementTemplateCollectionDisplayName($n->getStringValue()),
            'managementTemplateCollectionId' => fn(ParseNode $n) => $o->setManagementTemplateCollectionId($n->getStringValue()),
            'regressedStepsCount' => fn(ParseNode $n) => $o->setRegressedStepsCount($n->getIntegerValue()),
            'regressedUsersCount' => fn(ParseNode $n) => $o->setRegressedUsersCount($n->getIntegerValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'unlicensedUsersCount' => fn(ParseNode $n) => $o->setUnlicensedUsersCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the incompleteStepsCount property value. The incompleteStepsCount property
     * @return int|null
    */
    public function getIncompleteStepsCount(): ?int {
        $val = $this->getBackingStore()->get('incompleteStepsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incompleteStepsCount'");
    }

    /**
     * Gets the incompleteUsersCount property value. The incompleteUsersCount property
     * @return int|null
    */
    public function getIncompleteUsersCount(): ?int {
        $val = $this->getBackingStore()->get('incompleteUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incompleteUsersCount'");
    }

    /**
     * Gets the ineligibleStepsCount property value. The ineligibleStepsCount property
     * @return int|null
    */
    public function getIneligibleStepsCount(): ?int {
        $val = $this->getBackingStore()->get('ineligibleStepsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ineligibleStepsCount'");
    }

    /**
     * Gets the isComplete property value. The isComplete property
     * @return bool|null
    */
    public function getIsComplete(): ?bool {
        $val = $this->getBackingStore()->get('isComplete');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isComplete'");
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        $val = $this->getBackingStore()->get('lastActionByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionByUserId'");
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the managementTemplateCollectionDisplayName property value. The managementTemplateCollectionDisplayName property
     * @return string|null
    */
    public function getManagementTemplateCollectionDisplayName(): ?string {
        $val = $this->getBackingStore()->get('managementTemplateCollectionDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementTemplateCollectionDisplayName'");
    }

    /**
     * Gets the managementTemplateCollectionId property value. The managementTemplateCollectionId property
     * @return string|null
    */
    public function getManagementTemplateCollectionId(): ?string {
        $val = $this->getBackingStore()->get('managementTemplateCollectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementTemplateCollectionId'");
    }

    /**
     * Gets the regressedStepsCount property value. The regressedStepsCount property
     * @return int|null
    */
    public function getRegressedStepsCount(): ?int {
        $val = $this->getBackingStore()->get('regressedStepsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regressedStepsCount'");
    }

    /**
     * Gets the regressedUsersCount property value. The regressedUsersCount property
     * @return int|null
    */
    public function getRegressedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('regressedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regressedUsersCount'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the unlicensedUsersCount property value. The unlicensedUsersCount property
     * @return int|null
    */
    public function getUnlicensedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('unlicensedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unlicensedUsersCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('completeStepsCount', $this->getCompleteStepsCount());
        $writer->writeIntegerValue('completeUsersCount', $this->getCompleteUsersCount());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('dismissedStepsCount', $this->getDismissedStepsCount());
        $writer->writeIntegerValue('excludedUsersCount', $this->getExcludedUsersCount());
        $writer->writeIntegerValue('excludedUsersDistinctCount', $this->getExcludedUsersDistinctCount());
        $writer->writeIntegerValue('incompleteStepsCount', $this->getIncompleteStepsCount());
        $writer->writeIntegerValue('incompleteUsersCount', $this->getIncompleteUsersCount());
        $writer->writeIntegerValue('ineligibleStepsCount', $this->getIneligibleStepsCount());
        $writer->writeBooleanValue('isComplete', $this->getIsComplete());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('managementTemplateCollectionDisplayName', $this->getManagementTemplateCollectionDisplayName());
        $writer->writeStringValue('managementTemplateCollectionId', $this->getManagementTemplateCollectionId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('regressedStepsCount', $this->getRegressedStepsCount());
        $writer->writeIntegerValue('regressedUsersCount', $this->getRegressedUsersCount());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('unlicensedUsersCount', $this->getUnlicensedUsersCount());
    }

    /**
     * Sets the completeStepsCount property value. The completeStepsCount property
     * @param int|null $value Value to set for the completeStepsCount property.
    */
    public function setCompleteStepsCount(?int $value): void {
        $this->getBackingStore()->set('completeStepsCount', $value);
    }

    /**
     * Sets the completeUsersCount property value. The completeUsersCount property
     * @param int|null $value Value to set for the completeUsersCount property.
    */
    public function setCompleteUsersCount(?int $value): void {
        $this->getBackingStore()->set('completeUsersCount', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the dismissedStepsCount property value. The dismissedStepsCount property
     * @param int|null $value Value to set for the dismissedStepsCount property.
    */
    public function setDismissedStepsCount(?int $value): void {
        $this->getBackingStore()->set('dismissedStepsCount', $value);
    }

    /**
     * Sets the excludedUsersCount property value. The excludedUsersCount property
     * @param int|null $value Value to set for the excludedUsersCount property.
    */
    public function setExcludedUsersCount(?int $value): void {
        $this->getBackingStore()->set('excludedUsersCount', $value);
    }

    /**
     * Sets the excludedUsersDistinctCount property value. The excludedUsersDistinctCount property
     * @param int|null $value Value to set for the excludedUsersDistinctCount property.
    */
    public function setExcludedUsersDistinctCount(?int $value): void {
        $this->getBackingStore()->set('excludedUsersDistinctCount', $value);
    }

    /**
     * Sets the incompleteStepsCount property value. The incompleteStepsCount property
     * @param int|null $value Value to set for the incompleteStepsCount property.
    */
    public function setIncompleteStepsCount(?int $value): void {
        $this->getBackingStore()->set('incompleteStepsCount', $value);
    }

    /**
     * Sets the incompleteUsersCount property value. The incompleteUsersCount property
     * @param int|null $value Value to set for the incompleteUsersCount property.
    */
    public function setIncompleteUsersCount(?int $value): void {
        $this->getBackingStore()->set('incompleteUsersCount', $value);
    }

    /**
     * Sets the ineligibleStepsCount property value. The ineligibleStepsCount property
     * @param int|null $value Value to set for the ineligibleStepsCount property.
    */
    public function setIneligibleStepsCount(?int $value): void {
        $this->getBackingStore()->set('ineligibleStepsCount', $value);
    }

    /**
     * Sets the isComplete property value. The isComplete property
     * @param bool|null $value Value to set for the isComplete property.
    */
    public function setIsComplete(?bool $value): void {
        $this->getBackingStore()->set('isComplete', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     * @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the managementTemplateCollectionDisplayName property value. The managementTemplateCollectionDisplayName property
     * @param string|null $value Value to set for the managementTemplateCollectionDisplayName property.
    */
    public function setManagementTemplateCollectionDisplayName(?string $value): void {
        $this->getBackingStore()->set('managementTemplateCollectionDisplayName', $value);
    }

    /**
     * Sets the managementTemplateCollectionId property value. The managementTemplateCollectionId property
     * @param string|null $value Value to set for the managementTemplateCollectionId property.
    */
    public function setManagementTemplateCollectionId(?string $value): void {
        $this->getBackingStore()->set('managementTemplateCollectionId', $value);
    }

    /**
     * Sets the regressedStepsCount property value. The regressedStepsCount property
     * @param int|null $value Value to set for the regressedStepsCount property.
    */
    public function setRegressedStepsCount(?int $value): void {
        $this->getBackingStore()->set('regressedStepsCount', $value);
    }

    /**
     * Sets the regressedUsersCount property value. The regressedUsersCount property
     * @param int|null $value Value to set for the regressedUsersCount property.
    */
    public function setRegressedUsersCount(?int $value): void {
        $this->getBackingStore()->set('regressedUsersCount', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the unlicensedUsersCount property value. The unlicensedUsersCount property
     * @param int|null $value Value to set for the unlicensedUsersCount property.
    */
    public function setUnlicensedUsersCount(?int $value): void {
        $this->getBackingStore()->set('unlicensedUsersCount', $value);
    }

}
