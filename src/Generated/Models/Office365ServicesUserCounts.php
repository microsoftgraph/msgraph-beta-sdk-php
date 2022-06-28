<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365ServicesUserCounts extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $exchangeActive The number of active users on Exchange. Any user who can read and send email is considered an active user.
    */
    private ?int $exchangeActive = null;
    
    /**
     * @var int|null $exchangeInactive The number of inactive users on Exchange.
    */
    private ?int $exchangeInactive = null;
    
    /**
     * @var int|null $office365Active The number of active users on Microsoft 365.
    */
    private ?int $office365Active = null;
    
    /**
     * @var int|null $office365Inactive The number of inactive users on Microsoft 365.
    */
    private ?int $office365Inactive = null;
    
    /**
     * @var int|null $oneDriveActive The number of active users on OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
    */
    private ?int $oneDriveActive = null;
    
    /**
     * @var int|null $oneDriveInactive The number of inactive users on OneDrive.
    */
    private ?int $oneDriveInactive = null;
    
    /**
     * @var string|null $reportPeriod The number of days the report covers.
    */
    private ?string $reportPeriod = null;
    
    /**
     * @var Date|null $reportRefreshDate The latest date of the content.
    */
    private ?Date $reportRefreshDate = null;
    
    /**
     * @var int|null $sharePointActive The number of active users on SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
    */
    private ?int $sharePointActive = null;
    
    /**
     * @var int|null $sharePointInactive The number of inactive users on SharePoint.
    */
    private ?int $sharePointInactive = null;
    
    /**
     * @var int|null $skypeForBusinessActive The number of active users on Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
    */
    private ?int $skypeForBusinessActive = null;
    
    /**
     * @var int|null $skypeForBusinessInactive The number of inactive users on Skype For Business.
    */
    private ?int $skypeForBusinessInactive = null;
    
    /**
     * @var int|null $teamsActive The number of active users on Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
    */
    private ?int $teamsActive = null;
    
    /**
     * @var int|null $teamsInactive The number of inactive users on Microsoft Teams.
    */
    private ?int $teamsInactive = null;
    
    /**
     * @var int|null $yammerActive The number of active users on Yammer. Any user who can post, read, or like messages is considered an active user.
    */
    private ?int $yammerActive = null;
    
    /**
     * @var int|null $yammerInactive The number of inactive users on Yammer.
    */
    private ?int $yammerInactive = null;
    
    /**
     * Instantiates a new Office365ServicesUserCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the exchangeActive property value. The number of active users on Exchange. Any user who can read and send email is considered an active user.
     * @return int|null
    */
    public function getExchangeActive(): ?int {
        return $this->exchangeActive;
    }

    /**
     * Gets the exchangeInactive property value. The number of inactive users on Exchange.
     * @return int|null
    */
    public function getExchangeInactive(): ?int {
        return $this->exchangeInactive;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeActive' => function (ParseNode $n) use ($o) { $o->setExchangeActive($n->getIntegerValue()); },
            'exchangeInactive' => function (ParseNode $n) use ($o) { $o->setExchangeInactive($n->getIntegerValue()); },
            'office365Active' => function (ParseNode $n) use ($o) { $o->setOffice365Active($n->getIntegerValue()); },
            'office365Inactive' => function (ParseNode $n) use ($o) { $o->setOffice365Inactive($n->getIntegerValue()); },
            'oneDriveActive' => function (ParseNode $n) use ($o) { $o->setOneDriveActive($n->getIntegerValue()); },
            'oneDriveInactive' => function (ParseNode $n) use ($o) { $o->setOneDriveInactive($n->getIntegerValue()); },
            'reportPeriod' => function (ParseNode $n) use ($o) { $o->setReportPeriod($n->getStringValue()); },
            'reportRefreshDate' => function (ParseNode $n) use ($o) { $o->setReportRefreshDate($n->getDateValue()); },
            'sharePointActive' => function (ParseNode $n) use ($o) { $o->setSharePointActive($n->getIntegerValue()); },
            'sharePointInactive' => function (ParseNode $n) use ($o) { $o->setSharePointInactive($n->getIntegerValue()); },
            'skypeForBusinessActive' => function (ParseNode $n) use ($o) { $o->setSkypeForBusinessActive($n->getIntegerValue()); },
            'skypeForBusinessInactive' => function (ParseNode $n) use ($o) { $o->setSkypeForBusinessInactive($n->getIntegerValue()); },
            'teamsActive' => function (ParseNode $n) use ($o) { $o->setTeamsActive($n->getIntegerValue()); },
            'teamsInactive' => function (ParseNode $n) use ($o) { $o->setTeamsInactive($n->getIntegerValue()); },
            'yammerActive' => function (ParseNode $n) use ($o) { $o->setYammerActive($n->getIntegerValue()); },
            'yammerInactive' => function (ParseNode $n) use ($o) { $o->setYammerInactive($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the office365Active property value. The number of active users on Microsoft 365.
     * @return int|null
    */
    public function getOffice365Active(): ?int {
        return $this->office365Active;
    }

    /**
     * Gets the office365Inactive property value. The number of inactive users on Microsoft 365.
     * @return int|null
    */
    public function getOffice365Inactive(): ?int {
        return $this->office365Inactive;
    }

    /**
     * Gets the oneDriveActive property value. The number of active users on OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     * @return int|null
    */
    public function getOneDriveActive(): ?int {
        return $this->oneDriveActive;
    }

    /**
     * Gets the oneDriveInactive property value. The number of inactive users on OneDrive.
     * @return int|null
    */
    public function getOneDriveInactive(): ?int {
        return $this->oneDriveInactive;
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
     * Gets the sharePointActive property value. The number of active users on SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     * @return int|null
    */
    public function getSharePointActive(): ?int {
        return $this->sharePointActive;
    }

    /**
     * Gets the sharePointInactive property value. The number of inactive users on SharePoint.
     * @return int|null
    */
    public function getSharePointInactive(): ?int {
        return $this->sharePointInactive;
    }

    /**
     * Gets the skypeForBusinessActive property value. The number of active users on Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     * @return int|null
    */
    public function getSkypeForBusinessActive(): ?int {
        return $this->skypeForBusinessActive;
    }

    /**
     * Gets the skypeForBusinessInactive property value. The number of inactive users on Skype For Business.
     * @return int|null
    */
    public function getSkypeForBusinessInactive(): ?int {
        return $this->skypeForBusinessInactive;
    }

    /**
     * Gets the teamsActive property value. The number of active users on Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     * @return int|null
    */
    public function getTeamsActive(): ?int {
        return $this->teamsActive;
    }

    /**
     * Gets the teamsInactive property value. The number of inactive users on Microsoft Teams.
     * @return int|null
    */
    public function getTeamsInactive(): ?int {
        return $this->teamsInactive;
    }

    /**
     * Gets the yammerActive property value. The number of active users on Yammer. Any user who can post, read, or like messages is considered an active user.
     * @return int|null
    */
    public function getYammerActive(): ?int {
        return $this->yammerActive;
    }

    /**
     * Gets the yammerInactive property value. The number of inactive users on Yammer.
     * @return int|null
    */
    public function getYammerInactive(): ?int {
        return $this->yammerInactive;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchangeActive', $this->exchangeActive);
        $writer->writeIntegerValue('exchangeInactive', $this->exchangeInactive);
        $writer->writeIntegerValue('office365Active', $this->office365Active);
        $writer->writeIntegerValue('office365Inactive', $this->office365Inactive);
        $writer->writeIntegerValue('oneDriveActive', $this->oneDriveActive);
        $writer->writeIntegerValue('oneDriveInactive', $this->oneDriveInactive);
        $writer->writeStringValue('reportPeriod', $this->reportPeriod);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeIntegerValue('sharePointActive', $this->sharePointActive);
        $writer->writeIntegerValue('sharePointInactive', $this->sharePointInactive);
        $writer->writeIntegerValue('skypeForBusinessActive', $this->skypeForBusinessActive);
        $writer->writeIntegerValue('skypeForBusinessInactive', $this->skypeForBusinessInactive);
        $writer->writeIntegerValue('teamsActive', $this->teamsActive);
        $writer->writeIntegerValue('teamsInactive', $this->teamsInactive);
        $writer->writeIntegerValue('yammerActive', $this->yammerActive);
        $writer->writeIntegerValue('yammerInactive', $this->yammerInactive);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the exchangeActive property value. The number of active users on Exchange. Any user who can read and send email is considered an active user.
     *  @param int|null $value Value to set for the exchangeActive property.
    */
    public function setExchangeActive(?int $value ): void {
        $this->exchangeActive = $value;
    }

    /**
     * Sets the exchangeInactive property value. The number of inactive users on Exchange.
     *  @param int|null $value Value to set for the exchangeInactive property.
    */
    public function setExchangeInactive(?int $value ): void {
        $this->exchangeInactive = $value;
    }

    /**
     * Sets the office365Active property value. The number of active users on Microsoft 365.
     *  @param int|null $value Value to set for the office365Active property.
    */
    public function setOffice365Active(?int $value ): void {
        $this->office365Active = $value;
    }

    /**
     * Sets the office365Inactive property value. The number of inactive users on Microsoft 365.
     *  @param int|null $value Value to set for the office365Inactive property.
    */
    public function setOffice365Inactive(?int $value ): void {
        $this->office365Inactive = $value;
    }

    /**
     * Sets the oneDriveActive property value. The number of active users on OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     *  @param int|null $value Value to set for the oneDriveActive property.
    */
    public function setOneDriveActive(?int $value ): void {
        $this->oneDriveActive = $value;
    }

    /**
     * Sets the oneDriveInactive property value. The number of inactive users on OneDrive.
     *  @param int|null $value Value to set for the oneDriveInactive property.
    */
    public function setOneDriveInactive(?int $value ): void {
        $this->oneDriveInactive = $value;
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
     * Sets the sharePointActive property value. The number of active users on SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     *  @param int|null $value Value to set for the sharePointActive property.
    */
    public function setSharePointActive(?int $value ): void {
        $this->sharePointActive = $value;
    }

    /**
     * Sets the sharePointInactive property value. The number of inactive users on SharePoint.
     *  @param int|null $value Value to set for the sharePointInactive property.
    */
    public function setSharePointInactive(?int $value ): void {
        $this->sharePointInactive = $value;
    }

    /**
     * Sets the skypeForBusinessActive property value. The number of active users on Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     *  @param int|null $value Value to set for the skypeForBusinessActive property.
    */
    public function setSkypeForBusinessActive(?int $value ): void {
        $this->skypeForBusinessActive = $value;
    }

    /**
     * Sets the skypeForBusinessInactive property value. The number of inactive users on Skype For Business.
     *  @param int|null $value Value to set for the skypeForBusinessInactive property.
    */
    public function setSkypeForBusinessInactive(?int $value ): void {
        $this->skypeForBusinessInactive = $value;
    }

    /**
     * Sets the teamsActive property value. The number of active users on Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     *  @param int|null $value Value to set for the teamsActive property.
    */
    public function setTeamsActive(?int $value ): void {
        $this->teamsActive = $value;
    }

    /**
     * Sets the teamsInactive property value. The number of inactive users on Microsoft Teams.
     *  @param int|null $value Value to set for the teamsInactive property.
    */
    public function setTeamsInactive(?int $value ): void {
        $this->teamsInactive = $value;
    }

    /**
     * Sets the yammerActive property value. The number of active users on Yammer. Any user who can post, read, or like messages is considered an active user.
     *  @param int|null $value Value to set for the yammerActive property.
    */
    public function setYammerActive(?int $value ): void {
        $this->yammerActive = $value;
    }

    /**
     * Sets the yammerInactive property value. The number of inactive users on Yammer.
     *  @param int|null $value Value to set for the yammerInactive property.
    */
    public function setYammerInactive(?int $value ): void {
        $this->yammerInactive = $value;
    }

}
