<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptRemediationSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $remediatedDeviceCount The number of devices remediated by device health scripts.
    */
    private ?int $remediatedDeviceCount = null;
    
    /**
     * @var int|null $scriptCount The number of device health scripts deployed.
    */
    private ?int $scriptCount = null;
    
    /**
     * Instantiates a new deviceHealthScriptRemediationSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceHealthScriptRemediationSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptRemediationSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptRemediationSummary {
        return new DeviceHealthScriptRemediationSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'remediatedDeviceCount' => function (ParseNode $n) use ($o) { $o->setRemediatedDeviceCount($n->getIntegerValue()); },
            'scriptCount' => function (ParseNode $n) use ($o) { $o->setScriptCount($n->getIntegerValue()); },
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
     * Gets the remediatedDeviceCount property value. The number of devices remediated by device health scripts.
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->remediatedDeviceCount;
    }

    /**
     * Gets the scriptCount property value. The number of device health scripts deployed.
     * @return int|null
    */
    public function getScriptCount(): ?int {
        return $this->scriptCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('remediatedDeviceCount', $this->remediatedDeviceCount);
        $writer->writeIntegerValue('scriptCount', $this->scriptCount);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the remediatedDeviceCount property value. The number of devices remediated by device health scripts.
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value ): void {
        $this->remediatedDeviceCount = $value;
    }

    /**
     * Sets the scriptCount property value. The number of device health scripts deployed.
     *  @param int|null $value Value to set for the scriptCount property.
    */
    public function setScriptCount(?int $value ): void {
        $this->scriptCount = $value;
    }

}
