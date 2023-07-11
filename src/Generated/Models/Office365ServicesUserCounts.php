<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365ServicesUserCounts extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new office365ServicesUserCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365ServicesUserCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365ServicesUserCounts {
        return new Office365ServicesUserCounts();
    }

    /**
     * Gets the exchangeActive property value. The number of active users on Exchange. Any user who can read and send email is considered an active user.
     * @return int|null
    */
    public function getExchangeActive(): ?int {
        $val = $this->getBackingStore()->get('exchangeActive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeActive'");
    }

    /**
     * Gets the exchangeInactive property value. The number of inactive users on Exchange.
     * @return int|null
    */
    public function getExchangeInactive(): ?int {
        $val = $this->getBackingStore()->get('exchangeInactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeInactive'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeActive' => fn(ParseNode $n) => $o->setExchangeActive($n->getIntegerValue()),
            'exchangeInactive' => fn(ParseNode $n) => $o->setExchangeInactive($n->getIntegerValue()),
            'office365Active' => fn(ParseNode $n) => $o->setOffice365Active($n->getIntegerValue()),
            'office365Inactive' => fn(ParseNode $n) => $o->setOffice365Inactive($n->getIntegerValue()),
            'oneDriveActive' => fn(ParseNode $n) => $o->setOneDriveActive($n->getIntegerValue()),
            'oneDriveInactive' => fn(ParseNode $n) => $o->setOneDriveInactive($n->getIntegerValue()),
            'reportPeriod' => fn(ParseNode $n) => $o->setReportPeriod($n->getStringValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'sharePointActive' => fn(ParseNode $n) => $o->setSharePointActive($n->getIntegerValue()),
            'sharePointInactive' => fn(ParseNode $n) => $o->setSharePointInactive($n->getIntegerValue()),
            'skypeForBusinessActive' => fn(ParseNode $n) => $o->setSkypeForBusinessActive($n->getIntegerValue()),
            'skypeForBusinessInactive' => fn(ParseNode $n) => $o->setSkypeForBusinessInactive($n->getIntegerValue()),
            'teamsActive' => fn(ParseNode $n) => $o->setTeamsActive($n->getIntegerValue()),
            'teamsInactive' => fn(ParseNode $n) => $o->setTeamsInactive($n->getIntegerValue()),
            'yammerActive' => fn(ParseNode $n) => $o->setYammerActive($n->getIntegerValue()),
            'yammerInactive' => fn(ParseNode $n) => $o->setYammerInactive($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the office365Active property value. The number of active users on Microsoft 365.
     * @return int|null
    */
    public function getOffice365Active(): ?int {
        $val = $this->getBackingStore()->get('office365Active');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'office365Active'");
    }

    /**
     * Gets the office365Inactive property value. The number of inactive users on Microsoft 365.
     * @return int|null
    */
    public function getOffice365Inactive(): ?int {
        $val = $this->getBackingStore()->get('office365Inactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'office365Inactive'");
    }

    /**
     * Gets the oneDriveActive property value. The number of active users on OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     * @return int|null
    */
    public function getOneDriveActive(): ?int {
        $val = $this->getBackingStore()->get('oneDriveActive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveActive'");
    }

    /**
     * Gets the oneDriveInactive property value. The number of inactive users on OneDrive.
     * @return int|null
    */
    public function getOneDriveInactive(): ?int {
        $val = $this->getBackingStore()->get('oneDriveInactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveInactive'");
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        $val = $this->getBackingStore()->get('reportPeriod');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportPeriod'");
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        $val = $this->getBackingStore()->get('reportRefreshDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportRefreshDate'");
    }

    /**
     * Gets the sharePointActive property value. The number of active users on SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     * @return int|null
    */
    public function getSharePointActive(): ?int {
        $val = $this->getBackingStore()->get('sharePointActive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointActive'");
    }

    /**
     * Gets the sharePointInactive property value. The number of inactive users on SharePoint.
     * @return int|null
    */
    public function getSharePointInactive(): ?int {
        $val = $this->getBackingStore()->get('sharePointInactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointInactive'");
    }

    /**
     * Gets the skypeForBusinessActive property value. The number of active users on Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     * @return int|null
    */
    public function getSkypeForBusinessActive(): ?int {
        $val = $this->getBackingStore()->get('skypeForBusinessActive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skypeForBusinessActive'");
    }

    /**
     * Gets the skypeForBusinessInactive property value. The number of inactive users on Skype For Business.
     * @return int|null
    */
    public function getSkypeForBusinessInactive(): ?int {
        $val = $this->getBackingStore()->get('skypeForBusinessInactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skypeForBusinessInactive'");
    }

    /**
     * Gets the teamsActive property value. The number of active users on Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     * @return int|null
    */
    public function getTeamsActive(): ?int {
        $val = $this->getBackingStore()->get('teamsActive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsActive'");
    }

    /**
     * Gets the teamsInactive property value. The number of inactive users on Microsoft Teams.
     * @return int|null
    */
    public function getTeamsInactive(): ?int {
        $val = $this->getBackingStore()->get('teamsInactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsInactive'");
    }

    /**
     * Gets the yammerActive property value. The number of active users on Yammer. Any user who can post, read, or like messages is considered an active user.
     * @return int|null
    */
    public function getYammerActive(): ?int {
        $val = $this->getBackingStore()->get('yammerActive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yammerActive'");
    }

    /**
     * Gets the yammerInactive property value. The number of inactive users on Yammer.
     * @return int|null
    */
    public function getYammerInactive(): ?int {
        $val = $this->getBackingStore()->get('yammerInactive');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yammerInactive'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchangeActive', $this->getExchangeActive());
        $writer->writeIntegerValue('exchangeInactive', $this->getExchangeInactive());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('office365Active', $this->getOffice365Active());
        $writer->writeIntegerValue('office365Inactive', $this->getOffice365Inactive());
        $writer->writeIntegerValue('oneDriveActive', $this->getOneDriveActive());
        $writer->writeIntegerValue('oneDriveInactive', $this->getOneDriveInactive());
        $writer->writeStringValue('reportPeriod', $this->getReportPeriod());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeIntegerValue('sharePointActive', $this->getSharePointActive());
        $writer->writeIntegerValue('sharePointInactive', $this->getSharePointInactive());
        $writer->writeIntegerValue('skypeForBusinessActive', $this->getSkypeForBusinessActive());
        $writer->writeIntegerValue('skypeForBusinessInactive', $this->getSkypeForBusinessInactive());
        $writer->writeIntegerValue('teamsActive', $this->getTeamsActive());
        $writer->writeIntegerValue('teamsInactive', $this->getTeamsInactive());
        $writer->writeIntegerValue('yammerActive', $this->getYammerActive());
        $writer->writeIntegerValue('yammerInactive', $this->getYammerInactive());
    }

    /**
     * Sets the exchangeActive property value. The number of active users on Exchange. Any user who can read and send email is considered an active user.
     * @param int|null $value Value to set for the exchangeActive property.
    */
    public function setExchangeActive(?int $value): void {
        $this->getBackingStore()->set('exchangeActive', $value);
    }

    /**
     * Sets the exchangeInactive property value. The number of inactive users on Exchange.
     * @param int|null $value Value to set for the exchangeInactive property.
    */
    public function setExchangeInactive(?int $value): void {
        $this->getBackingStore()->set('exchangeInactive', $value);
    }

    /**
     * Sets the office365Active property value. The number of active users on Microsoft 365.
     * @param int|null $value Value to set for the office365Active property.
    */
    public function setOffice365Active(?int $value): void {
        $this->getBackingStore()->set('office365Active', $value);
    }

    /**
     * Sets the office365Inactive property value. The number of inactive users on Microsoft 365.
     * @param int|null $value Value to set for the office365Inactive property.
    */
    public function setOffice365Inactive(?int $value): void {
        $this->getBackingStore()->set('office365Inactive', $value);
    }

    /**
     * Sets the oneDriveActive property value. The number of active users on OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     * @param int|null $value Value to set for the oneDriveActive property.
    */
    public function setOneDriveActive(?int $value): void {
        $this->getBackingStore()->set('oneDriveActive', $value);
    }

    /**
     * Sets the oneDriveInactive property value. The number of inactive users on OneDrive.
     * @param int|null $value Value to set for the oneDriveInactive property.
    */
    public function setOneDriveInactive(?int $value): void {
        $this->getBackingStore()->set('oneDriveInactive', $value);
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
     * Sets the sharePointActive property value. The number of active users on SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     * @param int|null $value Value to set for the sharePointActive property.
    */
    public function setSharePointActive(?int $value): void {
        $this->getBackingStore()->set('sharePointActive', $value);
    }

    /**
     * Sets the sharePointInactive property value. The number of inactive users on SharePoint.
     * @param int|null $value Value to set for the sharePointInactive property.
    */
    public function setSharePointInactive(?int $value): void {
        $this->getBackingStore()->set('sharePointInactive', $value);
    }

    /**
     * Sets the skypeForBusinessActive property value. The number of active users on Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     * @param int|null $value Value to set for the skypeForBusinessActive property.
    */
    public function setSkypeForBusinessActive(?int $value): void {
        $this->getBackingStore()->set('skypeForBusinessActive', $value);
    }

    /**
     * Sets the skypeForBusinessInactive property value. The number of inactive users on Skype For Business.
     * @param int|null $value Value to set for the skypeForBusinessInactive property.
    */
    public function setSkypeForBusinessInactive(?int $value): void {
        $this->getBackingStore()->set('skypeForBusinessInactive', $value);
    }

    /**
     * Sets the teamsActive property value. The number of active users on Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     * @param int|null $value Value to set for the teamsActive property.
    */
    public function setTeamsActive(?int $value): void {
        $this->getBackingStore()->set('teamsActive', $value);
    }

    /**
     * Sets the teamsInactive property value. The number of inactive users on Microsoft Teams.
     * @param int|null $value Value to set for the teamsInactive property.
    */
    public function setTeamsInactive(?int $value): void {
        $this->getBackingStore()->set('teamsInactive', $value);
    }

    /**
     * Sets the yammerActive property value. The number of active users on Yammer. Any user who can post, read, or like messages is considered an active user.
     * @param int|null $value Value to set for the yammerActive property.
    */
    public function setYammerActive(?int $value): void {
        $this->getBackingStore()->set('yammerActive', $value);
    }

    /**
     * Sets the yammerInactive property value. The number of inactive users on Yammer.
     * @param int|null $value Value to set for the yammerInactive property.
    */
    public function setYammerInactive(?int $value): void {
        $this->getBackingStore()->set('yammerInactive', $value);
    }

}
