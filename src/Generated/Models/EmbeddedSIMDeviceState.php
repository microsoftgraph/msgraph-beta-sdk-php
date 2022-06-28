<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmbeddedSIMDeviceState extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime The time the embedded SIM device status was created. Generated service side.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $deviceName Device name to which the subscription was provisioned e.g. DESKTOP-JOE
    */
    private ?string $deviceName = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The time the embedded SIM device last checked in. Updated service side.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The time the embedded SIM device status was last modified. Updated service side.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var EmbeddedSIMDeviceStateValue|null $state The state of the profile operation applied to the device. Possible values are: notEvaluated, failed, installing, installed, deleting, error, deleted, removedByUser.
    */
    private ?EmbeddedSIMDeviceStateValue $state = null;
    
    /**
     * @var string|null $stateDetails String description of the provisioning state.
    */
    private ?string $stateDetails = null;
    
    /**
     * @var string|null $universalIntegratedCircuitCardIdentifier The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
    */
    private ?string $universalIntegratedCircuitCardIdentifier = null;
    
    /**
     * @var string|null $userName Username which the subscription was provisioned to e.g. joe@contoso.com
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new embeddedSIMDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmbeddedSIMDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmbeddedSIMDeviceState {
        return new EmbeddedSIMDeviceState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. The time the embedded SIM device status was created. Generated service side.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceName property value. Device name to which the subscription was provisioned e.g. DESKTOP-JOE
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(EmbeddedSIMDeviceStateValue::class)); },
            'stateDetails' => function (ParseNode $n) use ($o) { $o->setStateDetails($n->getStringValue()); },
            'universalIntegratedCircuitCardIdentifier' => function (ParseNode $n) use ($o) { $o->setUniversalIntegratedCircuitCardIdentifier($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. The time the embedded SIM device last checked in. Updated service side.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the modifiedDateTime property value. The time the embedded SIM device status was last modified. Updated service side.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the state property value. The state of the profile operation applied to the device. Possible values are: notEvaluated, failed, installing, installed, deleting, error, deleted, removedByUser.
     * @return EmbeddedSIMDeviceStateValue|null
    */
    public function getState(): ?EmbeddedSIMDeviceStateValue {
        return $this->state;
    }

    /**
     * Gets the stateDetails property value. String description of the provisioning state.
     * @return string|null
    */
    public function getStateDetails(): ?string {
        return $this->stateDetails;
    }

    /**
     * Gets the universalIntegratedCircuitCardIdentifier property value. The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
     * @return string|null
    */
    public function getUniversalIntegratedCircuitCardIdentifier(): ?string {
        return $this->universalIntegratedCircuitCardIdentifier;
    }

    /**
     * Gets the userName property value. Username which the subscription was provisioned to e.g. joe@contoso.com
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('stateDetails', $this->stateDetails);
        $writer->writeStringValue('universalIntegratedCircuitCardIdentifier', $this->universalIntegratedCircuitCardIdentifier);
        $writer->writeStringValue('userName', $this->userName);
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
     * Sets the createdDateTime property value. The time the embedded SIM device status was created. Generated service side.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceName property value. Device name to which the subscription was provisioned e.g. DESKTOP-JOE
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The time the embedded SIM device last checked in. Updated service side.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The time the embedded SIM device status was last modified. Updated service side.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the state property value. The state of the profile operation applied to the device. Possible values are: notEvaluated, failed, installing, installed, deleting, error, deleted, removedByUser.
     *  @param EmbeddedSIMDeviceStateValue|null $value Value to set for the state property.
    */
    public function setState(?EmbeddedSIMDeviceStateValue $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the stateDetails property value. String description of the provisioning state.
     *  @param string|null $value Value to set for the stateDetails property.
    */
    public function setStateDetails(?string $value ): void {
        $this->stateDetails = $value;
    }

    /**
     * Sets the universalIntegratedCircuitCardIdentifier property value. The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
     *  @param string|null $value Value to set for the universalIntegratedCircuitCardIdentifier property.
    */
    public function setUniversalIntegratedCircuitCardIdentifier(?string $value ): void {
        $this->universalIntegratedCircuitCardIdentifier = $value;
    }

    /**
     * Sets the userName property value. Username which the subscription was provisioned to e.g. joe@contoso.com
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
