<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcRestorePointSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $frequencyInHours The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are 4, 6, 12, 16, and 24. The default frequency is 12 hours.
    */
    private ?int $frequencyInHours = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $userRestoreEnabled If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users cannot use snapshots to restore the Cloud PC.
    */
    private ?bool $userRestoreEnabled = null;
    
    /**
     * Instantiates a new cloudPcRestorePointSetting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcRestorePointSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcRestorePointSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcRestorePointSetting {
        return new CloudPcRestorePointSetting();
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
            'frequencyInHours' => function (ParseNode $n) use ($o) { $o->setFrequencyInHours($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'userRestoreEnabled' => function (ParseNode $n) use ($o) { $o->setUserRestoreEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the frequencyInHours property value. The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are 4, 6, 12, 16, and 24. The default frequency is 12 hours.
     * @return int|null
    */
    public function getFrequencyInHours(): ?int {
        return $this->frequencyInHours;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the userRestoreEnabled property value. If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users cannot use snapshots to restore the Cloud PC.
     * @return bool|null
    */
    public function getUserRestoreEnabled(): ?bool {
        return $this->userRestoreEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('frequencyInHours', $this->frequencyInHours);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('userRestoreEnabled', $this->userRestoreEnabled);
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
     * Sets the frequencyInHours property value. The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are 4, 6, 12, 16, and 24. The default frequency is 12 hours.
     *  @param int|null $value Value to set for the frequencyInHours property.
    */
    public function setFrequencyInHours(?int $value ): void {
        $this->frequencyInHours = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the userRestoreEnabled property value. If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users cannot use snapshots to restore the Cloud PC.
     *  @param bool|null $value Value to set for the userRestoreEnabled property.
    */
    public function setUserRestoreEnabled(?bool $value ): void {
        $this->userRestoreEnabled = $value;
    }

}
