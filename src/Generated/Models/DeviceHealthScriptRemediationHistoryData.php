<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class DeviceHealthScriptRemediationHistoryData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Date|null $date The date on which devices were remediated by the device health script.
    */
    private ?Date $date = null;
    
    /**
     * @var int|null $noIssueDeviceCount The number of devices that were found to have no issue by the device health script.
    */
    private ?int $noIssueDeviceCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $remediatedDeviceCount The number of devices remediated by the device health script.
    */
    private ?int $remediatedDeviceCount = null;
    
    /**
     * Instantiates a new deviceHealthScriptRemediationHistoryData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceHealthScriptRemediationHistoryData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptRemediationHistoryData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptRemediationHistoryData {
        return new DeviceHealthScriptRemediationHistoryData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the date property value. The date on which devices were remediated by the device health script.
     * @return Date|null
    */
    public function getDate(): ?Date {
        return $this->date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateValue()),
            'noIssueDeviceCount' => fn(ParseNode $n) => $o->setNoIssueDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the noIssueDeviceCount property value. The number of devices that were found to have no issue by the device health script.
     * @return int|null
    */
    public function getNoIssueDeviceCount(): ?int {
        return $this->noIssueDeviceCount;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the remediatedDeviceCount property value. The number of devices remediated by the device health script.
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->remediatedDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('date', $this->date);
        $writer->writeIntegerValue('noIssueDeviceCount', $this->noIssueDeviceCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('remediatedDeviceCount', $this->remediatedDeviceCount);
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
     * Sets the date property value. The date on which devices were remediated by the device health script.
     *  @param Date|null $value Value to set for the date property.
    */
    public function setDate(?Date $value ): void {
        $this->date = $value;
    }

    /**
     * Sets the noIssueDeviceCount property value. The number of devices that were found to have no issue by the device health script.
     *  @param int|null $value Value to set for the noIssueDeviceCount property.
    */
    public function setNoIssueDeviceCount(?int $value ): void {
        $this->noIssueDeviceCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the remediatedDeviceCount property value. The number of devices remediated by the device health script.
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value ): void {
        $this->remediatedDeviceCount = $value;
    }

}
