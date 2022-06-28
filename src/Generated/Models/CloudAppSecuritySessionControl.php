<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudAppSecuritySessionControl extends ConditionalAccessSessionControl implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CloudAppSecuritySessionControlType|null $cloudAppSecurityType Possible values are: mcasConfigured, monitorOnly, blockDownloads. To learn more about these values, Deploy Conditional Access App Control for featured apps.
    */
    private ?CloudAppSecuritySessionControlType $cloudAppSecurityType = null;
    
    /**
     * Instantiates a new CloudAppSecuritySessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppSecuritySessionControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppSecuritySessionControl {
        return new CloudAppSecuritySessionControl();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudAppSecurityType property value. Possible values are: mcasConfigured, monitorOnly, blockDownloads. To learn more about these values, Deploy Conditional Access App Control for featured apps.
     * @return CloudAppSecuritySessionControlType|null
    */
    public function getCloudAppSecurityType(): ?CloudAppSecuritySessionControlType {
        return $this->cloudAppSecurityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudAppSecurityType' => function (ParseNode $n) use ($o) { $o->setCloudAppSecurityType($n->getEnumValue(CloudAppSecuritySessionControlType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('cloudAppSecurityType', $this->cloudAppSecurityType);
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
     * Sets the cloudAppSecurityType property value. Possible values are: mcasConfigured, monitorOnly, blockDownloads. To learn more about these values, Deploy Conditional Access App Control for featured apps.
     *  @param CloudAppSecuritySessionControlType|null $value Value to set for the cloudAppSecurityType property.
    */
    public function setCloudAppSecurityType(?CloudAppSecuritySessionControlType $value ): void {
        $this->cloudAppSecurityType = $value;
    }

}
