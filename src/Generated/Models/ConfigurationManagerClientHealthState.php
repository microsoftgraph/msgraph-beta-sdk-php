<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationManagerClientHealthState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $errorCode Error code for failed state.
    */
    private ?int $errorCode = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Datetime for last sync with configuration manager management point.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ConfigurationManagerClientState|null $state Configuration manager client state
    */
    private ?ConfigurationManagerClientState $state = null;
    
    /**
     * Instantiates a new configurationManagerClientHealthState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.configurationManagerClientHealthState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerClientHealthState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerClientHealthState {
        return new ConfigurationManagerClientHealthState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the errorCode property value. Error code for failed state.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ConfigurationManagerClientState::class)); },
        ];
    }

    /**
     * Gets the lastSyncDateTime property value. Datetime for last sync with configuration manager management point.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the state property value. Configuration manager client state
     * @return ConfigurationManagerClientState|null
    */
    public function getState(): ?ConfigurationManagerClientState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the errorCode property value. Error code for failed state.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Datetime for last sync with configuration manager management point.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the state property value. Configuration manager client state
     *  @param ConfigurationManagerClientState|null $value Value to set for the state property.
    */
    public function setState(?ConfigurationManagerClientState $value ): void {
        $this->state = $value;
    }

}
