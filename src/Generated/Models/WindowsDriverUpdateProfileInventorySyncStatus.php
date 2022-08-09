<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDriverUpdateProfileInventorySyncStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsDriverUpdateProfileInventorySyncState|null $driverInventorySyncState Windows DnF update inventory sync state.
    */
    private ?WindowsDriverUpdateProfileInventorySyncState $driverInventorySyncState = null;
    
    /**
     * @var DateTime|null $lastSuccessfulSyncDateTime The last successful sync date and time in UTC.
    */
    private ?DateTime $lastSuccessfulSyncDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new windowsDriverUpdateProfileInventorySyncStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsDriverUpdateProfileInventorySyncStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDriverUpdateProfileInventorySyncStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDriverUpdateProfileInventorySyncStatus {
        return new WindowsDriverUpdateProfileInventorySyncStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the driverInventorySyncState property value. Windows DnF update inventory sync state.
     * @return WindowsDriverUpdateProfileInventorySyncState|null
    */
    public function getDriverInventorySyncState(): ?WindowsDriverUpdateProfileInventorySyncState {
        return $this->driverInventorySyncState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'driverInventorySyncState' => function (ParseNode $n) use ($o) { $o->setDriverInventorySyncState($n->getEnumValue(WindowsDriverUpdateProfileInventorySyncState::class)); },
            'lastSuccessfulSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSuccessfulSyncDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastSuccessfulSyncDateTime property value. The last successful sync date and time in UTC.
     * @return DateTime|null
    */
    public function getLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->lastSuccessfulSyncDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('driverInventorySyncState', $this->driverInventorySyncState);
        $writer->writeDateTimeValue('lastSuccessfulSyncDateTime', $this->lastSuccessfulSyncDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the driverInventorySyncState property value. Windows DnF update inventory sync state.
     *  @param WindowsDriverUpdateProfileInventorySyncState|null $value Value to set for the driverInventorySyncState property.
    */
    public function setDriverInventorySyncState(?WindowsDriverUpdateProfileInventorySyncState $value ): void {
        $this->driverInventorySyncState = $value;
    }

    /**
     * Sets the lastSuccessfulSyncDateTime property value. The last successful sync date and time in UTC.
     *  @param DateTime|null $value Value to set for the lastSuccessfulSyncDateTime property.
    */
    public function setLastSuccessfulSyncDateTime(?DateTime $value ): void {
        $this->lastSuccessfulSyncDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
