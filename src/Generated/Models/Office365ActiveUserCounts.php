<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365ActiveUserCounts extends Entity implements Parsable 
{
    /**
     * Instantiates a new Office365ActiveUserCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365ActiveUserCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365ActiveUserCounts {
        return new Office365ActiveUserCounts();
    }

    /**
     * Gets the exchange property value. The number of active users in Exchange. Any user who can read and send email is considered an active user.
     * @return int|null
    */
    public function getExchange(): ?int {
        return $this->getBackingStore()->get('exchange');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchange' => fn(ParseNode $n) => $o->setExchange($n->getIntegerValue()),
            'office365' => fn(ParseNode $n) => $o->setOffice365($n->getIntegerValue()),
            'oneDrive' => fn(ParseNode $n) => $o->setOneDrive($n->getIntegerValue()),
            'reportDate' => fn(ParseNode $n) => $o->setReportDate($n->getDateValue()),
            'reportPeriod' => fn(ParseNode $n) => $o->setReportPeriod($n->getStringValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'sharePoint' => fn(ParseNode $n) => $o->setSharePoint($n->getIntegerValue()),
            'skypeForBusiness' => fn(ParseNode $n) => $o->setSkypeForBusiness($n->getIntegerValue()),
            'teams' => fn(ParseNode $n) => $o->setTeams($n->getIntegerValue()),
            'yammer' => fn(ParseNode $n) => $o->setYammer($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the office365 property value. The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
     * @return int|null
    */
    public function getOffice365(): ?int {
        return $this->getBackingStore()->get('office365');
    }

    /**
     * Gets the oneDrive property value. The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     * @return int|null
    */
    public function getOneDrive(): ?int {
        return $this->getBackingStore()->get('oneDrive');
    }

    /**
     * Gets the reportDate property value. The date on which a number of users were active.
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
     * Gets the sharePoint property value. The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     * @return int|null
    */
    public function getSharePoint(): ?int {
        return $this->getBackingStore()->get('sharePoint');
    }

    /**
     * Gets the skypeForBusiness property value. The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     * @return int|null
    */
    public function getSkypeForBusiness(): ?int {
        return $this->getBackingStore()->get('skypeForBusiness');
    }

    /**
     * Gets the teams property value. The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     * @return int|null
    */
    public function getTeams(): ?int {
        return $this->getBackingStore()->get('teams');
    }

    /**
     * Gets the yammer property value. The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
     * @return int|null
    */
    public function getYammer(): ?int {
        return $this->getBackingStore()->get('yammer');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchange', $this->getExchange());
        $writer->writeIntegerValue('office365', $this->getOffice365());
        $writer->writeIntegerValue('oneDrive', $this->getOneDrive());
        $writer->writeDateValue('reportDate', $this->getReportDate());
        $writer->writeStringValue('reportPeriod', $this->getReportPeriod());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeIntegerValue('sharePoint', $this->getSharePoint());
        $writer->writeIntegerValue('skypeForBusiness', $this->getSkypeForBusiness());
        $writer->writeIntegerValue('teams', $this->getTeams());
        $writer->writeIntegerValue('yammer', $this->getYammer());
    }

    /**
     * Sets the exchange property value. The number of active users in Exchange. Any user who can read and send email is considered an active user.
     *  @param int|null $value Value to set for the exchange property.
    */
    public function setExchange(?int $value): void {
        $this->getBackingStore()->set('exchange', $value);
    }

    /**
     * Sets the office365 property value. The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
     *  @param int|null $value Value to set for the office365 property.
    */
    public function setOffice365(?int $value): void {
        $this->getBackingStore()->set('office365', $value);
    }

    /**
     * Sets the oneDrive property value. The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     *  @param int|null $value Value to set for the oneDrive property.
    */
    public function setOneDrive(?int $value): void {
        $this->getBackingStore()->set('oneDrive', $value);
    }

    /**
     * Sets the reportDate property value. The date on which a number of users were active.
     *  @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value): void {
        $this->getBackingStore()->set('reportDate', $value);
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
     * Sets the sharePoint property value. The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     *  @param int|null $value Value to set for the sharePoint property.
    */
    public function setSharePoint(?int $value): void {
        $this->getBackingStore()->set('sharePoint', $value);
    }

    /**
     * Sets the skypeForBusiness property value. The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     *  @param int|null $value Value to set for the skypeForBusiness property.
    */
    public function setSkypeForBusiness(?int $value): void {
        $this->getBackingStore()->set('skypeForBusiness', $value);
    }

    /**
     * Sets the teams property value. The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     *  @param int|null $value Value to set for the teams property.
    */
    public function setTeams(?int $value): void {
        $this->getBackingStore()->set('teams', $value);
    }

    /**
     * Sets the yammer property value. The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
     *  @param int|null $value Value to set for the yammer property.
    */
    public function setYammer(?int $value): void {
        $this->getBackingStore()->set('yammer', $value);
    }

}
