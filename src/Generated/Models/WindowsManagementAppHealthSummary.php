<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsManagementAppHealthSummary extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $healthyDeviceCount Healthy device count.
    */
    private ?int $healthyDeviceCount = null;
    
    /**
     * @var int|null $unhealthyDeviceCount Unhealthy device count.
    */
    private ?int $unhealthyDeviceCount = null;
    
    /**
     * @var int|null $unknownDeviceCount Unknown device count.
    */
    private ?int $unknownDeviceCount = null;
    
    /**
     * Instantiates a new WindowsManagementAppHealthSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsManagementAppHealthSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagementAppHealthSummary {
        return new WindowsManagementAppHealthSummary();
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
        return array_merge(parent::getFieldDeserializers(), [
            'healthyDeviceCount' => function (ParseNode $n) use ($o) { $o->setHealthyDeviceCount($n->getIntegerValue()); },
            'unhealthyDeviceCount' => function (ParseNode $n) use ($o) { $o->setUnhealthyDeviceCount($n->getIntegerValue()); },
            'unknownDeviceCount' => function (ParseNode $n) use ($o) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the healthyDeviceCount property value. Healthy device count.
     * @return int|null
    */
    public function getHealthyDeviceCount(): ?int {
        return $this->healthyDeviceCount;
    }

    /**
     * Gets the unhealthyDeviceCount property value. Unhealthy device count.
     * @return int|null
    */
    public function getUnhealthyDeviceCount(): ?int {
        return $this->unhealthyDeviceCount;
    }

    /**
     * Gets the unknownDeviceCount property value. Unknown device count.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('healthyDeviceCount', $this->healthyDeviceCount);
        $writer->writeIntegerValue('unhealthyDeviceCount', $this->unhealthyDeviceCount);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
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
     * Sets the healthyDeviceCount property value. Healthy device count.
     *  @param int|null $value Value to set for the healthyDeviceCount property.
    */
    public function setHealthyDeviceCount(?int $value ): void {
        $this->healthyDeviceCount = $value;
    }

    /**
     * Sets the unhealthyDeviceCount property value. Unhealthy device count.
     *  @param int|null $value Value to set for the unhealthyDeviceCount property.
    */
    public function setUnhealthyDeviceCount(?int $value ): void {
        $this->unhealthyDeviceCount = $value;
    }

    /**
     * Sets the unknownDeviceCount property value. Unknown device count.
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

}
