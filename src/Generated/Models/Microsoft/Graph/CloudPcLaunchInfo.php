<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcLaunchInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $cloudPcId  */
    private ?string $cloudPcId = null;
    
    /** @var string|null $cloudPcLaunchUrl  */
    private ?string $cloudPcLaunchUrl = null;
    
    /**
     * Instantiates a new cloudPcLaunchInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcLaunchInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcLaunchInfo {
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
     * Gets the cloudPcId property value. 
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        return $this->cloudPcId;
    }

    /**
     * Gets the cloudPcLaunchUrl property value. 
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
        return  [
            'cloudPcId' => function (self $o, ParseNode $n) { $o->setCloudPcId($n->getStringValue()); },
            'cloudPcLaunchUrl' => function (self $o, ParseNode $n) { $o->setCloudPcLaunchUrl($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cloudPcId', $this->cloudPcId);
        $writer->writeStringValue('cloudPcLaunchUrl', $this->cloudPcLaunchUrl);
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
     * Sets the cloudPcId property value. 
     *  @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value ): void {
        $this->cloudPcId = $value;
    }

    /**
     * Sets the cloudPcLaunchUrl property value. 
     *  @param string|null $value Value to set for the cloudPcLaunchUrl property.
    */
    public function setCloudPcLaunchUrl(?string $value ): void {
        $this->cloudPcLaunchUrl = $value;
    }

}
