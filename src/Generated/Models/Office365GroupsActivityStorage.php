<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityStorage extends Entity implements Parsable 
{
    /**
     * Instantiates a new Office365GroupsActivityStorage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365GroupsActivityStorage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365GroupsActivityStorage {
        return new Office365GroupsActivityStorage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mailboxStorageUsedInBytes' => fn(ParseNode $n) => $o->setMailboxStorageUsedInBytes($n->getIntegerValue()),
            'reportDate' => fn(ParseNode $n) => $o->setReportDate($n->getDateValue()),
            'reportPeriod' => fn(ParseNode $n) => $o->setReportPeriod($n->getStringValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'siteStorageUsedInBytes' => fn(ParseNode $n) => $o->setSiteStorageUsedInBytes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the mailboxStorageUsedInBytes property value. The storage used in group mailbox.
     * @return int|null
    */
    public function getMailboxStorageUsedInBytes(): ?int {
        return $this->getBackingStore()->get('mailboxStorageUsedInBytes');
    }

    /**
     * Gets the reportDate property value. The snapshot date for Exchange and SharePoint used storage.
     * @return Date|null
    */
    public function getReportDate(): ?Date {
        return $this->getBackingStore()->get('reportDate');
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        return $this->getBackingStore()->get('reportPeriod');
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        return $this->getBackingStore()->get('reportRefreshDate');
    }

    /**
     * Gets the siteStorageUsedInBytes property value. The storage used in SharePoint document library.
     * @return int|null
    */
    public function getSiteStorageUsedInBytes(): ?int {
        return $this->getBackingStore()->get('siteStorageUsedInBytes');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('mailboxStorageUsedInBytes', $this->getMailboxStorageUsedInBytes());
        $writer->writeDateValue('reportDate', $this->getReportDate());
        $writer->writeStringValue('reportPeriod', $this->getReportPeriod());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeIntegerValue('siteStorageUsedInBytes', $this->getSiteStorageUsedInBytes());
    }

    /**
     * Sets the mailboxStorageUsedInBytes property value. The storage used in group mailbox.
     * @param int|null $value Value to set for the mailboxStorageUsedInBytes property.
    */
    public function setMailboxStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('mailboxStorageUsedInBytes', $value);
    }

    /**
     * Sets the reportDate property value. The snapshot date for Exchange and SharePoint used storage.
     * @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value): void {
        $this->getBackingStore()->set('reportDate', $value);
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     * @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value): void {
        $this->getBackingStore()->set('reportPeriod', $value);
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     * @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value): void {
        $this->getBackingStore()->set('reportRefreshDate', $value);
    }

    /**
     * Sets the siteStorageUsedInBytes property value. The storage used in SharePoint document library.
     * @param int|null $value Value to set for the siteStorageUsedInBytes property.
    */
    public function setSiteStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('siteStorageUsedInBytes', $value);
    }

}
