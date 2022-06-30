<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityDetail extends Entity implements Parsable 
{
    /**
     * @var int|null $exchangeMailboxStorageUsedInBytes The storage used of the group mailbox.
    */
    private ?int $exchangeMailboxStorageUsedInBytes = null;
    
    /**
     * @var int|null $exchangeMailboxTotalItemCount The number of items in the group mailbox.
    */
    private ?int $exchangeMailboxTotalItemCount = null;
    
    /**
     * @var int|null $exchangeReceivedEmailCount The number of email that the group mailbox received.
    */
    private ?int $exchangeReceivedEmailCount = null;
    
    /**
     * @var int|null $externalMemberCount The group external member count.
    */
    private ?int $externalMemberCount = null;
    
    /**
     * @var string|null $groupDisplayName The display name of the group.
    */
    private ?string $groupDisplayName = null;
    
    /**
     * @var string|null $groupId The group id.
    */
    private ?string $groupId = null;
    
    /**
     * @var string|null $groupType The group type. Possible values are: Public or Private.
    */
    private ?string $groupType = null;
    
    /**
     * @var bool|null $isDeleted Whether this user has been deleted or soft deleted.
    */
    private ?bool $isDeleted = null;
    
    /**
     * @var Date|null $lastActivityDate The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
    */
    private ?Date $lastActivityDate = null;
    
    /**
     * @var int|null $memberCount The group member count.
    */
    private ?int $memberCount = null;
    
    /**
     * @var string|null $ownerPrincipalName The group owner principal name.
    */
    private ?string $ownerPrincipalName = null;
    
    /**
     * @var string|null $reportPeriod The number of days the report covers.
    */
    private ?string $reportPeriod = null;
    
    /**
     * @var Date|null $reportRefreshDate The latest date of the content.
    */
    private ?Date $reportRefreshDate = null;
    
    /**
     * @var int|null $sharePointActiveFileCount The number of active files in SharePoint Group site.
    */
    private ?int $sharePointActiveFileCount = null;
    
    /**
     * @var int|null $sharePointSiteStorageUsedInBytes The storage used by SharePoint Group site.
    */
    private ?int $sharePointSiteStorageUsedInBytes = null;
    
    /**
     * @var int|null $sharePointTotalFileCount The total number of files in SharePoint Group site.
    */
    private ?int $sharePointTotalFileCount = null;
    
    /**
     * @var int|null $yammerLikedMessageCount The number of messages liked in Yammer groups.
    */
    private ?int $yammerLikedMessageCount = null;
    
    /**
     * @var int|null $yammerPostedMessageCount The number of messages posted to Yammer groups.
    */
    private ?int $yammerPostedMessageCount = null;
    
    /**
     * @var int|null $yammerReadMessageCount The number of messages read in Yammer groups.
    */
    private ?int $yammerReadMessageCount = null;
    
    /**
     * Instantiates a new Office365GroupsActivityDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365GroupsActivityDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365GroupsActivityDetail {
        return new Office365GroupsActivityDetail();
    }

    /**
     * Gets the exchangeMailboxStorageUsedInBytes property value. The storage used of the group mailbox.
     * @return int|null
    */
    public function getExchangeMailboxStorageUsedInBytes(): ?int {
        return $this->exchangeMailboxStorageUsedInBytes;
    }

    /**
     * Gets the exchangeMailboxTotalItemCount property value. The number of items in the group mailbox.
     * @return int|null
    */
    public function getExchangeMailboxTotalItemCount(): ?int {
        return $this->exchangeMailboxTotalItemCount;
    }

    /**
     * Gets the exchangeReceivedEmailCount property value. The number of email that the group mailbox received.
     * @return int|null
    */
    public function getExchangeReceivedEmailCount(): ?int {
        return $this->exchangeReceivedEmailCount;
    }

    /**
     * Gets the externalMemberCount property value. The group external member count.
     * @return int|null
    */
    public function getExternalMemberCount(): ?int {
        return $this->externalMemberCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeMailboxStorageUsedInBytes' => function (ParseNode $n) use ($o) { $o->setExchangeMailboxStorageUsedInBytes($n->getIntegerValue()); },
            'exchangeMailboxTotalItemCount' => function (ParseNode $n) use ($o) { $o->setExchangeMailboxTotalItemCount($n->getIntegerValue()); },
            'exchangeReceivedEmailCount' => function (ParseNode $n) use ($o) { $o->setExchangeReceivedEmailCount($n->getIntegerValue()); },
            'externalMemberCount' => function (ParseNode $n) use ($o) { $o->setExternalMemberCount($n->getIntegerValue()); },
            'groupDisplayName' => function (ParseNode $n) use ($o) { $o->setGroupDisplayName($n->getStringValue()); },
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
            'groupType' => function (ParseNode $n) use ($o) { $o->setGroupType($n->getStringValue()); },
            'isDeleted' => function (ParseNode $n) use ($o) { $o->setIsDeleted($n->getBooleanValue()); },
            'lastActivityDate' => function (ParseNode $n) use ($o) { $o->setLastActivityDate($n->getDateValue()); },
            'memberCount' => function (ParseNode $n) use ($o) { $o->setMemberCount($n->getIntegerValue()); },
            'ownerPrincipalName' => function (ParseNode $n) use ($o) { $o->setOwnerPrincipalName($n->getStringValue()); },
            'reportPeriod' => function (ParseNode $n) use ($o) { $o->setReportPeriod($n->getStringValue()); },
            'reportRefreshDate' => function (ParseNode $n) use ($o) { $o->setReportRefreshDate($n->getDateValue()); },
            'sharePointActiveFileCount' => function (ParseNode $n) use ($o) { $o->setSharePointActiveFileCount($n->getIntegerValue()); },
            'sharePointSiteStorageUsedInBytes' => function (ParseNode $n) use ($o) { $o->setSharePointSiteStorageUsedInBytes($n->getIntegerValue()); },
            'sharePointTotalFileCount' => function (ParseNode $n) use ($o) { $o->setSharePointTotalFileCount($n->getIntegerValue()); },
            'yammerLikedMessageCount' => function (ParseNode $n) use ($o) { $o->setYammerLikedMessageCount($n->getIntegerValue()); },
            'yammerPostedMessageCount' => function (ParseNode $n) use ($o) { $o->setYammerPostedMessageCount($n->getIntegerValue()); },
            'yammerReadMessageCount' => function (ParseNode $n) use ($o) { $o->setYammerReadMessageCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the groupDisplayName property value. The display name of the group.
     * @return string|null
    */
    public function getGroupDisplayName(): ?string {
        return $this->groupDisplayName;
    }

    /**
     * Gets the groupId property value. The group id.
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Gets the groupType property value. The group type. Possible values are: Public or Private.
     * @return string|null
    */
    public function getGroupType(): ?string {
        return $this->groupType;
    }

    /**
     * Gets the isDeleted property value. Whether this user has been deleted or soft deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        return $this->isDeleted;
    }

    /**
     * Gets the lastActivityDate property value. The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
     * @return Date|null
    */
    public function getLastActivityDate(): ?Date {
        return $this->lastActivityDate;
    }

    /**
     * Gets the memberCount property value. The group member count.
     * @return int|null
    */
    public function getMemberCount(): ?int {
        return $this->memberCount;
    }

    /**
     * Gets the ownerPrincipalName property value. The group owner principal name.
     * @return string|null
    */
    public function getOwnerPrincipalName(): ?string {
        return $this->ownerPrincipalName;
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
     * Gets the sharePointActiveFileCount property value. The number of active files in SharePoint Group site.
     * @return int|null
    */
    public function getSharePointActiveFileCount(): ?int {
        return $this->sharePointActiveFileCount;
    }

    /**
     * Gets the sharePointSiteStorageUsedInBytes property value. The storage used by SharePoint Group site.
     * @return int|null
    */
    public function getSharePointSiteStorageUsedInBytes(): ?int {
        return $this->sharePointSiteStorageUsedInBytes;
    }

    /**
     * Gets the sharePointTotalFileCount property value. The total number of files in SharePoint Group site.
     * @return int|null
    */
    public function getSharePointTotalFileCount(): ?int {
        return $this->sharePointTotalFileCount;
    }

    /**
     * Gets the yammerLikedMessageCount property value. The number of messages liked in Yammer groups.
     * @return int|null
    */
    public function getYammerLikedMessageCount(): ?int {
        return $this->yammerLikedMessageCount;
    }

    /**
     * Gets the yammerPostedMessageCount property value. The number of messages posted to Yammer groups.
     * @return int|null
    */
    public function getYammerPostedMessageCount(): ?int {
        return $this->yammerPostedMessageCount;
    }

    /**
     * Gets the yammerReadMessageCount property value. The number of messages read in Yammer groups.
     * @return int|null
    */
    public function getYammerReadMessageCount(): ?int {
        return $this->yammerReadMessageCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchangeMailboxStorageUsedInBytes', $this->exchangeMailboxStorageUsedInBytes);
        $writer->writeIntegerValue('exchangeMailboxTotalItemCount', $this->exchangeMailboxTotalItemCount);
        $writer->writeIntegerValue('exchangeReceivedEmailCount', $this->exchangeReceivedEmailCount);
        $writer->writeIntegerValue('externalMemberCount', $this->externalMemberCount);
        $writer->writeStringValue('groupDisplayName', $this->groupDisplayName);
        $writer->writeStringValue('groupId', $this->groupId);
        $writer->writeStringValue('groupType', $this->groupType);
        $writer->writeBooleanValue('isDeleted', $this->isDeleted);
        $writer->writeDateValue('lastActivityDate', $this->lastActivityDate);
        $writer->writeIntegerValue('memberCount', $this->memberCount);
        $writer->writeStringValue('ownerPrincipalName', $this->ownerPrincipalName);
        $writer->writeStringValue('reportPeriod', $this->reportPeriod);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeIntegerValue('sharePointActiveFileCount', $this->sharePointActiveFileCount);
        $writer->writeIntegerValue('sharePointSiteStorageUsedInBytes', $this->sharePointSiteStorageUsedInBytes);
        $writer->writeIntegerValue('sharePointTotalFileCount', $this->sharePointTotalFileCount);
        $writer->writeIntegerValue('yammerLikedMessageCount', $this->yammerLikedMessageCount);
        $writer->writeIntegerValue('yammerPostedMessageCount', $this->yammerPostedMessageCount);
        $writer->writeIntegerValue('yammerReadMessageCount', $this->yammerReadMessageCount);
    }

    /**
     * Sets the exchangeMailboxStorageUsedInBytes property value. The storage used of the group mailbox.
     *  @param int|null $value Value to set for the exchangeMailboxStorageUsedInBytes property.
    */
    public function setExchangeMailboxStorageUsedInBytes(?int $value ): void {
        $this->exchangeMailboxStorageUsedInBytes = $value;
    }

    /**
     * Sets the exchangeMailboxTotalItemCount property value. The number of items in the group mailbox.
     *  @param int|null $value Value to set for the exchangeMailboxTotalItemCount property.
    */
    public function setExchangeMailboxTotalItemCount(?int $value ): void {
        $this->exchangeMailboxTotalItemCount = $value;
    }

    /**
     * Sets the exchangeReceivedEmailCount property value. The number of email that the group mailbox received.
     *  @param int|null $value Value to set for the exchangeReceivedEmailCount property.
    */
    public function setExchangeReceivedEmailCount(?int $value ): void {
        $this->exchangeReceivedEmailCount = $value;
    }

    /**
     * Sets the externalMemberCount property value. The group external member count.
     *  @param int|null $value Value to set for the externalMemberCount property.
    */
    public function setExternalMemberCount(?int $value ): void {
        $this->externalMemberCount = $value;
    }

    /**
     * Sets the groupDisplayName property value. The display name of the group.
     *  @param string|null $value Value to set for the groupDisplayName property.
    */
    public function setGroupDisplayName(?string $value ): void {
        $this->groupDisplayName = $value;
    }

    /**
     * Sets the groupId property value. The group id.
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

    /**
     * Sets the groupType property value. The group type. Possible values are: Public or Private.
     *  @param string|null $value Value to set for the groupType property.
    */
    public function setGroupType(?string $value ): void {
        $this->groupType = $value;
    }

    /**
     * Sets the isDeleted property value. Whether this user has been deleted or soft deleted.
     *  @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value ): void {
        $this->isDeleted = $value;
    }

    /**
     * Sets the lastActivityDate property value. The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
     *  @param Date|null $value Value to set for the lastActivityDate property.
    */
    public function setLastActivityDate(?Date $value ): void {
        $this->lastActivityDate = $value;
    }

    /**
     * Sets the memberCount property value. The group member count.
     *  @param int|null $value Value to set for the memberCount property.
    */
    public function setMemberCount(?int $value ): void {
        $this->memberCount = $value;
    }

    /**
     * Sets the ownerPrincipalName property value. The group owner principal name.
     *  @param string|null $value Value to set for the ownerPrincipalName property.
    */
    public function setOwnerPrincipalName(?string $value ): void {
        $this->ownerPrincipalName = $value;
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
     * Sets the sharePointActiveFileCount property value. The number of active files in SharePoint Group site.
     *  @param int|null $value Value to set for the sharePointActiveFileCount property.
    */
    public function setSharePointActiveFileCount(?int $value ): void {
        $this->sharePointActiveFileCount = $value;
    }

    /**
     * Sets the sharePointSiteStorageUsedInBytes property value. The storage used by SharePoint Group site.
     *  @param int|null $value Value to set for the sharePointSiteStorageUsedInBytes property.
    */
    public function setSharePointSiteStorageUsedInBytes(?int $value ): void {
        $this->sharePointSiteStorageUsedInBytes = $value;
    }

    /**
     * Sets the sharePointTotalFileCount property value. The total number of files in SharePoint Group site.
     *  @param int|null $value Value to set for the sharePointTotalFileCount property.
    */
    public function setSharePointTotalFileCount(?int $value ): void {
        $this->sharePointTotalFileCount = $value;
    }

    /**
     * Sets the yammerLikedMessageCount property value. The number of messages liked in Yammer groups.
     *  @param int|null $value Value to set for the yammerLikedMessageCount property.
    */
    public function setYammerLikedMessageCount(?int $value ): void {
        $this->yammerLikedMessageCount = $value;
    }

    /**
     * Sets the yammerPostedMessageCount property value. The number of messages posted to Yammer groups.
     *  @param int|null $value Value to set for the yammerPostedMessageCount property.
    */
    public function setYammerPostedMessageCount(?int $value ): void {
        $this->yammerPostedMessageCount = $value;
    }

    /**
     * Sets the yammerReadMessageCount property value. The number of messages read in Yammer groups.
     *  @param int|null $value Value to set for the yammerReadMessageCount property.
    */
    public function setYammerReadMessageCount(?int $value ): void {
        $this->yammerReadMessageCount = $value;
    }

}
