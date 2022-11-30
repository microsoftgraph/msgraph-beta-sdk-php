<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityDetail extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('exchangeMailboxStorageUsedInBytes');
    }

    /**
     * Gets the exchangeMailboxTotalItemCount property value. The number of items in the group mailbox.
     * @return int|null
    */
    public function getExchangeMailboxTotalItemCount(): ?int {
        return $this->getBackingStore()->get('exchangeMailboxTotalItemCount');
    }

    /**
     * Gets the exchangeReceivedEmailCount property value. The number of email that the group mailbox received.
     * @return int|null
    */
    public function getExchangeReceivedEmailCount(): ?int {
        return $this->getBackingStore()->get('exchangeReceivedEmailCount');
    }

    /**
     * Gets the externalMemberCount property value. The group external member count.
     * @return int|null
    */
    public function getExternalMemberCount(): ?int {
        return $this->getBackingStore()->get('externalMemberCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeMailboxStorageUsedInBytes' => fn(ParseNode $n) => $o->setExchangeMailboxStorageUsedInBytes($n->getIntegerValue()),
            'exchangeMailboxTotalItemCount' => fn(ParseNode $n) => $o->setExchangeMailboxTotalItemCount($n->getIntegerValue()),
            'exchangeReceivedEmailCount' => fn(ParseNode $n) => $o->setExchangeReceivedEmailCount($n->getIntegerValue()),
            'externalMemberCount' => fn(ParseNode $n) => $o->setExternalMemberCount($n->getIntegerValue()),
            'groupDisplayName' => fn(ParseNode $n) => $o->setGroupDisplayName($n->getStringValue()),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'groupType' => fn(ParseNode $n) => $o->setGroupType($n->getStringValue()),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'lastActivityDate' => fn(ParseNode $n) => $o->setLastActivityDate($n->getDateValue()),
            'memberCount' => fn(ParseNode $n) => $o->setMemberCount($n->getIntegerValue()),
            'ownerPrincipalName' => fn(ParseNode $n) => $o->setOwnerPrincipalName($n->getStringValue()),
            'reportPeriod' => fn(ParseNode $n) => $o->setReportPeriod($n->getStringValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'sharePointActiveFileCount' => fn(ParseNode $n) => $o->setSharePointActiveFileCount($n->getIntegerValue()),
            'sharePointSiteStorageUsedInBytes' => fn(ParseNode $n) => $o->setSharePointSiteStorageUsedInBytes($n->getIntegerValue()),
            'sharePointTotalFileCount' => fn(ParseNode $n) => $o->setSharePointTotalFileCount($n->getIntegerValue()),
            'yammerLikedMessageCount' => fn(ParseNode $n) => $o->setYammerLikedMessageCount($n->getIntegerValue()),
            'yammerPostedMessageCount' => fn(ParseNode $n) => $o->setYammerPostedMessageCount($n->getIntegerValue()),
            'yammerReadMessageCount' => fn(ParseNode $n) => $o->setYammerReadMessageCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groupDisplayName property value. The display name of the group.
     * @return string|null
    */
    public function getGroupDisplayName(): ?string {
        return $this->getBackingStore()->get('groupDisplayName');
    }

    /**
     * Gets the groupId property value. The group id.
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->getBackingStore()->get('groupId');
    }

    /**
     * Gets the groupType property value. The group type. Possible values are: Public or Private.
     * @return string|null
    */
    public function getGroupType(): ?string {
        return $this->getBackingStore()->get('groupType');
    }

    /**
     * Gets the isDeleted property value. Whether this user has been deleted or soft deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        return $this->getBackingStore()->get('isDeleted');
    }

    /**
     * Gets the lastActivityDate property value. The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
     * @return Date|null
    */
    public function getLastActivityDate(): ?Date {
        return $this->getBackingStore()->get('lastActivityDate');
    }

    /**
     * Gets the memberCount property value. The group member count.
     * @return int|null
    */
    public function getMemberCount(): ?int {
        return $this->getBackingStore()->get('memberCount');
    }

    /**
     * Gets the ownerPrincipalName property value. The group owner principal name.
     * @return string|null
    */
    public function getOwnerPrincipalName(): ?string {
        return $this->getBackingStore()->get('ownerPrincipalName');
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
     * Gets the sharePointActiveFileCount property value. The number of active files in SharePoint Group site.
     * @return int|null
    */
    public function getSharePointActiveFileCount(): ?int {
        return $this->getBackingStore()->get('sharePointActiveFileCount');
    }

    /**
     * Gets the sharePointSiteStorageUsedInBytes property value. The storage used by SharePoint Group site.
     * @return int|null
    */
    public function getSharePointSiteStorageUsedInBytes(): ?int {
        return $this->getBackingStore()->get('sharePointSiteStorageUsedInBytes');
    }

    /**
     * Gets the sharePointTotalFileCount property value. The total number of files in SharePoint Group site.
     * @return int|null
    */
    public function getSharePointTotalFileCount(): ?int {
        return $this->getBackingStore()->get('sharePointTotalFileCount');
    }

    /**
     * Gets the yammerLikedMessageCount property value. The number of messages liked in Yammer groups.
     * @return int|null
    */
    public function getYammerLikedMessageCount(): ?int {
        return $this->getBackingStore()->get('yammerLikedMessageCount');
    }

    /**
     * Gets the yammerPostedMessageCount property value. The number of messages posted to Yammer groups.
     * @return int|null
    */
    public function getYammerPostedMessageCount(): ?int {
        return $this->getBackingStore()->get('yammerPostedMessageCount');
    }

    /**
     * Gets the yammerReadMessageCount property value. The number of messages read in Yammer groups.
     * @return int|null
    */
    public function getYammerReadMessageCount(): ?int {
        return $this->getBackingStore()->get('yammerReadMessageCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchangeMailboxStorageUsedInBytes', $this->getExchangeMailboxStorageUsedInBytes());
        $writer->writeIntegerValue('exchangeMailboxTotalItemCount', $this->getExchangeMailboxTotalItemCount());
        $writer->writeIntegerValue('exchangeReceivedEmailCount', $this->getExchangeReceivedEmailCount());
        $writer->writeIntegerValue('externalMemberCount', $this->getExternalMemberCount());
        $writer->writeStringValue('groupDisplayName', $this->getGroupDisplayName());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('groupType', $this->getGroupType());
        $writer->writeBooleanValue('isDeleted', $this->getIsDeleted());
        $writer->writeDateValue('lastActivityDate', $this->getLastActivityDate());
        $writer->writeIntegerValue('memberCount', $this->getMemberCount());
        $writer->writeStringValue('ownerPrincipalName', $this->getOwnerPrincipalName());
        $writer->writeStringValue('reportPeriod', $this->getReportPeriod());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeIntegerValue('sharePointActiveFileCount', $this->getSharePointActiveFileCount());
        $writer->writeIntegerValue('sharePointSiteStorageUsedInBytes', $this->getSharePointSiteStorageUsedInBytes());
        $writer->writeIntegerValue('sharePointTotalFileCount', $this->getSharePointTotalFileCount());
        $writer->writeIntegerValue('yammerLikedMessageCount', $this->getYammerLikedMessageCount());
        $writer->writeIntegerValue('yammerPostedMessageCount', $this->getYammerPostedMessageCount());
        $writer->writeIntegerValue('yammerReadMessageCount', $this->getYammerReadMessageCount());
    }

    /**
     * Sets the exchangeMailboxStorageUsedInBytes property value. The storage used of the group mailbox.
     *  @param int|null $value Value to set for the exchangeMailboxStorageUsedInBytes property.
    */
    public function setExchangeMailboxStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('exchangeMailboxStorageUsedInBytes', $value);
    }

    /**
     * Sets the exchangeMailboxTotalItemCount property value. The number of items in the group mailbox.
     *  @param int|null $value Value to set for the exchangeMailboxTotalItemCount property.
    */
    public function setExchangeMailboxTotalItemCount(?int $value): void {
        $this->getBackingStore()->set('exchangeMailboxTotalItemCount', $value);
    }

    /**
     * Sets the exchangeReceivedEmailCount property value. The number of email that the group mailbox received.
     *  @param int|null $value Value to set for the exchangeReceivedEmailCount property.
    */
    public function setExchangeReceivedEmailCount(?int $value): void {
        $this->getBackingStore()->set('exchangeReceivedEmailCount', $value);
    }

    /**
     * Sets the externalMemberCount property value. The group external member count.
     *  @param int|null $value Value to set for the externalMemberCount property.
    */
    public function setExternalMemberCount(?int $value): void {
        $this->getBackingStore()->set('externalMemberCount', $value);
    }

    /**
     * Sets the groupDisplayName property value. The display name of the group.
     *  @param string|null $value Value to set for the groupDisplayName property.
    */
    public function setGroupDisplayName(?string $value): void {
        $this->getBackingStore()->set('groupDisplayName', $value);
    }

    /**
     * Sets the groupId property value. The group id.
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the groupType property value. The group type. Possible values are: Public or Private.
     *  @param string|null $value Value to set for the groupType property.
    */
    public function setGroupType(?string $value): void {
        $this->getBackingStore()->set('groupType', $value);
    }

    /**
     * Sets the isDeleted property value. Whether this user has been deleted or soft deleted.
     *  @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value): void {
        $this->getBackingStore()->set('isDeleted', $value);
    }

    /**
     * Sets the lastActivityDate property value. The last activity date for the following scenarios:  group mailbox received email; user viewed, edited, shared, or synced files in SharePoint document library; user viewed SharePoint pages; user posted, read, or liked messages in Yammer groups.
     *  @param Date|null $value Value to set for the lastActivityDate property.
    */
    public function setLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('lastActivityDate', $value);
    }

    /**
     * Sets the memberCount property value. The group member count.
     *  @param int|null $value Value to set for the memberCount property.
    */
    public function setMemberCount(?int $value): void {
        $this->getBackingStore()->set('memberCount', $value);
    }

    /**
     * Sets the ownerPrincipalName property value. The group owner principal name.
     *  @param string|null $value Value to set for the ownerPrincipalName property.
    */
    public function setOwnerPrincipalName(?string $value): void {
        $this->getBackingStore()->set('ownerPrincipalName', $value);
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     *  @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value): void {
        $this->getBackingStore()->set('reportPeriod', $value);
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     *  @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value): void {
        $this->getBackingStore()->set('reportRefreshDate', $value);
    }

    /**
     * Sets the sharePointActiveFileCount property value. The number of active files in SharePoint Group site.
     *  @param int|null $value Value to set for the sharePointActiveFileCount property.
    */
    public function setSharePointActiveFileCount(?int $value): void {
        $this->getBackingStore()->set('sharePointActiveFileCount', $value);
    }

    /**
     * Sets the sharePointSiteStorageUsedInBytes property value. The storage used by SharePoint Group site.
     *  @param int|null $value Value to set for the sharePointSiteStorageUsedInBytes property.
    */
    public function setSharePointSiteStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('sharePointSiteStorageUsedInBytes', $value);
    }

    /**
     * Sets the sharePointTotalFileCount property value. The total number of files in SharePoint Group site.
     *  @param int|null $value Value to set for the sharePointTotalFileCount property.
    */
    public function setSharePointTotalFileCount(?int $value): void {
        $this->getBackingStore()->set('sharePointTotalFileCount', $value);
    }

    /**
     * Sets the yammerLikedMessageCount property value. The number of messages liked in Yammer groups.
     *  @param int|null $value Value to set for the yammerLikedMessageCount property.
    */
    public function setYammerLikedMessageCount(?int $value): void {
        $this->getBackingStore()->set('yammerLikedMessageCount', $value);
    }

    /**
     * Sets the yammerPostedMessageCount property value. The number of messages posted to Yammer groups.
     *  @param int|null $value Value to set for the yammerPostedMessageCount property.
    */
    public function setYammerPostedMessageCount(?int $value): void {
        $this->getBackingStore()->set('yammerPostedMessageCount', $value);
    }

    /**
     * Sets the yammerReadMessageCount property value. The number of messages read in Yammer groups.
     *  @param int|null $value Value to set for the yammerReadMessageCount property.
    */
    public function setYammerReadMessageCount(?int $value): void {
        $this->getBackingStore()->set('yammerReadMessageCount', $value);
    }

}
