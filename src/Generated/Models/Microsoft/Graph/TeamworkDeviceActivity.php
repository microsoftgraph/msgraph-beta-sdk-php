<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceActivity extends Entity 
{
    /** @var TeamworkActivePeripherals|null $activePeripherals The active peripheral devices attached to the device. */
    private ?TeamworkActivePeripherals $activePeripherals = null;
    
    /** @var IdentitySet|null $createdBy Identity of the user who created the device activity document. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The UTC date and time when the device activity document was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var IdentitySet|null $lastModifiedBy Identity of the user who last modified the device activity details. */
    private ?IdentitySet $lastModifiedBy = null;
    
    /** @var DateTime|null $lastModifiedDateTime The UTC date and time when the device activity detail was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new teamworkDeviceActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceActivity
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceActivity {
        return new TeamworkDeviceActivity();
    }

    /**
     * Gets the activePeripherals property value. The active peripheral devices attached to the device.
     * @return TeamworkActivePeripherals|null
    */
    public function getActivePeripherals(): ?TeamworkActivePeripherals {
        return $this->activePeripherals;
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device activity document.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device activity document was created.
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
        return array_merge(parent::getFieldDeserializers(), [
            'activePeripherals' => function (self $o, ParseNode $n) { $o->setActivePeripherals($n->getObjectValue(TeamworkActivePeripherals::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getObjectValue(IdentitySet::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device activity details.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device activity detail was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activePeripherals', $this->activePeripherals);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the activePeripherals property value. The active peripheral devices attached to the device.
     *  @param TeamworkActivePeripherals|null $value Value to set for the activePeripherals property.
    */
    public function setActivePeripherals(?TeamworkActivePeripherals $value ): void {
        $this->activePeripherals = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device activity document.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device activity document was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device activity details.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device activity detail was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
