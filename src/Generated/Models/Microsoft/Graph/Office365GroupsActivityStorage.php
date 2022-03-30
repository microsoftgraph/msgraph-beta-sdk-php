<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityStorage extends Entity 
{
    /** @var int|null $mailboxStorageUsedInBytes The storage used in group mailbox. */
    private ?int $mailboxStorageUsedInBytes = null;
    
    /** @var Date|null $reportDate The snapshot date for Exchange and SharePoint used storage. */
    private ?Date $reportDate = null;
    
    /** @var string|null $reportPeriod The number of days the report covers. */
    private ?string $reportPeriod = null;
    
    /** @var Date|null $reportRefreshDate The latest date of the content. */
    private ?Date $reportRefreshDate = null;
    
    /** @var int|null $siteStorageUsedInBytes The storage used in SharePoint document library. */
    private ?int $siteStorageUsedInBytes = null;
    
    /**
     * Instantiates a new office365GroupsActivityStorage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365GroupsActivityStorage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Office365GroupsActivityStorage {
        return new Office365GroupsActivityStorage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'mailboxStorageUsedInBytes' => function (self $o, ParseNode $n) { $o->setMailboxStorageUsedInBytes($n->getIntegerValue()); },
            'reportDate' => function (self $o, ParseNode $n) { $o->setReportDate($n->getDateValue()); },
            'reportPeriod' => function (self $o, ParseNode $n) { $o->setReportPeriod($n->getStringValue()); },
            'reportRefreshDate' => function (self $o, ParseNode $n) { $o->setReportRefreshDate($n->getDateValue()); },
            'siteStorageUsedInBytes' => function (self $o, ParseNode $n) { $o->setSiteStorageUsedInBytes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the mailboxStorageUsedInBytes property value. The storage used in group mailbox.
     * @return int|null
    */
    public function getMailboxStorageUsedInBytes(): ?int {
        return $this->mailboxStorageUsedInBytes;
    }

    /**
     * Gets the reportDate property value. The snapshot date for Exchange and SharePoint used storage.
     * @return Date|null
    */
    public function getReportDate(): ?Date {
        return $this->reportDate;
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        return $this->reportPeriod;
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        return $this->reportRefreshDate;
    }

    /**
     * Gets the siteStorageUsedInBytes property value. The storage used in SharePoint document library.
     * @return int|null
    */
    public function getSiteStorageUsedInBytes(): ?int {
        return $this->siteStorageUsedInBytes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('mailboxStorageUsedInBytes', $this->mailboxStorageUsedInBytes);
        $writer->writeDateValue('reportDate', $this->reportDate);
        $writer->writeStringValue('reportPeriod', $this->reportPeriod);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeIntegerValue('siteStorageUsedInBytes', $this->siteStorageUsedInBytes);
    }

    /**
     * Sets the mailboxStorageUsedInBytes property value. The storage used in group mailbox.
     *  @param int|null $value Value to set for the mailboxStorageUsedInBytes property.
    */
    public function setMailboxStorageUsedInBytes(?int $value ): void {
        $this->mailboxStorageUsedInBytes = $value;
    }

    /**
     * Sets the reportDate property value. The snapshot date for Exchange and SharePoint used storage.
     *  @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value ): void {
        $this->reportDate = $value;
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     *  @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value ): void {
        $this->reportPeriod = $value;
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     *  @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value ): void {
        $this->reportRefreshDate = $value;
    }

    /**
     * Sets the siteStorageUsedInBytes property value. The storage used in SharePoint document library.
     *  @param int|null $value Value to set for the siteStorageUsedInBytes property.
    */
    public function setSiteStorageUsedInBytes(?int $value ): void {
        $this->siteStorageUsedInBytes = $value;
    }

}
