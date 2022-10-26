<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenantEmailNotification extends Entity implements Parsable 
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
     * @var array<Email>|null $emailAddresses The emailAddresses property
    */
    private ?array $emailAddresses = null;
    
    /**
     * @var string|null $emailBody The emailBody property
    */
    private ?string $emailBody = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new managedTenantEmailNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managedTenantEmailNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedTenantEmailNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedTenantEmailNotification {
        return new ManagedTenantEmailNotification();
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
     * Gets the emailAddresses property value. The emailAddresses property
     * @return array<Email>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->emailAddresses;
    }

    /**
     * Gets the emailBody property value. The emailBody property
     * @return string|null
    */
    public function getEmailBody(): ?string {
        return $this->emailBody;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alert' => fn(ParseNode $n) => $o->setAlert($n->getObjectValue([ManagedTenantAlert::class, 'createFromDiscriminatorValue'])),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'emailAddresses' => fn(ParseNode $n) => $o->setEmailAddresses($n->getCollectionOfObjectValues([Email::class, 'createFromDiscriminatorValue'])),
            'emailBody' => fn(ParseNode $n) => $o->setEmailBody($n->getStringValue()),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
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
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
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
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->emailAddresses);
        $writer->writeStringValue('emailBody', $this->emailBody);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeStringValue('subject', $this->subject);
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
     * Sets the emailAddresses property value. The emailAddresses property
     *  @param array<Email>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value ): void {
        $this->emailAddresses = $value;
    }

    /**
     * Sets the emailBody property value. The emailBody property
     *  @param string|null $value Value to set for the emailBody property.
    */
    public function setEmailBody(?string $value ): void {
        $this->emailBody = $value;
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
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
