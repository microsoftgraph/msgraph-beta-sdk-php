<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365ActiveUserCounts extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $exchange The number of active users in Exchange. Any user who can read and send email is considered an active user.
    */
    private ?int $exchange = null;
    
    /**
     * @var int|null $office365 The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
    */
    private ?int $office365 = null;
    
    /**
     * @var int|null $oneDrive The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
    */
    private ?int $oneDrive = null;
    
    /**
     * @var Date|null $reportDate The date on which a number of users were active.
    */
    private ?Date $reportDate = null;
    
    /**
     * @var string|null $reportPeriod The number of days the report covers.
    */
    private ?string $reportPeriod = null;
    
    /**
     * @var Date|null $reportRefreshDate The latest date of the content.
    */
    private ?Date $reportRefreshDate = null;
    
    /**
     * @var int|null $sharePoint The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
    */
    private ?int $sharePoint = null;
    
    /**
     * @var int|null $skypeForBusiness The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
    */
    private ?int $skypeForBusiness = null;
    
    /**
     * @var int|null $teams The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
    */
    private ?int $teams = null;
    
    /**
     * @var int|null $yammer The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
    */
    private ?int $yammer = null;
    
    /**
     * Instantiates a new Office365ActiveUserCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the exchange property value. The number of active users in Exchange. Any user who can read and send email is considered an active user.
     * @return int|null
    */
    public function getExchange(): ?int {
        return $this->exchange;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchange' => function (ParseNode $n) use ($o) { $o->setExchange($n->getIntegerValue()); },
            'office365' => function (ParseNode $n) use ($o) { $o->setOffice365($n->getIntegerValue()); },
            'oneDrive' => function (ParseNode $n) use ($o) { $o->setOneDrive($n->getIntegerValue()); },
            'reportDate' => function (ParseNode $n) use ($o) { $o->setReportDate($n->getDateValue()); },
            'reportPeriod' => function (ParseNode $n) use ($o) { $o->setReportPeriod($n->getStringValue()); },
            'reportRefreshDate' => function (ParseNode $n) use ($o) { $o->setReportRefreshDate($n->getDateValue()); },
            'sharePoint' => function (ParseNode $n) use ($o) { $o->setSharePoint($n->getIntegerValue()); },
            'skypeForBusiness' => function (ParseNode $n) use ($o) { $o->setSkypeForBusiness($n->getIntegerValue()); },
            'teams' => function (ParseNode $n) use ($o) { $o->setTeams($n->getIntegerValue()); },
            'yammer' => function (ParseNode $n) use ($o) { $o->setYammer($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the office365 property value. The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
     * @return int|null
    */
    public function getOffice365(): ?int {
        return $this->office365;
    }

    /**
     * Gets the oneDrive property value. The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     * @return int|null
    */
    public function getOneDrive(): ?int {
        return $this->oneDrive;
    }

    /**
     * Gets the reportDate property value. The date on which a number of users were active.
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
     * Gets the sharePoint property value. The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     * @return int|null
    */
    public function getSharePoint(): ?int {
        return $this->sharePoint;
    }

    /**
     * Gets the skypeForBusiness property value. The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     * @return int|null
    */
    public function getSkypeForBusiness(): ?int {
        return $this->skypeForBusiness;
    }

    /**
     * Gets the teams property value. The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     * @return int|null
    */
    public function getTeams(): ?int {
        return $this->teams;
    }

    /**
     * Gets the yammer property value. The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
     * @return int|null
    */
    public function getYammer(): ?int {
        return $this->yammer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchange', $this->exchange);
        $writer->writeIntegerValue('office365', $this->office365);
        $writer->writeIntegerValue('oneDrive', $this->oneDrive);
        $writer->writeDateValue('reportDate', $this->reportDate);
        $writer->writeStringValue('reportPeriod', $this->reportPeriod);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeIntegerValue('sharePoint', $this->sharePoint);
        $writer->writeIntegerValue('skypeForBusiness', $this->skypeForBusiness);
        $writer->writeIntegerValue('teams', $this->teams);
        $writer->writeIntegerValue('yammer', $this->yammer);
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
     * Sets the exchange property value. The number of active users in Exchange. Any user who can read and send email is considered an active user.
     *  @param int|null $value Value to set for the exchange property.
    */
    public function setExchange(?int $value ): void {
        $this->exchange = $value;
    }

    /**
     * Sets the office365 property value. The number of active users in Microsoft 365. This number includes all the active users in Exchange, OneDrive, SharePoint, Skype For Business, Yammer, and Microsoft Teams. You can find the definition of active user for each product in the respective property description.
     *  @param int|null $value Value to set for the office365 property.
    */
    public function setOffice365(?int $value ): void {
        $this->office365 = $value;
    }

    /**
     * Sets the oneDrive property value. The number of active users in OneDrive. Any user who viewed or edited files, shared files internally or externally, or synced files is considered an active user.
     *  @param int|null $value Value to set for the oneDrive property.
    */
    public function setOneDrive(?int $value ): void {
        $this->oneDrive = $value;
    }

    /**
     * Sets the reportDate property value. The date on which a number of users were active.
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
     * Sets the sharePoint property value. The number of active users in SharePoint. Any user who viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages is considered an active user.
     *  @param int|null $value Value to set for the sharePoint property.
    */
    public function setSharePoint(?int $value ): void {
        $this->sharePoint = $value;
    }

    /**
     * Sets the skypeForBusiness property value. The number of active users in Skype For Business. Any user who organized or participated in conferences, or joined peer-to-peer sessions is considered an active user.
     *  @param int|null $value Value to set for the skypeForBusiness property.
    */
    public function setSkypeForBusiness(?int $value ): void {
        $this->skypeForBusiness = $value;
    }

    /**
     * Sets the teams property value. The number of active users in Microsoft Teams. Any user who posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls is considered an active user.
     *  @param int|null $value Value to set for the teams property.
    */
    public function setTeams(?int $value ): void {
        $this->teams = $value;
    }

    /**
     * Sets the yammer property value. The number of active users in Yammer. Any user who can post, read, or like messages is considered an active user.
     *  @param int|null $value Value to set for the yammer property.
    */
    public function setYammer(?int $value ): void {
        $this->yammer = $value;
    }

}
