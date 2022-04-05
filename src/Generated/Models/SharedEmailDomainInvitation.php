<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedEmailDomainInvitation extends Entity 
{
    /** @var DateTime|null $expiryTime The expiryTime property */
    private ?DateTime $expiryTime = null;
    
    /** @var string|null $invitationDomain The invitationDomain property */
    private ?string $invitationDomain = null;
    
    /** @var string|null $invitationStatus The invitationStatus property */
    private ?string $invitationStatus = null;
    
    /**
     * Instantiates a new sharedEmailDomainInvitation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedEmailDomainInvitation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SharedEmailDomainInvitation {
        return new SharedEmailDomainInvitation();
    }

    /**
     * Gets the expiryTime property value. The expiryTime property
     * @return DateTime|null
    */
    public function getExpiryTime(): ?DateTime {
        return $this->expiryTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'expiryTime' => function (self $o, ParseNode $n) { $o->setExpiryTime($n->getDateTimeValue()); },
            'invitationDomain' => function (self $o, ParseNode $n) { $o->setInvitationDomain($n->getStringValue()); },
            'invitationStatus' => function (self $o, ParseNode $n) { $o->setInvitationStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the invitationDomain property value. The invitationDomain property
     * @return string|null
    */
    public function getInvitationDomain(): ?string {
        return $this->invitationDomain;
    }

    /**
     * Gets the invitationStatus property value. The invitationStatus property
     * @return string|null
    */
    public function getInvitationStatus(): ?string {
        return $this->invitationStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expiryTime', $this->expiryTime);
        $writer->writeStringValue('invitationDomain', $this->invitationDomain);
        $writer->writeStringValue('invitationStatus', $this->invitationStatus);
    }

    /**
     * Sets the expiryTime property value. The expiryTime property
     *  @param DateTime|null $value Value to set for the expiryTime property.
    */
    public function setExpiryTime(?DateTime $value ): void {
        $this->expiryTime = $value;
    }

    /**
     * Sets the invitationDomain property value. The invitationDomain property
     *  @param string|null $value Value to set for the invitationDomain property.
    */
    public function setInvitationDomain(?string $value ): void {
        $this->invitationDomain = $value;
    }

    /**
     * Sets the invitationStatus property value. The invitationStatus property
     *  @param string|null $value Value to set for the invitationStatus property.
    */
    public function setInvitationStatus(?string $value ): void {
        $this->invitationStatus = $value;
    }

}
