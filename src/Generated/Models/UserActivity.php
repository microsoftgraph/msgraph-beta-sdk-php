<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserActivity extends Entity implements Parsable 
{
    /**
     * @var string|null $activationUrl The activationUrl property
    */
    private ?string $activationUrl = null;
    
    /**
     * @var string|null $activitySourceHost The activitySourceHost property
    */
    private ?string $activitySourceHost = null;
    
    /**
     * @var string|null $appActivityId The appActivityId property
    */
    private ?string $appActivityId = null;
    
    /**
     * @var string|null $appDisplayName The appDisplayName property
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var Json|null $contentInfo The contentInfo property
    */
    private ?Json $contentInfo = null;
    
    /**
     * @var string|null $contentUrl The contentUrl property
    */
    private ?string $contentUrl = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $expirationDateTime The expirationDateTime property
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $fallbackUrl The fallbackUrl property
    */
    private ?string $fallbackUrl = null;
    
    /**
     * @var array<ActivityHistoryItem>|null $historyItems The historyItems property
    */
    private ?array $historyItems = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var Status|null $status The status property
    */
    private ?Status $status = null;
    
    /**
     * @var string|null $userTimezone The userTimezone property
    */
    private ?string $userTimezone = null;
    
    /**
     * @var VisualInfo|null $visualElements The visualElements property
    */
    private ?VisualInfo $visualElements = null;
    
    /**
     * Instantiates a new UserActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userActivity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserActivity {
        return new UserActivity();
    }

    /**
     * Gets the activationUrl property value. The activationUrl property
     * @return string|null
    */
    public function getActivationUrl(): ?string {
        return $this->activationUrl;
    }

    /**
     * Gets the activitySourceHost property value. The activitySourceHost property
     * @return string|null
    */
    public function getActivitySourceHost(): ?string {
        return $this->activitySourceHost;
    }

    /**
     * Gets the appActivityId property value. The appActivityId property
     * @return string|null
    */
    public function getAppActivityId(): ?string {
        return $this->appActivityId;
    }

    /**
     * Gets the appDisplayName property value. The appDisplayName property
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the contentInfo property value. The contentInfo property
     * @return Json|null
    */
    public function getContentInfo(): ?Json {
        return $this->contentInfo;
    }

    /**
     * Gets the contentUrl property value. The contentUrl property
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->contentUrl;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * Gets the fallbackUrl property value. The fallbackUrl property
     * @return string|null
    */
    public function getFallbackUrl(): ?string {
        return $this->fallbackUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationUrl' => fn(ParseNode $n) => $o->setActivationUrl($n->getStringValue()),
            'activitySourceHost' => fn(ParseNode $n) => $o->setActivitySourceHost($n->getStringValue()),
            'appActivityId' => fn(ParseNode $n) => $o->setAppActivityId($n->getStringValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'contentInfo' => fn(ParseNode $n) => $o->setContentInfo($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'contentUrl' => fn(ParseNode $n) => $o->setContentUrl($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'fallbackUrl' => fn(ParseNode $n) => $o->setFallbackUrl($n->getStringValue()),
            'historyItems' => fn(ParseNode $n) => $o->setHistoryItems($n->getCollectionOfObjectValues([ActivityHistoryItem::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(Status::class)),
            'userTimezone' => fn(ParseNode $n) => $o->setUserTimezone($n->getStringValue()),
            'visualElements' => fn(ParseNode $n) => $o->setVisualElements($n->getObjectValue([VisualInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the historyItems property value. The historyItems property
     * @return array<ActivityHistoryItem>|null
    */
    public function getHistoryItems(): ?array {
        return $this->historyItems;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return Status|null
    */
    public function getStatus(): ?Status {
        return $this->status;
    }

    /**
     * Gets the userTimezone property value. The userTimezone property
     * @return string|null
    */
    public function getUserTimezone(): ?string {
        return $this->userTimezone;
    }

    /**
     * Gets the visualElements property value. The visualElements property
     * @return VisualInfo|null
    */
    public function getVisualElements(): ?VisualInfo {
        return $this->visualElements;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activationUrl', $this->activationUrl);
        $writer->writeStringValue('activitySourceHost', $this->activitySourceHost);
        $writer->writeStringValue('appActivityId', $this->appActivityId);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeObjectValue('contentInfo', $this->contentInfo);
        $writer->writeStringValue('contentUrl', $this->contentUrl);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('fallbackUrl', $this->fallbackUrl);
        $writer->writeCollectionOfObjectValues('historyItems', $this->historyItems);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('userTimezone', $this->userTimezone);
        $writer->writeObjectValue('visualElements', $this->visualElements);
    }

    /**
     * Sets the activationUrl property value. The activationUrl property
     *  @param string|null $value Value to set for the activationUrl property.
    */
    public function setActivationUrl(?string $value ): void {
        $this->activationUrl = $value;
    }

    /**
     * Sets the activitySourceHost property value. The activitySourceHost property
     *  @param string|null $value Value to set for the activitySourceHost property.
    */
    public function setActivitySourceHost(?string $value ): void {
        $this->activitySourceHost = $value;
    }

    /**
     * Sets the appActivityId property value. The appActivityId property
     *  @param string|null $value Value to set for the appActivityId property.
    */
    public function setAppActivityId(?string $value ): void {
        $this->appActivityId = $value;
    }

    /**
     * Sets the appDisplayName property value. The appDisplayName property
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the contentInfo property value. The contentInfo property
     *  @param Json|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?Json $value ): void {
        $this->contentInfo = $value;
    }

    /**
     * Sets the contentUrl property value. The contentUrl property
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value ): void {
        $this->contentUrl = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the fallbackUrl property value. The fallbackUrl property
     *  @param string|null $value Value to set for the fallbackUrl property.
    */
    public function setFallbackUrl(?string $value ): void {
        $this->fallbackUrl = $value;
    }

    /**
     * Sets the historyItems property value. The historyItems property
     *  @param array<ActivityHistoryItem>|null $value Value to set for the historyItems property.
    */
    public function setHistoryItems(?array $value ): void {
        $this->historyItems = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param Status|null $value Value to set for the status property.
    */
    public function setStatus(?Status $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userTimezone property value. The userTimezone property
     *  @param string|null $value Value to set for the userTimezone property.
    */
    public function setUserTimezone(?string $value ): void {
        $this->userTimezone = $value;
    }

    /**
     * Sets the visualElements property value. The visualElements property
     *  @param VisualInfo|null $value Value to set for the visualElements property.
    */
    public function setVisualElements(?VisualInfo $value ): void {
        $this->visualElements = $value;
    }

}
