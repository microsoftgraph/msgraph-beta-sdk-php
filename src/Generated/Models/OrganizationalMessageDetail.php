<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageDetail extends Entity implements Parsable 
{
    /**
     * @var OrganizationalMessageContent|null $content The content that will be displayed to clients for the message. This includes the text portion of the message and the displayed logo
    */
    private ?OrganizationalMessageContent $content = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time of when the message was created
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $endDateTime The date and time of when the message will stop being displayed to clients
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var OrganizationalMessageFrequency|null $frequency The frequency at which a client will see the message
    */
    private ?OrganizationalMessageFrequency $frequency = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time of when the message was last modified
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var OrganizationalMessageScenario|null $scenario Indicates the scenario for the message
    */
    private ?OrganizationalMessageScenario $scenario = null;
    
    /**
     * @var DateTime|null $startDateTime The date and time of when the message will start being displayed to clients
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var OrganizationalMessageStatus|null $status Indicates the deployment status of the message
    */
    private ?OrganizationalMessageStatus $status = null;
    
    /**
     * @var OrganizationalMessageSurface|null $surface Indicates the area where content will be displayed to customers
    */
    private ?OrganizationalMessageSurface $surface = null;
    
    /**
     * @var OrganizationalMessageTargeting|null $targeting The groups of devices that will receive the message. This also contains a list of excluded groups that will not receive the message regardless of the device being part of an included group
    */
    private ?OrganizationalMessageTargeting $targeting = null;
    
    /**
     * @var OrganizationalMessageTheme|null $theme Indicates the theme for the experience
    */
    private ?OrganizationalMessageTheme $theme = null;
    
    /**
     * @var OrganizationalMessageInsights|null $userEngagementStatistics The statistics containing how the message was interacted with by clients. This includes the number of impressions, clicks, and dismisses from targeted clients.
    */
    private ?OrganizationalMessageInsights $userEngagementStatistics = null;
    
    /**
     * @var string|null $variant Indicates the corresponding variant for the experience
    */
    private ?string $variant = null;
    
    /**
     * Instantiates a new organizationalMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organizationalMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageDetail {
        return new OrganizationalMessageDetail();
    }

    /**
     * Gets the content property value. The content that will be displayed to clients for the message. This includes the text portion of the message and the displayed logo
     * @return OrganizationalMessageContent|null
    */
    public function getContent(): ?OrganizationalMessageContent {
        return $this->content;
    }

    /**
     * Gets the createdDateTime property value. The date and time of when the message was created
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the endDateTime property value. The date and time of when the message will stop being displayed to clients
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([OrganizationalMessageContent::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'frequency' => fn(ParseNode $n) => $o->setFrequency($n->getEnumValue(OrganizationalMessageFrequency::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'scenario' => fn(ParseNode $n) => $o->setScenario($n->getEnumValue(OrganizationalMessageScenario::class)),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OrganizationalMessageStatus::class)),
            'surface' => fn(ParseNode $n) => $o->setSurface($n->getEnumValue(OrganizationalMessageSurface::class)),
            'targeting' => fn(ParseNode $n) => $o->setTargeting($n->getObjectValue([OrganizationalMessageTargeting::class, 'createFromDiscriminatorValue'])),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getEnumValue(OrganizationalMessageTheme::class)),
            'userEngagementStatistics' => fn(ParseNode $n) => $o->setUserEngagementStatistics($n->getObjectValue([OrganizationalMessageInsights::class, 'createFromDiscriminatorValue'])),
            'variant' => fn(ParseNode $n) => $o->setVariant($n->getStringValue()),
        ]);
    }

    /**
     * Gets the frequency property value. The frequency at which a client will see the message
     * @return OrganizationalMessageFrequency|null
    */
    public function getFrequency(): ?OrganizationalMessageFrequency {
        return $this->frequency;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time of when the message was last modified
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the scenario property value. Indicates the scenario for the message
     * @return OrganizationalMessageScenario|null
    */
    public function getScenario(): ?OrganizationalMessageScenario {
        return $this->scenario;
    }

    /**
     * Gets the startDateTime property value. The date and time of when the message will start being displayed to clients
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. Indicates the deployment status of the message
     * @return OrganizationalMessageStatus|null
    */
    public function getStatus(): ?OrganizationalMessageStatus {
        return $this->status;
    }

    /**
     * Gets the surface property value. Indicates the area where content will be displayed to customers
     * @return OrganizationalMessageSurface|null
    */
    public function getSurface(): ?OrganizationalMessageSurface {
        return $this->surface;
    }

    /**
     * Gets the targeting property value. The groups of devices that will receive the message. This also contains a list of excluded groups that will not receive the message regardless of the device being part of an included group
     * @return OrganizationalMessageTargeting|null
    */
    public function getTargeting(): ?OrganizationalMessageTargeting {
        return $this->targeting;
    }

    /**
     * Gets the theme property value. Indicates the theme for the experience
     * @return OrganizationalMessageTheme|null
    */
    public function getTheme(): ?OrganizationalMessageTheme {
        return $this->theme;
    }

    /**
     * Gets the userEngagementStatistics property value. The statistics containing how the message was interacted with by clients. This includes the number of impressions, clicks, and dismisses from targeted clients.
     * @return OrganizationalMessageInsights|null
    */
    public function getUserEngagementStatistics(): ?OrganizationalMessageInsights {
        return $this->userEngagementStatistics;
    }

    /**
     * Gets the variant property value. Indicates the corresponding variant for the experience
     * @return string|null
    */
    public function getVariant(): ?string {
        return $this->variant;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('content', $this->content);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeEnumValue('frequency', $this->frequency);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('scenario', $this->scenario);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeEnumValue('surface', $this->surface);
        $writer->writeObjectValue('targeting', $this->targeting);
        $writer->writeEnumValue('theme', $this->theme);
        $writer->writeObjectValue('userEngagementStatistics', $this->userEngagementStatistics);
        $writer->writeStringValue('variant', $this->variant);
    }

    /**
     * Sets the content property value. The content that will be displayed to clients for the message. This includes the text portion of the message and the displayed logo
     *  @param OrganizationalMessageContent|null $value Value to set for the content property.
    */
    public function setContent(?OrganizationalMessageContent $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time of when the message was created
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the endDateTime property value. The date and time of when the message will stop being displayed to clients
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the frequency property value. The frequency at which a client will see the message
     *  @param OrganizationalMessageFrequency|null $value Value to set for the frequency property.
    */
    public function setFrequency(?OrganizationalMessageFrequency $value ): void {
        $this->frequency = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time of when the message was last modified
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the scenario property value. Indicates the scenario for the message
     *  @param OrganizationalMessageScenario|null $value Value to set for the scenario property.
    */
    public function setScenario(?OrganizationalMessageScenario $value ): void {
        $this->scenario = $value;
    }

    /**
     * Sets the startDateTime property value. The date and time of when the message will start being displayed to clients
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. Indicates the deployment status of the message
     *  @param OrganizationalMessageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OrganizationalMessageStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the surface property value. Indicates the area where content will be displayed to customers
     *  @param OrganizationalMessageSurface|null $value Value to set for the surface property.
    */
    public function setSurface(?OrganizationalMessageSurface $value ): void {
        $this->surface = $value;
    }

    /**
     * Sets the targeting property value. The groups of devices that will receive the message. This also contains a list of excluded groups that will not receive the message regardless of the device being part of an included group
     *  @param OrganizationalMessageTargeting|null $value Value to set for the targeting property.
    */
    public function setTargeting(?OrganizationalMessageTargeting $value ): void {
        $this->targeting = $value;
    }

    /**
     * Sets the theme property value. Indicates the theme for the experience
     *  @param OrganizationalMessageTheme|null $value Value to set for the theme property.
    */
    public function setTheme(?OrganizationalMessageTheme $value ): void {
        $this->theme = $value;
    }

    /**
     * Sets the userEngagementStatistics property value. The statistics containing how the message was interacted with by clients. This includes the number of impressions, clicks, and dismisses from targeted clients.
     *  @param OrganizationalMessageInsights|null $value Value to set for the userEngagementStatistics property.
    */
    public function setUserEngagementStatistics(?OrganizationalMessageInsights $value ): void {
        $this->userEngagementStatistics = $value;
    }

    /**
     * Sets the variant property value. Indicates the corresponding variant for the experience
     *  @param string|null $value Value to set for the variant property.
    */
    public function setVariant(?string $value ): void {
        $this->variant = $value;
    }

}
