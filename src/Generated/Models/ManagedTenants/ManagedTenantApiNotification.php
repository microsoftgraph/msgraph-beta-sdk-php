<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenantApiNotification extends Entity implements Parsable 
{
    /**
     * @var ManagedTenantAlert|null $alert The alert property
    */
    private ?ManagedTenantAlert $alert = null;
    
    /**
     * @var string|null $createdByUserId The createdByUserId property
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var bool|null $isAcknowledged The isAcknowledged property
    */
    private ?bool $isAcknowledged = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new managedTenantApiNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managedTenantApiNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedTenantApiNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedTenantApiNotification {
        return new ManagedTenantApiNotification();
    }

    /**
     * Gets the alert property value. The alert property
     * @return ManagedTenantAlert|null
    */
    public function getAlert(): ?ManagedTenantAlert {
        return $this->alert;
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alert' => function (ParseNode $n) use ($o) { $o->setAlert($n->getObjectValue(array(ManagedTenantAlert::class, 'createFromDiscriminatorValue'))); },
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'isAcknowledged' => function (ParseNode $n) use ($o) { $o->setIsAcknowledged($n->getBooleanValue()); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isAcknowledged property value. The isAcknowledged property
     * @return bool|null
    */
    public function getIsAcknowledged(): ?bool {
        return $this->isAcknowledged;
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alert', $this->alert);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeBooleanValue('isAcknowledged', $this->isAcknowledged);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('title', $this->title);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the alert property value. The alert property
     *  @param ManagedTenantAlert|null $value Value to set for the alert property.
    */
    public function setAlert(?ManagedTenantAlert $value ): void {
        $this->alert = $value;
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the isAcknowledged property value. The isAcknowledged property
     *  @param bool|null $value Value to set for the isAcknowledged property.
    */
    public function setIsAcknowledged(?bool $value ): void {
        $this->isAcknowledged = $value;
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the userId property value. The userId property
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
