<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmbeddedSIMActivationCodePool extends Entity implements Parsable 
{
    /**
     * @var int|null $activationCodeCount The total count of activation codes which belong to this pool.
    */
    private ?int $activationCodeCount = null;
    
    /**
     * @var array<EmbeddedSIMActivationCode>|null $activationCodes The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
    */
    private ?array $activationCodes = null;
    
    /**
     * @var array<EmbeddedSIMActivationCodePoolAssignment>|null $assignments Navigational property to a list of targets to which this pool is assigned.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The time the embedded SIM activation code pool was created. Generated service side.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<EmbeddedSIMDeviceState>|null $deviceStates Navigational property to a list of device states for this pool.
    */
    private ?array $deviceStates = null;
    
    /**
     * @var string|null $displayName The admin defined name of the embedded SIM activation code pool.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The time the embedded SIM activation code pool was last modified. Updated service side.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new embeddedSIMActivationCodePool and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.embeddedSIMActivationCodePool');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmbeddedSIMActivationCodePool
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmbeddedSIMActivationCodePool {
        return new EmbeddedSIMActivationCodePool();
    }

    /**
     * Gets the activationCodeCount property value. The total count of activation codes which belong to this pool.
     * @return int|null
    */
    public function getActivationCodeCount(): ?int {
        return $this->activationCodeCount;
    }

    /**
     * Gets the activationCodes property value. The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
     * @return array<EmbeddedSIMActivationCode>|null
    */
    public function getActivationCodes(): ?array {
        return $this->activationCodes;
    }

    /**
     * Gets the assignments property value. Navigational property to a list of targets to which this pool is assigned.
     * @return array<EmbeddedSIMActivationCodePoolAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The time the embedded SIM activation code pool was created. Generated service side.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceStates property value. Navigational property to a list of device states for this pool.
     * @return array<EmbeddedSIMDeviceState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->deviceStates;
    }

    /**
     * Gets the displayName property value. The admin defined name of the embedded SIM activation code pool.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationCodeCount' => fn(ParseNode $n) => $o->setActivationCodeCount($n->getIntegerValue()),
            'activationCodes' => fn(ParseNode $n) => $o->setActivationCodes($n->getCollectionOfObjectValues([EmbeddedSIMActivationCode::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([EmbeddedSIMActivationCodePoolAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([EmbeddedSIMDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The time the embedded SIM activation code pool was last modified. Updated service side.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activationCodeCount', $this->activationCodeCount);
        $writer->writeCollectionOfObjectValues('activationCodes', $this->activationCodes);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('deviceStates', $this->deviceStates);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
    }

    /**
     * Sets the activationCodeCount property value. The total count of activation codes which belong to this pool.
     *  @param int|null $value Value to set for the activationCodeCount property.
    */
    public function setActivationCodeCount(?int $value ): void {
        $this->activationCodeCount = $value;
    }

    /**
     * Sets the activationCodes property value. The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
     *  @param array<EmbeddedSIMActivationCode>|null $value Value to set for the activationCodes property.
    */
    public function setActivationCodes(?array $value ): void {
        $this->activationCodes = $value;
    }

    /**
     * Sets the assignments property value. Navigational property to a list of targets to which this pool is assigned.
     *  @param array<EmbeddedSIMActivationCodePoolAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The time the embedded SIM activation code pool was created. Generated service side.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceStates property value. Navigational property to a list of device states for this pool.
     *  @param array<EmbeddedSIMDeviceState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value ): void {
        $this->deviceStates = $value;
    }

    /**
     * Sets the displayName property value. The admin defined name of the embedded SIM activation code pool.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The time the embedded SIM activation code pool was last modified. Updated service side.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

}
