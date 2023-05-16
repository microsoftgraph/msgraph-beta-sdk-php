<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStepTenantSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagementTemplateStepTenantSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStepTenantSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStepTenantSummary {
        return new ManagementTemplateStepTenantSummary();
    }

    /**
     * Gets the assignedTenantsCount property value. The assignedTenantsCount property
     * @return int|null
    */
    public function getAssignedTenantsCount(): ?int {
        return $this->getBackingStore()->get('assignedTenantsCount');
    }

    /**
     * Gets the compliantTenantsCount property value. The compliantTenantsCount property
     * @return int|null
    */
    public function getCompliantTenantsCount(): ?int {
        return $this->getBackingStore()->get('compliantTenantsCount');
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->getBackingStore()->get('createdByUserId');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the dismissedTenantsCount property value. The dismissedTenantsCount property
     * @return int|null
    */
    public function getDismissedTenantsCount(): ?int {
        return $this->getBackingStore()->get('dismissedTenantsCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTenantsCount' => fn(ParseNode $n) => $o->setAssignedTenantsCount($n->getIntegerValue()),
            'compliantTenantsCount' => fn(ParseNode $n) => $o->setCompliantTenantsCount($n->getIntegerValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'dismissedTenantsCount' => fn(ParseNode $n) => $o->setDismissedTenantsCount($n->getIntegerValue()),
            'ineligibleTenantsCount' => fn(ParseNode $n) => $o->setIneligibleTenantsCount($n->getIntegerValue()),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'managementTemplateCollectionDisplayName' => fn(ParseNode $n) => $o->setManagementTemplateCollectionDisplayName($n->getStringValue()),
            'managementTemplateCollectionId' => fn(ParseNode $n) => $o->setManagementTemplateCollectionId($n->getStringValue()),
            'managementTemplateDisplayName' => fn(ParseNode $n) => $o->setManagementTemplateDisplayName($n->getStringValue()),
            'managementTemplateId' => fn(ParseNode $n) => $o->setManagementTemplateId($n->getStringValue()),
            'managementTemplateStepDisplayName' => fn(ParseNode $n) => $o->setManagementTemplateStepDisplayName($n->getStringValue()),
            'managementTemplateStepId' => fn(ParseNode $n) => $o->setManagementTemplateStepId($n->getStringValue()),
            'notCompliantTenantsCount' => fn(ParseNode $n) => $o->setNotCompliantTenantsCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the ineligibleTenantsCount property value. The ineligibleTenantsCount property
     * @return int|null
    */
    public function getIneligibleTenantsCount(): ?int {
        return $this->getBackingStore()->get('ineligibleTenantsCount');
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->getBackingStore()->get('lastActionByUserId');
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the managementTemplateCollectionDisplayName property value. The managementTemplateCollectionDisplayName property
     * @return string|null
    */
    public function getManagementTemplateCollectionDisplayName(): ?string {
        return $this->getBackingStore()->get('managementTemplateCollectionDisplayName');
    }

    /**
     * Gets the managementTemplateCollectionId property value. The managementTemplateCollectionId property
     * @return string|null
    */
    public function getManagementTemplateCollectionId(): ?string {
        return $this->getBackingStore()->get('managementTemplateCollectionId');
    }

    /**
     * Gets the managementTemplateDisplayName property value. The managementTemplateDisplayName property
     * @return string|null
    */
    public function getManagementTemplateDisplayName(): ?string {
        return $this->getBackingStore()->get('managementTemplateDisplayName');
    }

    /**
     * Gets the managementTemplateId property value. The managementTemplateId property
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->getBackingStore()->get('managementTemplateId');
    }

    /**
     * Gets the managementTemplateStepDisplayName property value. The managementTemplateStepDisplayName property
     * @return string|null
    */
    public function getManagementTemplateStepDisplayName(): ?string {
        return $this->getBackingStore()->get('managementTemplateStepDisplayName');
    }

    /**
     * Gets the managementTemplateStepId property value. The managementTemplateStepId property
     * @return string|null
    */
    public function getManagementTemplateStepId(): ?string {
        return $this->getBackingStore()->get('managementTemplateStepId');
    }

    /**
     * Gets the notCompliantTenantsCount property value. The notCompliantTenantsCount property
     * @return int|null
    */
    public function getNotCompliantTenantsCount(): ?int {
        return $this->getBackingStore()->get('notCompliantTenantsCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('assignedTenantsCount', $this->getAssignedTenantsCount());
        $writer->writeIntegerValue('compliantTenantsCount', $this->getCompliantTenantsCount());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('dismissedTenantsCount', $this->getDismissedTenantsCount());
        $writer->writeIntegerValue('ineligibleTenantsCount', $this->getIneligibleTenantsCount());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('managementTemplateCollectionDisplayName', $this->getManagementTemplateCollectionDisplayName());
        $writer->writeStringValue('managementTemplateCollectionId', $this->getManagementTemplateCollectionId());
        $writer->writeStringValue('managementTemplateDisplayName', $this->getManagementTemplateDisplayName());
        $writer->writeStringValue('managementTemplateId', $this->getManagementTemplateId());
        $writer->writeStringValue('managementTemplateStepDisplayName', $this->getManagementTemplateStepDisplayName());
        $writer->writeStringValue('managementTemplateStepId', $this->getManagementTemplateStepId());
        $writer->writeIntegerValue('notCompliantTenantsCount', $this->getNotCompliantTenantsCount());
    }

    /**
     * Sets the assignedTenantsCount property value. The assignedTenantsCount property
     * @param int|null $value Value to set for the assignedTenantsCount property.
    */
    public function setAssignedTenantsCount(?int $value): void {
        $this->getBackingStore()->set('assignedTenantsCount', $value);
    }

    /**
     * Sets the compliantTenantsCount property value. The compliantTenantsCount property
     * @param int|null $value Value to set for the compliantTenantsCount property.
    */
    public function setCompliantTenantsCount(?int $value): void {
        $this->getBackingStore()->set('compliantTenantsCount', $value);
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
     * Sets the dismissedTenantsCount property value. The dismissedTenantsCount property
     * @param int|null $value Value to set for the dismissedTenantsCount property.
    */
    public function setDismissedTenantsCount(?int $value): void {
        $this->getBackingStore()->set('dismissedTenantsCount', $value);
    }

    /**
     * Sets the ineligibleTenantsCount property value. The ineligibleTenantsCount property
     * @param int|null $value Value to set for the ineligibleTenantsCount property.
    */
    public function setIneligibleTenantsCount(?int $value): void {
        $this->getBackingStore()->set('ineligibleTenantsCount', $value);
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
     * Sets the managementTemplateDisplayName property value. The managementTemplateDisplayName property
     * @param string|null $value Value to set for the managementTemplateDisplayName property.
    */
    public function setManagementTemplateDisplayName(?string $value): void {
        $this->getBackingStore()->set('managementTemplateDisplayName', $value);
    }

    /**
     * Sets the managementTemplateId property value. The managementTemplateId property
     * @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value): void {
        $this->getBackingStore()->set('managementTemplateId', $value);
    }

    /**
     * Sets the managementTemplateStepDisplayName property value. The managementTemplateStepDisplayName property
     * @param string|null $value Value to set for the managementTemplateStepDisplayName property.
    */
    public function setManagementTemplateStepDisplayName(?string $value): void {
        $this->getBackingStore()->set('managementTemplateStepDisplayName', $value);
    }

    /**
     * Sets the managementTemplateStepId property value. The managementTemplateStepId property
     * @param string|null $value Value to set for the managementTemplateStepId property.
    */
    public function setManagementTemplateStepId(?string $value): void {
        $this->getBackingStore()->set('managementTemplateStepId', $value);
    }

    /**
     * Sets the notCompliantTenantsCount property value. The notCompliantTenantsCount property
     * @param int|null $value Value to set for the notCompliantTenantsCount property.
    */
    public function setNotCompliantTenantsCount(?int $value): void {
        $this->getBackingStore()->set('notCompliantTenantsCount', $value);
    }

}
