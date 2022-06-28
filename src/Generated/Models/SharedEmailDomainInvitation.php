<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedEmailDomainInvitation extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $expiryTime The expiryTime property
    */
    private ?DateTime $expiryTime = null;
    
    /**
     * @var string|null $invitationDomain The invitationDomain property
    */
    private ?string $invitationDomain = null;
    
    /**
     * @var string|null $invitationStatus The invitationStatus property
    */
    private ?string $invitationStatus = null;
    
    /**
     * Instantiates a new sharedEmailDomainInvitation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedEmailDomainInvitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedEmailDomainInvitation {
        return new SharedEmailDomainInvitation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expiryTime' => function (ParseNode $n) use ($o) { $o->setExpiryTime($n->getDateTimeValue()); },
            'invitationDomain' => function (ParseNode $n) use ($o) { $o->setInvitationDomain($n->getStringValue()); },
            'invitationStatus' => function (ParseNode $n) use ($o) { $o->setInvitationStatus($n->getStringValue()); },
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
