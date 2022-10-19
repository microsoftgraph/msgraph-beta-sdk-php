<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HybridAgentUpdaterConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowUpdateConfigurationOverride Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
    */
    private ?bool $allowUpdateConfigurationOverride = null;
    
    /**
     * @var DateTime|null $deferUpdateDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $deferUpdateDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var UpdateWindow|null $updateWindow The updateWindow property
    */
    private ?UpdateWindow $updateWindow = null;
    
    /**
     * Instantiates a new hybridAgentUpdaterConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.hybridAgentUpdaterConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HybridAgentUpdaterConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HybridAgentUpdaterConfiguration {
        return new HybridAgentUpdaterConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowUpdateConfigurationOverride property value. Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
     * @return bool|null
    */
    public function getAllowUpdateConfigurationOverride(): ?bool {
        return $this->allowUpdateConfigurationOverride;
    }

    /**
     * Gets the deferUpdateDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDeferUpdateDateTime(): ?DateTime {
        return $this->deferUpdateDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowUpdateConfigurationOverride' => fn(ParseNode $n) => $o->setAllowUpdateConfigurationOverride($n->getBooleanValue()),
            'deferUpdateDateTime' => fn(ParseNode $n) => $o->setDeferUpdateDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'updateWindow' => fn(ParseNode $n) => $o->setUpdateWindow($n->getObjectValue([UpdateWindow::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the updateWindow property value. The updateWindow property
     * @return UpdateWindow|null
    */
    public function getUpdateWindow(): ?UpdateWindow {
        return $this->updateWindow;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowUpdateConfigurationOverride', $this->allowUpdateConfigurationOverride);
        $writer->writeDateTimeValue('deferUpdateDateTime', $this->deferUpdateDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('updateWindow', $this->updateWindow);
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
     * Sets the allowUpdateConfigurationOverride property value. Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
     *  @param bool|null $value Value to set for the allowUpdateConfigurationOverride property.
    */
    public function setAllowUpdateConfigurationOverride(?bool $value ): void {
        $this->allowUpdateConfigurationOverride = $value;
    }

    /**
     * Sets the deferUpdateDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the deferUpdateDateTime property.
    */
    public function setDeferUpdateDateTime(?DateTime $value ): void {
        $this->deferUpdateDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the updateWindow property value. The updateWindow property
     *  @param UpdateWindow|null $value Value to set for the updateWindow property.
    */
    public function setUpdateWindow(?UpdateWindow $value ): void {
        $this->updateWindow = $value;
    }

}
