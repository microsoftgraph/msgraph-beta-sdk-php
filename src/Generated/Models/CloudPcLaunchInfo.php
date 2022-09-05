<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcLaunchInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $cloudPcId The unique identifier of the Cloud PC.
    */
    private ?string $cloudPcId = null;
    
    /**
     * @var string|null $cloudPcLaunchUrl The connect URL of the Cloud PC.
    */
    private ?string $cloudPcLaunchUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new cloudPcLaunchInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcLaunchInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcLaunchInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcLaunchInfo {
        return new CloudPcLaunchInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudPcId property value. The unique identifier of the Cloud PC.
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        return $this->cloudPcId;
    }

    /**
     * Gets the cloudPcLaunchUrl property value. The connect URL of the Cloud PC.
     * @return string|null
    */
    public function getCloudPcLaunchUrl(): ?string {
        return $this->cloudPcLaunchUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudPcId' => function (ParseNode $n) use ($o) { $o->setCloudPcId($n->getStringValue()); },
            'cloudPcLaunchUrl' => function (ParseNode $n) use ($o) { $o->setCloudPcLaunchUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cloudPcId', $this->cloudPcId);
        $writer->writeStringValue('cloudPcLaunchUrl', $this->cloudPcLaunchUrl);
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
     * Sets the cloudPcId property value. The unique identifier of the Cloud PC.
     *  @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value ): void {
        $this->cloudPcId = $value;
    }

    /**
     * Sets the cloudPcLaunchUrl property value. The connect URL of the Cloud PC.
     *  @param string|null $value Value to set for the cloudPcLaunchUrl property.
    */
    public function setCloudPcLaunchUrl(?string $value ): void {
        $this->cloudPcLaunchUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
